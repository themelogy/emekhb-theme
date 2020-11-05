@extends('layouts.master')

@section('content')
    @themeSlide()
    @pageFindByOptions('settings.show_quick_blocks', 'home.quick-blocks')
    @pageFindByOptions('settings.show_service_tab', 'home.departments')
    @blogLatestPosts(4, 'home.latest')
    @pageFindByOptions('settings.show_departmant', 'home.departments')
    @guestbookLatest(3, 'home.latest')
@endsection
