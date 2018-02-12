@extends('layouts.app')

@section('title', 'News page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
@stop
@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp


@section('content')
    <main id="dashboard_index">
        <section class="news_list_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="admin_title_container">
                            <h1>{{ trans('lang.list_of_articles') }}</h1>
                            <a class="action_link" href="{{ URL::to($lang . '/admin/news/create') }}"><i class="icn icon-arrow_left"></i></a>
                            <a class="action_link add_new" href="{{ URL::to($lang . '/admin/news/create') }}"><i class="icn icon-cancel"></i>Add</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($news as $items)
                        <div class="col-xs-12 col-xl-6">
                            <div class="block_container">
                                <div class="edit_elements">
                                    <a href="{{ URL::to($lang . '/admin/news/' . $items->id . '/edit') }}" class="edit_btn"><i class="icn icon-pencil"></i>Edit</a>
                                    {{ Form::open(array('url' => 'admin/news/' . $items->id, 'class' => 'pull-right')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button type="submit" class = "remove_btn"><i class="icn icon-cancel"></i>Delete</button>
                                    {{ Form::close() }}
                                </div>
                                <div class="article_info_block">
                                    <div class="article_img">
                                        @php
                                            $image_counter = 1;
                                        @endphp
                                        @foreach(json_decode($items['front_image']) as $key => $image)
                                            @if($image_counter == 1)
                                                <img src="{{ URL::to('/') }}/news/front_image/{{ $items->created_at->format('F_Y') }}/{{ $image }}" alt="{{ $key }}">
                                            @endif
                                            @php
                                                $image_counter++;
                                            @endphp
                                        @endforeach

                                        @if(empty(json_decode($items['front_image'])))
                                            <img src="/img/no_image.svg" alt="">
                                        @endif
                                    </div>
                                    <div class="article_info">
                                        <h2>@if($lang == 'fr') {{ $items['title_fr'] }} @elseif($lang == 'en') {{ $items['title_en'] }}  @endif</h2>
                                        <h3>{{ $items['title_newspaper'] }}</h3>
                                        <h4>{{ (!empty($items->date)) ? date('d.m.Y', strtotime($items->date)) : '' }}</h4>
                                        <span class="published_label">{{ ($items['status'] == 'on') ? trans('lang.published') : ''}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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