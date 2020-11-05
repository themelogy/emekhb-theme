<div class="row">
    <fieldset>
        <legend>Anasayfa Başlık Ayarları</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_page_home]", 1, old('settings.show_page_home', isset($page->settings->show_page_home) ? $page->settings->show_page_home : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Anasayfa'da Göster
                </label>
            </div>
        </div>

    </fieldset>
    <fieldset>
        <legend>Anasayfa Hızlı Blok</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_quick_blocks]", 1, old('settings.show_quick_blocks', isset($page->settings->show_quick_blocks) ? $page->settings->show_quick_blocks : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Blok'da Göster
                </label>
            </div>
            <div class="form-group{{ $errors->has("settings.quick_block_icon") ? ' has-error' : '' }}">
                {!! Form::label("settings.quick_block_icon", "İkon".':') !!}
                {!! Form::input('text', 'settings[quick_block_icon]', !isset($page->settings->quick_block_icon) ? '' : $page->settings->quick_block_icon, ['class'=>'form-control']) !!}
                {!! $errors->first("settings.quick_block_icon", '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Anasayfa Hizmetler</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_service_tab]", 1, old('settings.show_service_tab', isset($page->settings->show_service_tab) ? $page->settings->show_service_tab : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Hizmetlerde'de Göster
                </label>
            </div>
            <div class="form-group{{ $errors->has("settings.service_tab_icon") ? ' has-error' : '' }}">
                {!! Form::label("settings.service_tab_icon", "İkon".':') !!}
                {!! Form::input('text', 'settings[service_tab_icon]', !isset($page->settings->service_tab_icon) ? '' : $page->settings->service_tab_icon, ['class'=>'form-control']) !!}
                {!! $errors->first("settings.service_tab_icon", '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Anasayfa Departman</legend>
        <div class="col-md-12 form-inline">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[show_departmant]", 1, old('settings.show_departmant', isset($page->settings->show_departmant) ? $page->settings->show_departmant : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Departman'da Göster
                </label>
            </div>
            <div class="form-group{{ $errors->has("settings.departmant_icon") ? ' has-error' : '' }}">
                {!! Form::label("settings.departmant_icon", "İkon".':') !!}
                {!! Form::input('text', 'settings[departmant_icon]', !isset($page->settings->departmant_icon) ? '' : $page->settings->departmant_icon, ['class'=>'form-control']) !!}
                {!! $errors->first("settings.departmant_icon", '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </fieldset>
</div>
