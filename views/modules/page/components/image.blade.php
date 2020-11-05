@if(isset($page) && isset($page_settings))
    @php
        $settings = collect();
        $settings->put("width", $page_settings->image_width ?? 400);
        $settings->put("height", $page_settings->image_height ?? "");
        $settings->put("mode", $page_settings->image_mode ?? "resize");
        $settings->put("quality", $page_settings->image_quality ?? 70);
        $settings->put("alt", $title ?? $page->title);

        $img_class = collect([$page_settings->class ?? "img-responsive"]);

        if(!$page_settings->list_page || @$body_image) {
            switch ($page_settings->image_position) {
                case "top":
                    $img_class->push("img-responsive img-thumbnail margin-bottom-20");
                break;
                case "bottom":
                    $img_class->push("img-responsive img-thumbnail margin-top-20");
                break;
                case "left":
                    $img_class->push("img-responsive img-thumbnail pull-left margin-right-20 margin-bottom-20");
                break;
                case "right":
                    $img_class->push("img-responsive img-thumbnail pull-right margin-left-20 margin-bottom-20");
                break;
                default:
            }
        } else {
            $settings->put("width", $page_settings->list_image_width ?? 400);
            $settings->put("height", $page_settings->list_image_height ?? 200);
            $settings->put("mode", $page_settings->list_image_mode ?? "fit");
        }
        $thumb = $page->present()->firstImage($settings["width"], $settings["height"], $settings["mode"], $settings["quality"]);
        $image = $thumb ? Html::image($thumb, $settings["alt"], ["class"=>$img_class->implode(' ')]) : null;

    @endphp
    {!! $image !!}
@endif
