@extends('layouts.app')

@section('content')
    <section class="contact_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/contact/contact.jpg" alt="Contact us">
            </div>
            <div class="contact_container jeans_bg">
                <h1>Contact</h1>
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <label class="form_el_label"><span>Secteur</span></label>
                            <select id="view_select" name="object_view" title="">
                                <option value="0">Option 1</option>
                                <option value="1">Option 2</option>
                                <option value="2">Option 3</option>
                                <option value="3">Option 4</option>
                                <option value="4">Option 5</option>
                            </select>
                            <span>Veuillez spécifier le secteur que vous souhaitez contacter</span>
                        </div>
                        <div class="col-12 col-md-7">
                            <label class="form_el_label"><span>Email</span></label>
                            <div class="input_container">
                                <input type="email" name="emial" value="" placeholder="">
                            </div>
                            <span>Veuillez entrer votre adresse e-mail</span>
                        </div>
                        <div class="col-12">
                            <label class="form_el_label"><span>Message</span></label>
                            <div class="input_container">
                                <textarea name="message" value="" placeholder=""></textarea>
                            </div>
                            <span>Rédigez votre message ici.</span>
                        </div>
                        <div class="col-12 col-md-4">
                            <button type="submit" class="btn btn_blue">Envoyer</button>
                            <p class="address">
                                Fight Night Saint-Tropez
                                2 Montée de la Citadelle
                                1202 ST TROPEZ
                            </p>
                            <p class="tel">T. + 41 (0)22 365 10 10</p>
                            <p class="tel">F. + 41 (0)22 365 10 20</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop