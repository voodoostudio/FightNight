@extends('layouts.app')

{{--@section('title', 'Details page')--}}
{{--@section('css')--}}
    {{--<link rel="stylesheet" type="text/css" href="{{mix('css/dashboard.css')}}">--}}
{{--@stop--}}
@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp


@section('content')
    <main>
        <section class="article_edit_section">
            <div class="container-fluid" style="background-color: #d07070;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="admin_title_container">
                            <h1 class="dashboard_header">{{ trans('lang.creating_article') }}</h1>
                            <a class="action_link" href="{{ URL::to($lang . '/admin/news') }}"><i class="icn icon-arrow_left"></i></a>
                        </div>
                    </div>
                </div>
                {{ Html::ul($errors->all(), array('class' => 'error_list')) }}
                <div class="block_container">
                    <form method="POST" id="articleEditForm" action = "{{ route('news.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-12 margin_bottom_20">
                                        <div class="label_container">
                                            <label class="form_el_label"><span>{{ trans('lang.title') }} *</span></label>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="#fr_title" role="tab" data-toggle="tab">FR</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#en_title" role="tab" data-toggle="tab">EN</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in show active" id="fr_title">
                                                <div class="input_container">
                                                    <input type="text" name="title_fr" id="title_fr" placeholder="{{ trans('lang.title') }}">
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="en_title" >
                                                <div class="input_container">
                                                    <input type="text" name="title_en" id="title_fr" placeholder="{{ trans('lang.title') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="img_upload_container">
                                    <div class="img_upload">
                                        <input name="image_file" type="file" accept="image/*" id="header_img" class="input_file"/>
                                        <label for="header_img"><span>{{ trans('lang.choose_header_img') }}</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img_upload_container">
                                            <div class="img_upload">
                                                <input name="pdf_file" accept="application/pdf" type="file" id="pdf" class="input_file"/>
                                                <label for="pdf"><span>Choose a pdf</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_upload_container">
                                            <div class="img_upload">
                                                <input name="archive_file" accept=".zip, .rar" type="file" id="archive" class="input_file"/>
                                                <label for="archive"><span>Choose a archive file</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="col-xs-12 margin_bottom_20">--}}
                                {{--<div class="img_upload_container">--}}
                                    {{--<div class="img_upload">--}}
                                        {{--<input name="body_image[]" type="file" accept="image/*, application/pdf" id="body_img" class="input_file"/>--}}
                                        {{--<label for="body_img"><span>{{ trans('lang.choose_body_img') }}</span></label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-xs-12 margin_bottom_20">
                                <div class="label_container">
                                    <label class="form_el_label"><span>{{ trans('lang.article_text') }}</span></label>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#fr_text" role="tab" data-toggle="tab">FR</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#en_text" role="tab" data-toggle="tab">EN</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in show active" id="fr_text">
                                        <div class="input_container">
                                            <textarea name="description_fr" id="text_content" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="en_text" >
                                        <div class="input_container">
                                            <textarea name="description_en" id="text_content" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn gold_inverse" id = "btn-add-submit" type="submit">{{ trans('lang.save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script type="text/javascript">
        $('#article_datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,
            format: 'yyyy-mm-dd',
            icons: {
                rightIcon: '<div class="datepicker_btn"><i class="icn icon-calendar"></i></div>',
                previousMonth: '<i class="icn icon-arrow_big_left"></i>',
                nextMonth: '<i class="icn icon-arrow_big_right"></i>'
            }
        });

        $('#article_datepicker').on('click', function () {
            $( ".datepicker_btn" ).trigger( "click" );
        });

        $(document).mouseup(function(e)
        {
            var container = $(".gj-calendar");

            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                container.hide();
            }
        });
    </script>
@stop