<section class="row recent_post_home2">
    <div class="container">
        <div class="row titleRow">
            <h5>@lang("themes::guestbook.titles.what we say for")</h5>
            <h2>@lang("themes::guestbook.titles.guestbook comments")</h2>
        </div>
        <div class="row">
            @foreach($comments as $comment)
            <div class="col-sm-4 recent_post">
                <div class="row m0 inner">
                    <div class="postText row m0">
                        {!! strip_tags($comment->message) !!}
                    </div>
                    <div class="media authorMeta">
                        <div class="media-left"><img class="lazy" data-src="{{ Theme::url('images/user.png') }}" alt="{{ $comment->present()->fullname }}" style="height: 36px;"></div>
                        <div class="media-body media-middle">
                            <h5>{{ $comment->present()->fullname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
