@if (Firewall::isWhitelisted(Request::ip()))
@if (Route::has('login'))
    @if (Auth::check())
        <a class="btn btn-info btn-lg" href="{{ url('/home') }}">Home</a>
    @else
        <a class="btn btn-success btn-lg" href="{{ url('/login') }}">Login</a>
        <a class="btn btn-default btn-lg" href="{{ url('/register') }}">Register</a>
    @endif
@endif
<a class="btn btn-info btn-lg" href="{{ url('/blog') }}">News</a>

@endif

<a class="btn btn-primary btn-lg" href="{{ url('/games') }}"><i class="fa fa-fw fa-3x fa-gamepad text-primary"></i><br>Let's Play!</a>