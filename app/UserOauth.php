<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;
use App\User;

use Illuminate\Database\Eloquent\Model;


class UserOauth extends Model
{
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'oauth_provider',
        'oauth_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
