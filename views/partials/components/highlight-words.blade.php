@php
function highlight_words($html, &$module) {
    $patterns =[]; $replaces = [];
    foreach ($module->tags as $tag) {
        $keyword = preg_quote($tag->name);
        $patterns[] = "/\b($keyword)\b/ui";
        $replaces[] = "<a href=\"$tag->url\"><strong>".$tag->name."</strong></a>";
    }
    $html = preg_replace($patterns, $replaces, html_entity_decode($html));
    return  $html;
}
@endphp

{!! highlight_words($slot, $module) !!}
