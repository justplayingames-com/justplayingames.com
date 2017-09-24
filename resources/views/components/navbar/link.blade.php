<li @if(URL::current() == url($url)) class="active" @endif>
<a href="{{ url($url) }}"><i class="{{ $icon }}"></i> @lang($text)</a>
</li>