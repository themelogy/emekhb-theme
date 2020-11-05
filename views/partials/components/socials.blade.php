<ul class="{{ $listClass ?? 'list-inline social_menu m0 fleft' }}">
    @foreach(['facebook' => 'fa-facebook', 'instagram'=>'fa-instagram', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play', 'spotify' => 'fa-spotify'] as $sk => $sv)
        @if(setting('theme::'.$sk) && $sk == 'whatsapp')
            <li>
                <a rel="nofollow" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="whatsapp:{{ setting('theme::'.$sk) }}"></a>
            </li>
        @elseif(setting('theme::'.$sk))
            <li>
                <a rel="nofollow" target="_blank" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="{{ setting('theme::'.$sk) }}"></a>
            </li>
        @endif
    @endforeach
</ul>
