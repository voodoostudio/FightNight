@extends('layouts.app')

@section('content')
    <section class="contact_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/contact/contact.jpg" alt="Contact us banner">
            </div>
            <div class="contact_container jeans_bg_ragged">
                <h1 class="title--translated">Contact</h1>
                <form action="{{ route('post_contact') }}" method="POST" id="ajax-contact">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-7">
                            <div class="form_group">
                                <label class="form_el_label"><span>{{ trans('lang.sector') }}</span></label>
                                <select id="view_select" name="select_option_contact" title="">
                                    <option value="Presse">Presse</option>
                                    <option value="Billetterie">Billetterie</option>
                                    <option value="Partenaires">Partenaires</option>
                                    <option value="Informations Générales">Informations Générales</option>
                                </select>
                                {{--<span class="form_placeholder">{{ trans('lang.specify_sector') }}</span>--}}
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-7">
                            <div class="form_group">
                                <label class="form_el_label"><span>{{ trans('lang.email') }}</span></label>
                                <div class="input_container">
                                    <input type="email" name="email" id="email" value="" placeholder="">
                                </div>
                                {{--<span class="form_placeholder">{{ trans('lang.enter_email') }}</span>--}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_group">
                                <label class="form_el_label"><span>Message</span></label>
                                <div class="input_container">
                                    <textarea name="message" id="message" value="" placeholder=""></textarea>
                                </div>
                                {{--<span class="form_placeholder">{{ trans('lang.write_message') }}</span>--}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="form-messages"></div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn_beige">{{ trans('lang.send') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="address">
                            Fight Night Saint-Tropez<br>
                            1 Montée de la Citadelle<br>
                            83990 ST TROPEZ
                        </p>
                        <p class="tel">T. +33 (0)4 94 20 34 24</p>
                        <p class="tel">P. +33 (0)6 81 14 55 33</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery("#ajax-contact").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        email: "Not valid email"
                    }
                },
                submitHandler: function (form) {
                    $.ajax({
                        type: form.method,
                        dataType: 'json',
                        cache: false,
                        url: form.action,
                        data: $(form).serialize()
                    })
                    .done(function (response) {
                        if (response.status == 'success') {
                            $('#form-messages').html('<p class = "' + response.status + '">' + response.msg + '</p>');
                            // Clear the form.
                            $('#email').val('');
                            $('#message').val('');
                        }
                    })
                    .fail(function (response) {
                        $('#form-messages').html('<p class = "' + response.status + '">' + response.msg + '</p>');
                    });
                }
            });
        });
    </script>
@stop