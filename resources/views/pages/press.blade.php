@extends('layouts.app')

@section('content')
    <section class="press_section" style="margin-top: 70px">
        <div class="container-fluid">
            <div class="row">
                @foreach($news as $item)
                    <div class="col-12 col-lg-6">
                        <div class="block_container">
                            <div class="article_info_block">
                                <div class="article_img">
                                    <a href="{{ route('press-details', ['id' => $item['id']]) }}">
                                        @if(!empty($item['image_file']))
                                            <img style="max-height: 150px;" src="{{ URL::to('/') }}/news/image/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['image_file'] }}" alt="Photo">
                                        @else
                                            <img src="/img/no_image.svg" alt="No photo">
                                        @endif
                                    </a>
                                </div>
                                <div class="article_info">
                                    <h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>
                                    <h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

@section('js')

@stop