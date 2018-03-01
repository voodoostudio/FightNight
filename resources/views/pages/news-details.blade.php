@extends('layouts.app')

{{--{{ dd($item) }}--}}

@section('content')

    <div class="row"> <!-- todo вытащить из массива новость -->
        @foreach($item as $itemm)
            <div class="col-lg-12" style="background: #0b2e13;">
                <h2>{{ $itemm['title_fr'] }}</h2>
                <p>{{ $itemm['title_en'] }}</p>

                <!-- IMAGE -->
                @if(!empty($itemm['image_file']))
                    <img style="max-height: 150px;" src="{{ URL::to('/') }}/news/image/{{ date('F_Y', strtotime($itemm['created_at'])) }}/{{ $itemm['image_file'] }}" alt="Photo">
                @else
                    <img src="/img/no_image.svg" alt="No photo">
                @endif

                <!--PDF -->
                @if(!empty($itemm['pdf_file']))
                    <a target="_blank" href="{{ URl::to('/') }}/news/pdf/{{ date('F_Y', strtotime($itemm['created_at'])) }}/{{ $itemm['pdf_file'] }}">{{ $itemm['pdf_file'] }}</a>
                @endif

                <!-- ARCHIVE -->
                @if(!empty($itemm['archive_file']))
                    <a target="_blank" href="{{ URl::to('/') }}/news/archives/{{ date('F_Y', strtotime($itemm['created_at'])) }}/{{ $itemm['archive_file'] }}">{{ $itemm['archive_file'] }}</a>
                @endif
                <p>{{ $itemm['description_fr'] }}</p>
                <p>{{ $itemm['description_en'] }}</p>
            </div>
        @endforeach
    </div>

@stop

@section('js')

@stop