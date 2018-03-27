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
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn_beige">{{ trans('lang.send') }}</button>
                                </div>
                                <div class="col-8">
                                    <div id="form-messages"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="address">
                            Fight Night Saint-Tropez<br>
                            2 Montée de la Citadelle<br>
                            83990 SAINT-TROPEZ
                        </p>
                        <p class="tel">T. +33 (0)4 94 20 34 24</p>
                        <p class="tel">P. +33 (0)6 24 26 03 28</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $(function() {
            // Get the form.
            var form = $('#ajax-contact');
            // Get the messages div.
            var formMessages = $('#form-messages');
            // Set up an event listener for the contact form.
            $(form).submit(function(e) {
                // Stop the browser from submitting the form.
                e.preventDefault();
                // Serialize the form data.
                var formData = $(form).serialize();
                // Submit the form using AJAX.
                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    if(response.status == 'success') {
                        formMessages.html('<p class = "'+ response.status +'">' + response.msg + '</p>');
                        // Clear the form.
                        $('#email').val('');
                        $('#message').val('');
                    }
                })
                .fail(function(response) {
                    formMessages.html('<p class = "'+ response.status +'">' + response.msg + '</p>');
                });
            });
        });
    </script>
@stop