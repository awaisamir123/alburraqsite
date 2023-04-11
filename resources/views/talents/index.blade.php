@extends('layout.burraq')
@section('meta')
    <meta name="description" content="USA website design company offering website designing, website developers USA. Wordpress website development, mobile application development and web designers.">
@endsection
@section('title', 'Our Talent Showcase')
@section('page')
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div id="page-header">
                        <div class="text">
                            <h1 class="margin-bottom-small">Our Talent Showcase</h1>
                            <p class="heading left max full grey-dark" style="max-width: 100%;">Al-Burraq Technologies architects design and develops enterprise-class Mobile, Web, Social and Big Data solutions for some of the world’s most innovative startup companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page header  -->
        <div id="home-wrap" class="content-section" style="padding: 0 30px;">
            <div class="container">
                <!--  Portfolio  -->
                <section id="projects" data-isotope="load-simple" class="padding-onlytop-md padding-onlybottom-md">
                    <!--  Filters  -->
                    <div class="row no-margin text-left">
                        <div class="col-sm-12 padding-leftright-null">
                            <div class="filter-wrap left">
                                <ul class="col-md-12 filters uppercase padding-leftright-null ">
                                    <li data-filter="*" class="is-checked">All</li>
                                    @if (isset($stacks))
                                        @foreach ($stacks as $stack)
                                            <li data-filter=".{{ str_replace(' ', '', $stack->name) }}">{{ $stack->name }}</li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  END Filters  -->
                    <div class="projects-items equal three-columns">
                        <!-- Single Project -->
                            @foreach ($talents as $talent)
                                <div class="single-item one-item design @foreach ($talent->stacks as $tStacks) @foreach ($stacks as $stack) @if ($stack->id == $tStacks->name) {{ str_replace(' ', '', $stack->name) }} @endif @endforeach @endforeach">

                                    <div class="item ">
                                        <div class="image">
                                            <img style="width: 100%;" src="/talent_thumbnails/{{ $talent->image }}" alt="{{ $talent->name }}" loading="lazy">
                                        </div>
                                        <div class="content">
                                            <h3><strong>{{ $talent->name }}</strong></h3>
                                        </div>

                                        <a href="#" onclick="playVideo('{{ $talent->video }}', '{{ $talent->name }}')" class="link" data-toggle="modal" data-target="#exampleModalCenter"></a>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!--  END Page Content -->


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: auto !important;display: flex;justify-content: center;">
            <div class="modal-content" style="background: transparent; box-shadow: none; border: none;">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <iframe id="talent_video" width="888" height="500" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <style>
        #desc {


            overflow: hidden !important;
            text-overflow: ellipsis;
        }

        #page-header .text {
            padding: 75px 50px 10px 50px;
            position: relative;
            z-index: 1;
        }

        .modal-dialog-centered {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            min-height: calc(100% - (0.5rem * 2));
        }

        .modal-dialog-centered {
            min-height: calc(100% - (1.75rem * 2));
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }



        .modal-body {
            position: relative;
            padding: 0px;
        }

        @media screen and (max-width: 768px) {

            #talent_video {
                width: 300px;
                height: auto !important;
            }

        }

        .close {
            position: absolute;
            right: 0;
            top: -30px;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        .custompadding {
            padding-left: 60px;
            margin-bottom: 50px !important;
        }

        .one-item {
            width: 32% !important;
            ;
        }


        @media screen and (max-width: 1100px) {
            .text {
                padding: 30px 0px;
            }
        }

        @media screen and (max-width: 900px) {
            .text {
                padding: 30px 0px;
            }
        }

        @media screen and (max-width: 1000px) {
            .text {
                padding: 30px 0px;
            }
        }

        @media screen and (max-width: 991px) {

            .one-item {
                width: 50% !important;
            }

        }

        @media screen and (max-width: 600px) {

            .text {
                padding: 30px 0px;
            }

            .one-item {
                width: 100% !important;
            }

        }

        @media screen and (max-width: 500px) {
            footer .text {
                padding: 20px 20px !important;
            }

            .one-item {
                width: 100% !important;
            }

            .custompadding {
                padding-left: 17px;
                margin-bottom: 10px !important;
            }

            li {
                padding: 5px;
                border: 1px solid #c7c7c7;

            }
        }

        @media screen and (max-width: 500px) {
            #page-header .text {
                padding: 20px 20px !important;
            }
        }

        @media screen and (max-width: 500px) {
            .content-section .text .small {
                padding: 20px 20px !important;
            }
        }

        @media screen and (max-width: 500px) {
            #page-content #projects .projects-items .single-item .item {
                background-color: white;
                border-radius: 4px;
                transition: all .4s ease;
                margin: 5px !important;
            }
        }
    </style>

    <script type="text/javascript">

        function playVideo(link, name) {

            var screenWidth = $(document).width();
            var screenheight = $(document).height();
            let screenheight2 = screen.height;

            $('#talent_video').css('width', screenWidth * 0.9);
            $('#talent_video').css('height', screenheight2 * 0.7);

            var videoSrc = link;

            $('#exampleModalCenter').on('show.bs.modal', function() {
                $("#exampleModalCenter iframe").attr("src", videoSrc + "?autoplay=1");
            });

            $("#exampleModalCenter").on('hidden.bs.modal', function(e) {
                $("#exampleModalCenter iframe").attr("src", null);
            });

        }
    </script>

@endsection
