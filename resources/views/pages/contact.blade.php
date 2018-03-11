@extends('layouts.app')

@section('content')
    <section class="contact_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/contact/contact.jpg" alt="Contact us banner">
            </div>
            <div class="contact_container jeans_bg">
                <h1 class="title--translated">Contact</h1>
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form_group">
                                <label class="form_el_label"><span>Secteur</span></label>
                                <select id="view_select" name="object_view" title="">
                                    <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>
                                    <option value="4">Option 5</option>
                                </select>
                                <span class="form_placeholder">Veuillez spécifier le secteur que vous souhaitez contacter</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="form_group">
                                <label class="form_el_label"><span>Email</span></label>
                                <div class="input_container">
                                    <input type="email" name="emial" value="" placeholder="">
                                </div>
                                <span class="form_placeholder">Veuillez entrer votre adresse e-mail</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_group">
                                <label class="form_el_label"><span>Message</span></label>
                                <div class="input_container">
                                    <textarea name="message" value="" placeholder=""></textarea>
                                </div>
                                <span class="form_placeholder">Rédigez votre message ici.</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn_blue">Envoyer</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="address">
                            Fight Night Saint-Tropez<br>
                            2 Montée de la Citadelle<br>
                            1202 ST TROPEZ
                        </p>
                        <p class="tel">T. + 41 (0)22 365 10 10</p>
                        <p class="tel">F. + 41 (0)22 365 10 20</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop