<div class="modal fade" id="appointmefnt_form_pop" tabindex="-1" role="dialog" aria-labelledby="appointmefnt_form_pop">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" id="contact_form">
            <div class="alert alert-success" role="alert" v-show="success">
                @{{ successMessage }}
            </div>
                {!! Form::open(['v-on:submit'=>'submitForm', 'class' => 'row m0 appointment_home_form2', 'method'=>'post', 'v-show'=>'!success']) !!}
                {!! Form::hidden('from', Request::path()) !!}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times-circle-o"></i>
                </button>
                <h2 class="title">SİZİ<br>ARAYALIM</h2>
                <div class="form_inputs row m0">
                    <div class="row m0 input_row">
                        <div class="col-sm-12 col-md-12 col-lg-6 p0" :class="{'has-error':errors.first_name}">
                            <label for="first_name">{{ trans('contact::contacts.form.first_name') }}</label>
                            <input name="first_name" type="text" class="form-control" placeholder="{{ trans('contact::contacts.form.first_name') }}" v-model="input.first_name" :class="{'has-error':errors.first_name}" />
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 p0" :class="{'has-error':errors.last_name}">
                            <label for="last_name">{{ trans('contact::contacts.form.last_name') }}</label>
                            <input name="last_name" type="text" class="form-control" placeholder="{{ trans('contact::contacts.form.last_name') }}" v-model="input.last_name" :class="{ 'is-invalid' : hasError('last_name') }" />
                        </div>
                    </div>
                    <div class="row m0 input_row" :class="{'has-error':errors.email}">
                        <label for="email">{{ trans('contact::contacts.form.email') }}</label>
                        <input name="email" type="text" class="form-control" placeholder="{{ trans('contact::contacts.form.email') }}" v-model="input.email" :class="{ 'is-invalid' : hasError('email') }" />
                    </div>
                    <div class="row m0 input_row" :class="{'has-error':errors.phone}">
                        <label for="phone">{{ trans('contact::contacts.form.phone') }}</label>
                        <input name="phone" type="text" class="form-control" placeholder="{{ trans('contact::contacts.form.phone') }}" v-model="input.phone" :class="{ 'is-invalid' : hasError('phone') }" />
                    </div>
                    {{--<div class="row m0 input_row" :class="{'has-error':errors.enquiry}">--}}
                        {{--<label for="enquiry">{{ trans('contact::contacts.form.enquiry') }}</label>--}}
                        {{--<textarea name="enquiry" id="app_texts" class="form-control" placeholder="{{ trans('contact::contacts.form.enquiry') }}" v-model="input.enquiry" :class="{ 'is-invalid' : hasError('enquiry') }"></textarea>--}}
                    {{--</div>--}}
                    <div class="row m0 input_row" :class="{'has-error':errors.captcha_contact}">
                        <div class="pull-right">
                            {!! Captcha::image('captcha_contact') !!}
                        </div>
                        <span v-for="error in errors.captcha_contact" class="help-block">@{{ error }}</span>
                    </div>
                    <input type="submit" class="form-control" value="Gönder">
                </div>
                <div class="row m0 form_footer">
                    <a href="tel:@setting('theme::mobile')"><i class="fa fa-phone"></i> @setting('theme::mobile')</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@push('js-stack')
    <script src="{{ Module::asset('contact:js/vue/vue.min.js', ["defer"]) }}"></script>
    <script src="{{ Module::asset('contact:js/vue/axios.min.js', ["defer"]) }}"></script>
    <script src="{{ Module::asset('contact:js/vue/loadingoverlay.min.js', ["defer"]) }}"></script>
@endpush

@push('js-inline')
    <script defer>
        document.addEventListener("DOMContentLoaded", function(event) {
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = '{{ csrf_token() }}';
            window.axios.defaults.headers.common['Cache-Control'] = 'no-cache';
            new Vue({
                el: '#contact_form',
                data: {
                    input: {
                        first_name: '',
                        last_name: '',
                        phone: '',
                        email: '',
                        enquiry: '',
                        captcha_contact: ''
                    },
                    errors: {},
                    success: false,
                    successMessage: ''
                },
                methods: {
                    submitForm: function (e) {
                        e.preventDefault();
                        this.success = false;
                        this.input.captcha_contact = grecaptcha.getResponse(captcha_contact);
                        this.ajaxStart(true);
                        axios.post('{{ route('api.contact.call') }}', this.$data.input)
                            .then(response => {
                                this.successMessage = response.data.message;
                                this.success = true;
                                this.resetForm();
                                this.ajaxStart(false);
                                fbq('track', 'Contact');
                            })
                            .catch(error => {
                                this.errors = error.response.data;
                                this.success = false;
                                this.ajaxStart(false);
                                grecaptcha.reset(captcha_contact);
                            });
                    },
                    getError: function (field) {
                        if (this.errors[field]) {
                            return this.errors[field][0];
                        }
                    },
                    hasError: function (field) {
                        if (this.errors[field]) {
                            return true;
                        }
                        return false;
                    },
                    resetForm: function () {
                        var self = this;
                        Object.keys(this.$data.input).forEach(function (key, index) {
                            self.$data.input[key] = '';
                        });
                    },
                    ajaxStart: function (loading) {
                        if (loading) {
                            $('form', this.$el).LoadingOverlay("show", {
                                zIndex: 10
                            });
                        } else {
                            $('form', this.$el).LoadingOverlay("hide", {
                                zIndex: 10
                            });
                        }
                    }
                }
            });
        });
    </script>
    {!! Captcha::setLang(locale())->scriptWithCallback(['captcha_contact']) !!}
@endpush
