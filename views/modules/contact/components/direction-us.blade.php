<a href="https://www.google.com/maps/dir/Current+Location/@setting('contact::contact-map-lat'),@setting('contact::contact-map-lng')"
    class="{{ $class ?? "view_all" }}"
    target="{{ $target ?? "_blank" }}">
    {!! $slot ?? trans('themes::contact.direction us') !!}
</a>
