@extends('layouts.app')

@section('content')
    <section class="tickets_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/tickets/tickets.jpg" alt="Titckets banner">
            </div>

            <div class="countdown_container jeans_bg_ragged">
                <h1 class="title--translated">{{ trans('lang.tickets_title') }}</h1>
                <img src="/img/tickets/CITADELLE_V4.jpg" usemap="#image-map" width="100%" >
                <map name="image-map">
                    <area target="" arena="TB1" alt="tables_1" title="TABLES ZONE 1" href="#tables_1" data-toggle="modal" data-target="#tables" coords="1,134,0,372,164,368,294,364,351,360,387,357,404,356,424,355,458,355,486,355,514,356,624,316,646,305,666,293,683,277,704,258,724,242,738,225,752,204,770,172,781,133,790,108,526,117,437,134,470,254,335,290,302,166" shape="poly">
                    <area target="" arena="SL1" alt="salons_1" title="SALONS ZONE 1" href="#salons_1" data-toggle="modal" data-target="#salons" coords="163,429,173,431,183,434,197,439,221,444,240,449,269,454,279,456,297,460,320,463,342,465,365,465,392,466,424,466,456,465,503,461,542,455,566,449,598,439,623,430,629,426,753,490,725,511,683,531,639,551,595,563,560,571,523,577,486,581,435,584,377,584,323,582,274,575,218,564,217,500,203,472,190,455" shape="poly">
                    <area target="" arena="TB2" alt="tables_2" title="TABLES ZONE 2" href="#tables_2" data-toggle="modal" data-target="#tables" coords="166,369,302,363,346,359,373,358,414,355,464,354,505,356,514,358,565,391,629,426,600,439,561,449,525,457,454,464,389,466,316,462,260,452,197,438,162,427,166,420,162,397,170,394" shape="poly">
                    <area target="" arena="TB3" alt="tables_3" title="TABLES ZONE 3" href="#tables_3" data-toggle="modal" data-target="#tables" coords="624,317,664,294,679,280,708,255,721,244,746,215,761,187,771,167,790,108,838,124,839,136,859,147,855,161,886,170,863,227,851,259,836,280,815,304,789,327,763,344,736,363,706,381,692,389,635,360" shape="poly">
                    <area target="" arena="SL2" alt="salons_2" title="SALONS ZONE 2" href="#salons_2" data-toggle="modal" data-target="#salons" coords="694,390,728,369,786,329,814,304,833,283,849,263,887,170,941,187,936,203,924,237,911,269,901,286,881,318,868,335,850,351,832,366,813,380,754,423" shape="poly">
                    <area target="" arena="CH" alt="chaises" title="CHAISES ZONE" href="#chaises" data-toggle="modal" data-target="#chaises" coords="755,423,835,365,863,339,877,324,895,298,910,270,918,250,931,218,939,187,1000,205,1044,227,1085,249,1102,259,1118,265,1140,279,1150,286,1158,304,1164,318,1167,335,1168,350,1166,367,1162,381,1160,393,1143,420,1116,459,1083,503,1045,546,1016,575,999,589,976,606,947,624,918,639,912,582,887,537,849,497,809,456" shape="poly">
                </map>

                <div class="modal fade" id="tables" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{ route('tickets_widget', ['name' => 'tables']) }}" style="border:0; min-height: 600px;" width = "100%" ></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="salons" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{ route('tickets_widget', ['name' => 'salons']) }}" style="border:0; min-height: 600px;" width = "100%" ></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="chaises" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{ route('tickets_widget', ['name' => 'chaises']) }}" style="border:0; min-height: 600px;" width = "100%" ></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="button_pdf">
                    <a href="/img/tickets/offre-vip.pdf" download="OFFRE-VIP.pdf" class="red_btn" style="float: none">
                        OFFRE VIP
                    </a>
                </div>
                {{-- @include('includes.countdown')

                <h3>{{ trans('lang.coming_soon') }}</h3>--}}

            </div>

        </div>
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/index.js')}}"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Apr 25, 2018 00:00:01").getTime();
        countdown();
    </script>
    <script type="text/javascript" src="https://www.weezevent.com/js/widget/min/widget.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.imagemapster.js') }}"></script>
    <script>
        function map_ster() {

            var map = $('img[usemap]');
            var basic_opts = {
                mapKey: 'arena',
                isSelectable:false,
                showToolTip: true,
                areas: [{
                    key: 'TB1',
                    fillColor: '676767',
                    fillOpacity: 0.5
                   /* toolTip: 'TABLES',*/
                },
                {
                    key: 'TB2',
                    fillColor: '676767',
                    fillOpacity: 0.5
                },
                {
                    key: 'TB3',
                    fillColor: '676767',
                    fillOpacity: 0.5
                },
                {
                    key: 'SL1',
                    fillColor: '676767',
                    fillOpacity: 0.5
                },
                {
                    key: 'SL2',
                    fillColor: '676767',
                    fillOpacity: 0.5
                },
                {
                    key: 'CH',
                    fillColor: '676767',
                    fillOpacity: 0.5
                }
                ]
            };
            var initial_opts = $.extend({}, basic_opts,
                {
                    staticState: true,
                    fill: false,
                    stroke: true,
                    strokeWidth: 0.5,
                    strokeColor: '000000'
                });

            map.mapster(initial_opts)
                .mapster('snapshot')
                .mapster('rebind', basic_opts, true);

        }

        $( document ).ready(function() {
            map_ster();
        });

        $( window ).resize(function() {
            map_ster();
        });
    </script>
@stop