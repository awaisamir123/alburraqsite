@extends('layout.burraq')
@section('meta')
<meta name="description" content="USA website design company offering website designing, website developers USA. Wordpress website development, mobile application development and web designers.">
@endsection
@section('title','Portfolio web designing company USA | website development')
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
                <section id="projects" data-isotope="load-simple" class="{{--page--}} padding-onlytop-md padding-onlybottom-md">
                    <!--  Filters  -->
                    <div class="row no-margin text-left">
                        <div class="col-sm-12 padding-leftright-null">
                            <div class="filter-wrap left">
                                <ul class="col-md-12 filters uppercase padding-leftright-null ">
                                    <li data-filter="*" class="is-checked">All</li>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <li  data-filter=".{{$category->name}}">{{$category->name}}</li>
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
                                <div class="single-item one-item design
                                          {{isset($portfolio->category->name) ? $portfolio->category->name : ''}}

                                @foreach($portfolio->tags as $ptag)
                                @foreach($tags as $tag)
                                @if($tag->id==$ptag->name)
                                       {{$tag->name}}
                                @endif
                            @endforeach
                            @endforeach

                                        ">



                                    <div class="item ">
                                        <div class="image">
                                        <img style="width: 100%;" src="/portfolioimages/thumbnails/{{$portfolio->featuredimage}}" alt="">
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
                    {{--{!! $portfolios->render() !!}--}}

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

<style>




    .custompadding{
        padding-left: 60px;
        margin-bottom: 50px !important;
    }
    .one-item{
        width: 32% !important; ;
    }


    @media screen and (max-width: 1100px)  {
        .text {
            padding: 30px 0px   ;
        }
    }

    @media screen and (max-width: 900px)  {
        .text {
            padding: 30px 0px   ;
        }
    }
    @media screen and (max-width: 1000px)  {
        .text {
            padding: 30px 0px   ;
        }
    }

    @media screen and (max-width: 991px)          {

        .one-item{
            width: 50% !important;
        }

    }

    @media screen and (max-width: 600px)          {

        .text {
            padding: 30px 0px   ;
        }
        .one-item{
            width: 100% !important;
        }

    }

    @media screen and (max-width: 500px)          {
    footer .text {
        padding: 20px 20px   !important;
    }

        .one-item{
            width: 100% !important;
        }

        .custompadding{
            padding-left: 17px;
            margin-bottom: 10px !important;
        }

        li{
            padding: 5px;
            border: 1px solid #c7c7c7;

        }
    }

    @media screen and (max-width: 500px) {
        #page-header .text {
            padding: 20px 20px    !important;
        }
    }

    @media screen and (max-width: 500px)  {
        .content-section .text .small {
            padding: 20px 20px !important;
        }
    }

    @media screen and (max-width: 500px)  {
        #page-content #projects .projects-items .single-item .item{
            background-color: white;
            border-radius: 4px;
            transition: all .4s ease;
            margin: 5px !important;
        }
    }








</style>


@endsection
