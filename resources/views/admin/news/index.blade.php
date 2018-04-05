@extends('layouts.app')

{{--{{ dd($news->toArray()) }}--}}

@section('title', 'News page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@stop
@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

@section('content')
    <main id="dashboard_index">
        <section class="admin_items_list_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="title_container">
                            <h1 class="dashboard_header">
                                {{ trans('lang.list_of_articles') }}
                                <a class="action_link add_new" href="{{ URL::to($lang . '/admin/news/create') }}"><i class="fas fa-plus"></i></a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="outer_block_container">
                    <div class="inner_block_container">
                        <div class="row">
                            @foreach($news as $items)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="admin_item_info_block">
                                        <div class="edit_elements">
                                            <a class="edit_btn" href="{{ URL::to($lang . '/admin/news/' . $items->id . '/edit') }}"><i class="fas fa-edit"></i></a>
                                            {{ Form::open(array('url' => 'admin/news/' . $items->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button type="submit" class = "remove_btn"><i class="fas fa-trash-alt"></i></button>
                                            {{ Form::close() }}
                                        </div>
                                        <div class="admin_item_img">
                                            @php
                                                $extension = new SplFileInfo($items->image_file);
                                                $jpg_preview = preg_replace('"\.pdf$"', '.jpg', $items->image_file);
                                            @endphp
                                            @if(strtolower($extension->getExtension()) == 'pdf')
                                                <img src = "{{ URL::to('/') }}/news/pdf/{{ $items->updated_at->format('F_Y') }}/{{ $jpg_preview }}" alt = ""/>
                                            @else
                                                <img src="{{ URL::to('/') }}/news/image/{{ $items->updated_at->format('F_Y') }}/{{ $items->image_file }}" />
                                            @endif
                                            @if(empty($items->image_file))
                                                <img src="/img/no_image.svg" alt="">
                                            @endif
                                        </div>
                                        {{--<div class="admin_item_info">
                                            <h2>@if($lang == 'fr') {{ $items['title_fr'] }} @elseif($lang == 'en') {{ $items['title_en'] }}  @endif</h2>
                                        </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('javascript')
    {{--<script type="text/javascript">--}}
        {{--if ($(window).width() >= 1200) {--}}
            {{--tallestArticleBlock();--}}
        {{--}--}}
    {{--</script>--}}
@stop