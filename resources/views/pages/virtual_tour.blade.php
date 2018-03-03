@extends('layouts.app')

@section('id', 'virtual_tour')

@section('content')

    <section class="virtual_tour">
        <div class="container-fluid">
            <div id="virtual_tour" style="height: 600px"></div>
        </div>
    </section>

@stop

@section('js')
    <script type="text/javascript" src="/virtual_tours/FightNight/FightNight.js"></script>
    <script>
        embedpano({
            swf:"/virtual_tours/FightNight/FightNight.swf",
            xml:"/virtual_tours/FightNight/FightNight.xml",
            target:"virtual_tour"
        });
    </script>
@stop