<div class="row">
    <fieldset>
        <legend>Sayfa Gösterim Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu]", "Menü göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_menu) ? $page->settings->show_menu : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_menu_location]", "Menü Gösterim Alanı", $errors, ['right'=>'Sağ', 'left'=>'Sol'], isset($page->settings->show_menu_location) ? $page->settings->show_menu_location : "right") !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[show_content]", "İçerik Gösterme", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->show_content) ? $page->settings->show_content : 0) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset>
        <legend>Sayfa Listeleme Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page]", "Alt Sayfaları göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_page) ? $page->settings->list_page : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page_type]", "Sayfa Türü", $errors, [0=>'Menü', 1=>'Tam Sayfa'], isset($page->settings->list_page_type) ? $page->settings->list_page_type : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_per_page]", "Sayfalama", $errors, array(''=>'Seçiniz') + array_combine(range(1, 20, 1), range(1, 20, 1)), isset($page->settings->list_per_page) ? $page->settings->list_per_page : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_type]", "Liste Türü", $errors, ['grid'=>'Grid', 'list'=>'Liste'], isset($page->settings->list_type) ? $page->settings->list_type : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_grid]", "Grid", $errors, array(''=>'Seçiniz') + array_combine(range(1, 12, 1), range(1, 12, 1)), isset($page->settings->list_grid) ? $page->settings->list_grid : 6) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_show_content]", "Alt Sayfa İçerik", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_show_content) ? $page->settings->list_show_content : 0) !!}
        </div>
    </fieldset>
</div>

<div class="row">
    <fieldset>
        <legend>Sayfa Blok Gösterimi</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[page_list_service]", "Sayfa Seçimi", $errors, [''=>"Seçiniz"]+Page::all()->pluck('title', 'slug')->toArray(), isset($page->settings->page_list_service) ? $page->settings->page_list_service : 0) !!}
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[page_list_service_limit]", "Sayfa Sayısı", $errors, array(''=>'Seçiniz') + array_combine(range(1, 12, 1), range(1, 12, 1)), isset($page->settings->page_list_service_limit) ? $page->settings->page_list_service_limit : 6) !!}
        </div>
        <div class="col-md-3">
            <div class="form-group{{ $errors->has("settings.page_list_service_icon") ? ' has-error' : '' }}">
                {!! Form::label("settings.page_list_service_icon", "İkon".':') !!}
                {!! Form::input('text', 'settings[page_list_service_icon]', !isset($page->settings->page_list_service_icon) ? '' : $page->settings->page_list_service_icon, ['class'=>'form-control']) !!}
                {!! $errors->first("settings.page_list_service_icon", '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </fieldset>
</div>
