@extends('admin.layouts.app')

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

@section('content')
    <main>
        <section class="admin_items_list_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="block-menu">
                            <ul class="nav">
                                <li>
                                    <a class="{{ (URL::current() == URL::to($lang . '/admin') || URL::current() == URL::to('/admin') || URL::current() == URL::to($lang . '/admin/news') || URL::current() == URL::to('/admin/news')) ? 'admin-menu-active' : '' }}" href="{{ URL::to($lang . '/admin') }}">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ (URL::current() == URL::to($lang . '/admin/gallery') || URL::current() == URL::to('/admin/gallery')) ? 'admin-menu-active' : '' }}" href="{{ URL::to($lang . '/admin/gallery') }}">
                                        Gallery
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="title_container">
                            <h1 class="dashboard_header">
                                <a class="action_link" href="{{ URL::to($lang . '/admin') }}"><i class="fas fa-arrow-left"></i></a>
                                {{ trans('lang.gallery') }}
                                <a class="action_link add_new" href="{{ URL::to($lang . '/admin/gallery/create') }}"><i class="fas fa-plus"></i></a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="outer_block_container">
                    <div class="inner_block_container">
                        <div class="row">
                            @foreach($gallery as $items)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="admin_item_info_block">
                                        <div class="edit_elements">
                                            <a class="edit_btn" href="{{ URL::to($lang . '/admin/gallery/' . $items->id . '/edit') }}"><i class="fas fa-edit"></i></a>
                                            {{ Form::open(array('url' => 'admin/gallery/' . $items->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button type="submit" class = "remove_btn"><i class="fas fa-trash-alt"></i></button>
                                            {{ Form::close() }}
                                        </div>
                                        <div class="admin_item_img">
                                            @if(!empty($items['front_image']))
                                                <img src="{{ URL::to('/') }}/gallery/front_image/{{ $items->updated_at->format('F_Y') }}/{{ $items['front_image'] }}" alt="{{ $items['front_image'] }}">
                                            @else
                                                <img src="/img/details/no_agent_photo.svg" alt="">
                                            @endif
                                        </div>
                                        <div class="admin_item_info">
                                            <h2>@if($lang == 'fr') {{ $items['title_fr'] }} @elseif($lang == 'en') {{ $items['title_en'] }}  @endif</h2>
                                        </div>
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

@section('js')

@stop