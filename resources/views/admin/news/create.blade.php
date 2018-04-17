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
                                <a class="action_link" href="{{ URL::to($lang . '/admin/news') }}"><i class="fas fa-arrow-left"></i></a>
                                {{ trans('lang.creating_article') }}
                            </h1>
                        </div>
                    </div>
                </div>
                {{ Html::ul($errors->all(), array('class' => 'error_list')) }}
                <div class="outer_block_container">
                    <div class="inner_block_container">
                        <form method="POST" id="articleEditForm" action = "{{ route('news.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="img_upload_container sm">
                                            <div class="img_upload">
                                                <input name="image_file" type="file" accept="application/pdf, image/*" id="header_img" class="input_file"/>
                                                <label for="header_img"><span>{{ trans('lang.choose_header_img') }}</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 margin_top_10">
                                <button class="btn gold_inverse" id = "btn-add-submit" type="submit">{{ trans('lang.save') }}</button>
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
    <script type="text/javascript">
        showSelectedFileName();
    </script>
@stop