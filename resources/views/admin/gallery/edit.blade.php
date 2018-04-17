@extends('admin.layouts.app')

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

@section('content')
    <main>
        <section class="admin_edit_section">
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
                        {{ Form::model($gallery, array('route' => array('gallery.update', $gallery['id']), 'method' => 'PUT', 'files' => true)) }}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12 margin_bottom_20">
                                        <div class="label_container">
                                            <label class="form_el_label"><span>{{ trans('lang.title') }} *</span></label>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#fr_title" role="tab" data-toggle="tab">FR</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#en_title" role="tab" data-toggle="tab">EN</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in show active" id="fr_title">
                                                <div class="input_container">
                                                    <input type="text" name="title_fr" id="title_fr" value="{{ $gallery['title_fr'] }}" placeholder="{{ trans('lang.title') }}">
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="en_title" >
                                                <div class="input_container">
                                                    <input type="text" name="title_en" id="title_en" value="{{ $gallery['title_en'] }}" placeholder="{{ trans('lang.title') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="label_container">
                                            <label class="form_el_label"><span>Category name *</span></label>
                                        </div>
                                        <div class="input_container">
                                            <input name="category_name" type="text" placeholder="Category" value="{{ $gallery['category_name'] }}" id="article_datepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="img_upload_container">
                                    <div class="img_upload">
                                        <input name="front_image" type="file" accept="image/*" id="header_img" class="input_file"/>
                                        <label for="header_img"><span>Gallery preview</span></label>
                                        <div class="preview_front_image">
                                            @if(!empty($gallery['front_image']))
                                                <img style="max-width: 100px; height: 60px;" src="{{ URL::to('/') }}/gallery/front_image/{{ $gallery->updated_at->format('F_Y') }}/{{ $gallery['front_image'] }}" alt="{{ $gallery['front_image'] }}">
                                            @endif
                                        </div>
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
                                <div class="preview_gallery_images row">
                                    @if(!empty($gallery['gallery_images']))
                                        @foreach(json_decode($gallery['gallery_images']) as $key => $images)
                                            <div class="image_block" style="background-image: url('{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->updated_at->format('F_Y') }}/{{ $images }}');">
                                                <a href="{{ route('remove_image', ['gallery_name' => $key, 'gallery_id' => $gallery['id']]) }}"><i class="fa fa-times"></i></a>
                                                {{--<img src="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->updated_at->format('F_Y') }}/{{ $images }}" alt="{{ $images }}">--}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn" id = "btn-add-submit" type="submit">{{ trans('lang.save') }}</button>
                            </div>
                        </div>
                        {{ Form::close() }}
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