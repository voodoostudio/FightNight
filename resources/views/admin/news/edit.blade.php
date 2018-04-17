@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@stop
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
                                <a class="action_link" href="{{ URL::to($lang . '/admin/news') }}"><i class="fas fa-arrow-left"></i></a>
                                {{ trans('lang.creating_article') }}
                            </h1>
                        </div>
                    </div>
                </div>
                {{ Html::ul($errors->all(), array('class' => 'error_list')) }}
                <div class="outer_block_container">
                    <div class="inner_block_container">
                        {{ Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PUT', 'files' => true)) }}
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="img_upload_container sm">
                                        <div class="img_preview">
                                            <div class="img_preview_thumbnail" >
                                                @php
                                                    $extension = new SplFileInfo($news->image_file);
                                                    $jpg_preview = preg_replace('"\.pdf$"', '.jpg', $news->image_file);
                                                @endphp
                                                @if(strtolower($extension->getExtension()) == 'pdf')
                                                    <img src = "{{ URL::to('/') }}/news/pdf/{{ $news->updated_at->format('F_Y') }}/{{ $jpg_preview }}" alt = ""/>
                                                @else
                                                    <img src="{{ URL::to('/') }}/news/image/{{ $news->updated_at->format('F_Y') }}/{{ $news->image_file }}" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="img_upload">
                                            <input name="image_file" type="file" accept="application/pdf, image/*" id="header_img" class="input_file"/>
                                            <label for="header_img"><span>{{ trans('lang.choose_header_img') }}</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 margin_top_10" style="text-align:right;">
                            <button class="btn gold_inverse" id = "btn-add-submit" style="float: none;" type="submit">{{ trans('lang.save') }}</button>
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
    <script type="text/javascript">
        showSelectedFileName();
    </script>
@stop


