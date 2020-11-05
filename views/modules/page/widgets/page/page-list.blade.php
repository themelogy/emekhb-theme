@php
    $children      = $page->children()->orderBy('position')->paginate(@$page->settings->list_per_page ?? 6);
    $grid_size     = @$page->settings->list_grid ?? 3;
    $chunk_size    = ceil(12/$grid_size);
    $column_size   = is_float(12/$grid_size) ? $grid_size : $grid_size;
    $column_div    = ceil(12 % $grid_size);
    $show_image    = @$page->settings->show_cover;
    $show_content  = @$page->settings->list_show_content;
@endphp
@if($children->count()>0)
    @foreach($children->chunk($chunk_size) as $chunk)
        <div class="row">
            @foreach($chunk as $child)
                <div class="col-md-@if($loop->first){{ $column_size }}@elseif($loop->last && $column_div){{ $column_div }}@else{{ $column_size }}@endif">
                    <div class="thumbnail card">
                        @if($show_image)
                            @include('page::components.image', ["page_settings"=>$page->settings, "page"=>$child])
                        @endif
                        <div class="caption">
                            <a href="{{ $child->url }}">
                                <h5 class="card-title font-16 title">{{ $child->title }}</h5>
                            </a>
                            @if($show_content)
                                <p>{{ str_limit(strip_tags($child->body), 170) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            {!! $children->links('partials.components.pagination') !!}
        </div>
    </div>
@endif
