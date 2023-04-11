@extends('layout.burraq')
@section('title','Al-burraq')
@section('page')
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div id="page-header">
                        <div class="text">
                            <h1 class="margin-bottom-small">Portfolio</h1>
                            <p class="heading left max full grey-dark">Al-Burraq Technologies architects design and develops enterprise-class Mobile, Web, Social and Big Data solutions for some of the world’s most innovative startup companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page header  -->
        <div id="home-wrap" class="content-section" style="padding: 0 30px;">
            <div class="container">
                <!--  Portfolio  -->
                <section id="projects" data-isotope="load-simple" class="{{--page--}} padding-onlytop-md padding-onlybottom-lg">
                    <!--  Filters  -->
                    <div class="row no-margin text-left">
                        <div class="col-sm-12 padding-leftright-null">
                            <div class="filter-wrap left">
                                <ul class="col-md-12 filters uppercase padding-leftright-null">
                                    <li data-filter="*" class="is-checked">All</li>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <li data-filter=".{{$category->name}}">{{$category->name}}</li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  END Filters  -->
                    <div class="projects-items equal three-columns">
                        <!-- Single Project -->
                        @if(isset($portfolios))
                            @foreach($portfolios as $portfolio)
                                <div class="single-item one-item design {{$portfolio->category->name}}">
                                    <div class="item ">
                                        <div class="image">
                                        <img style="width: 100%;" src="/portfolioimages/{{$portfolio->featuredimage}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h3><strong>{{$portfolio->title}}</strong></h3>
                                            <p style="height: 100px;overflow: hidden"  id="desc">{!! strip_tags($portfolio->description) !!}</p>
                                        </div>
                                        <a href="{{route('portfolio.detail',[strtolower(str_replace(' ','-' ,$portfolio->title)),$portfolio->id] )}}" class="link"></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <!-- END Single Project -->

                    </div>
                </section>
                <!-- END Portfolio -->

                <div style="text-align: center">
                    {!! $portfolios->render() !!}

                </div>

            </div>
        </div>
    </div>
    <!--  END Page Content -->

    <style>
        #desc{


            overflow: hidden !important;
            text-overflow: ellipsis;
        }
        #page-header .text {
            padding: 75px 50px 10px 50px;
            position: relative;
            z-index: 1;
        }
    </style>

@endsection
