<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use App\UserOauth;

use Auth;
use DB;
use Hash;
use Session;
use Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider(Request $request, $oauth_provider)
    {
        return Socialite::driver($oauth_provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request, $oauth_provider)
    {
        $oauth_user = Socialite::driver($oauth_provider)->user();

        $auth_user = $this->findOrCreateUser($oauth_user, $oauth_provider);

        Auth::login($auth_user, true);

        Session::put('user', $auth_user);

        $redirect = $request->input('redirect');
        if ($redirect) {
            return redirect($redirect);
        }

        return redirect(url('/'));
    }

    protected function findOrCreateUser($oauth_user, $oauth_provider)
    {
        $oauth = UserOauth::where('oauth_id', $oauth_user->id)->first();

        if ($oauth) {
            return $oauth->user;
        }

        return DB::transaction(function () use ($oauth_user, $oauth_provider) {
            $user = User::create([
                'name'     => $oauth_user->name,
                'email'    => $oauth_user->email,
                'password' => Hash::make(str_random(16))
            ]);

            $user->aka()->create([]);

            $user->oauths()->create([
                'oauth_provider' => $oauth_provider,
                'oauth_id' => $oauth_user->id
            ]);

            return $user;
        });
    }
}
