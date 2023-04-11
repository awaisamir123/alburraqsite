@extends('layout.burraq')
@section('title','Al-burraq')
@section('page')
    <!--  Page Content  -->
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div id="page-header">
                        <div class="text">
                            <h1 class="margin-bottom-small">Blog<span class="color">.</span></h1>
                            <p class="heading left max full grey-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quos rem, error facilis eveniet perspiciatis tempora totam animi doloribus. Quia officia laudantium dolor sapiente? Dolor maxime voluptatum sint molestias ipsa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page header  -->
        <div id="home-wrap" class="content-section">
            <!-- Blog -->
            <div class="special-container">
                <div class="row no-margin wrap-text">
                    <!--  News Section  -->
                    <section id="news" class="page">
                        <div class="news-items equal three-columns">
                            <!-- Single News -->
                            @if(isset($blogs))
                                @foreach($blogs as $blog)
                                    <div  style="height: 500px" class="single-news one-item">
                                        <article>
                                            <img src="{{$blog->guid}}" alt="blog">
                                            <div  class="content">
                                                <span class="meta">News \ {{$blog->post_date}}</span>
                                                <h3>{{$blog->post_title}}</h3>
                                                <p  style="height: 100px;overflow: hidden"  id="desc">
                                                    {!! strip_tags($blog->post_content) !!}
                                                </p>
                                                <a href="{{route('blogs.show',$blog->ID)}}" class="btn-pro">Read more</a>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            @endif
                            <!-- END Single News -->

                        </div>
                    </section>
                    <!-- END News -->

                    <div style="text-align: center">
                        {!! $blogs->render() !!}

                    </div>
                </div>
            </div>
            <!-- Full width Border Separator -->
            <div class="row no-margin">
                <div class="border-separator"></div>
            </div>
            <!-- END Full Width Border Separator -->
            <div class="container">
                <!--  Navigation  -->
                <section id="nav" class="padding-onlytop-lg">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="nav-left">
                                <a href="single-blog-style-2.html" class="btn-alt small shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Older posts</span></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nav-right">
                                <a href="#" class="btn-alt small shadow margin-null"><span>Newer posts</span><i class="icon ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  END Navigation  -->
            </div>
        </div>
        <!-- END Blog -->
    </div>
    <!--  END Page Content -->


    <style>
        .special-container{
            width: 86%;
            margin-left: 6%;
        }

        #desc{


            overflow: hidden !important;
            text-overflow: ellipsis;
        }
    </style>



@endsection
