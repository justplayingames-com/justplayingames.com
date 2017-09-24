<li class="dropdown @if(URL::current() == url('/user')) active @endif">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="{{url('/user')}}"><i class="fa fa-fw fa-user-circle-o"></i> Profile</a>
        </li>        
        <li>
            <a href="{{ route('logout') }}"
                onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
            "><i class="fa fa-fw fa-sign-out"></i> Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
