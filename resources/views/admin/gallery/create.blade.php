@extends('layouts.app')

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp


@section('content')
    <main>
        <section class="article_edit_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="title_container">
                            <h1 class="dashboard_header">
                                <a class="action_link" href="{{ URL::to($lang . '/admin/gallery') }}"><i class="fas fa-arrow-left"></i></a>
                                Create Gallery
                            </h1>

                        </div>
                    </div>
                </div>
                {{ Html::ul($errors->all(), array('class' => 'error_list')) }}
                <div class="outer_block_container">
                    <div class="inner_block_container">
                        <form method="POST" id="articleEditForm" action = "{{ route('gallery.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-12 margin_bottom_20">
                                            <div class="label_container">
                                                <label class="form_el_label"><span>{{ trans('lang.title') }} *</span></label>
                                                {{--<ul class="nav nav-tabs" role="tablist">--}}
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link active" href="#fr_title" role="tab" data-toggle="tab">FR</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="nav-item">--}}
                                                        {{--<a class="nav-link" href="#en_title" role="tab" data-toggle="tab">EN</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            </div>
                                            {{--<div class="tab-content">--}}
                                                <div role="tabpanel" class="tab-pane fade in show active" id="fr_title">
                                                    <div class="input_container">
                                                        <input type="text" name="title_fr" id="title_fr" placeholder="{{ trans('lang.title') }}">
                                                    </div>
                                                </div>
                                                {{--<div role="tabpanel" class="tab-pane fade" id="en_title" >--}}
                                                    {{--<div class="input_container">--}}
                                                        {{--<input type="text" name="title_en" id="title_fr" placeholder="{{ trans('lang.title') }}">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                        <div class="col-12">
                                            <div class="label_container">
                                                <label class="form_el_label"><span>Year *</span></label>
                                            </div>
                                            <div class="input_container">
                                                <input name="year" type="text" placeholder="Year" id="article_datepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="img_upload_container">
                                        <div class="img_upload">
                                            <input name="front_image[]" type="file" accept="image/*" id="header_img" class="input_file"/>
                                            <label for="header_img"><span>Gallery preview</span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 margin_bottom_20">
                                    <div class="img_upload_container">
                                        <div class="img_upload">
                                            <input name="gallery_images[]" type="file" accept="image/*" id="gallery_img" class="input_file" multiple/>
                                            <label for="gallery_img"><span>Gallery images</span></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn" id = "btn-add-submit" type="submit">{{ trans('lang.save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')

    <script>
        showSelectedFileName();
    </script>
@stop