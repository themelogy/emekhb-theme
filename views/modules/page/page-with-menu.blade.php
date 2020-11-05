@if(@$page->parent->settings->show_menu_location == "left")
    <div class="col-sm-3 sidebar">
        @parentMenu($page, 'page.page-menu')
    </div>
    <div class="col-sm-9 serviceDetailsSection">
        @include("page::components.body", ["page"=>$page])
    </div>
@endif
@if(@$page->parent->settings->show_menu_location == "right")
    <div class="col-sm-9 serviceDetailsSection">
        @include("page::components.body", ["page"=>$page])
    </div>
    <div class="col-sm-3 sidebar">
        @parentMenu($page, 'page.page-menu')
    </div>
@endif
