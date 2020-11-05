<div class="col-sm-12 col-md-4 sidebar">
    @blogCategories()
    @blogLatestPosts(3)
    @if(Request::route()->getName()=="blog.index")
    @blogTags($posts ?? $post)
    @endif
</div>
