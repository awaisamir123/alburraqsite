@extends('layout.burraq')
@section('meta')
<meta name="description" content="Al-Burraq a web development company in USA providing website designing in USA, WordPress development, mobile application development and SEO service in USA">
@endsection
@section('title','Al-Burraq| Website designing in USA and web development company USA')
@section('page')
    <!--  Page Content  -->

    <style type="text/css">
        .home-header-top{
            margin-top: -66px;margin-bottom: -100px;
        }
        .home-icon-font{
            font-size:70px;
        }

    </style>



    <div id="page-content">

        <!--  HomePage header  -->
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null home-header-top" >
                    <div id="home-header">
                        <div class="text">
                            <h1  class="margin-bottom-small textAlignment ">Web Designing and Development <br> Company in USA</h1>
                            <p class="heading left max full grey-dark textAlignment">We (AlBurraqTech LLC) are Tech consultants to your products powered by Machine Learning. AlBurraqTech's primary focus is Ecomerece based systems, we develop systems from scratch and  improved existing with the help of Machine Learning. Want to discuss how we can impact your sales? Call us at <a href="tel:+13018875877"> +1 (301) 887 5877 </a>
                            </p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
                            <!-- <div class="row padding-onlytop-md ">
                                <div class="col-md-12">
                                    <div class="image-carousel dots-inside">
                                        <div class="item">
                                            <img  src="/homebanners/website-2-banner-min.jpg" alt="image 4">
                                        </div>
                                        <div class="item">
                                            <img  src="/homebanners/1-banner-mobile-app-min.jpg" alt="image 3">
                                        </div>
                                        <div class="item">
                                            <img  src="/homebanners/coding-min.jpg" alt="image 2">
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="container">
                               <div class="row no-margin wrap-slider">
                                   <div class="col-md-6 col-sm-6 padding-leftright-null">
                                       <div id="flexslider" class="home">
                                           <ul class="slides">
                                               <li style="background-image:url(/homebanners/face-artificial.jpg)"></li>
                                               <li style="background-image:url(/homebanners/bulb.jpg)"></li>
                                               <li style="background-image:url(/homebanners/get-it.png)"></li>
                                           </ul>
                                       </div>
                                   </div>
                                   <div class="col-md-6 col-sm-6 padding-leftright-null">
                                        <div id="home-slider" class="secondary-background">
                                            <div id="flexslider-2" class="home" style="background-color:#32ACE3;">
                                            <ul class="slides">

                                                <li>
                                                    <h1 class="white margin-bottom slider-heading">Expert In Machines Learning, AI Web and Mobile Development<span>.</span></h1>
                                                   <p class="heading left grey-light slider-p">Al-Burraq Technologies is one of the top machine learning companies in USA providing machine learning applications</p>
                                                </li>
                                                 <li><h1 class="white margin-bottom slider-heading">We Teach<br>Machines With Code<span>.</span></h1>

                                                 <p class="heading left grey-light slider-p">Is it really hard to produce Quality? We don't think so,  Quality is a habit, not an ACT </p></li>
                                                 <li><h1 class="white margin-bottom slider-heading">Web Designing<br>and Development Compamny in USA<span>.</span></h1>
                                                 <p class="heading left grey-light slider-p">At Al-Burraq, we deliver stunning web design and development service. If you need website designing and development company in USA, just call us today! </p></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-6 col-md-offset-3">
                                           <a href="{{route('contact-us.index')}}" class="btn-alt small border margin-null">Hire Us</a>
                                         </div>
                                      </div>
                                   </div>
                               </div>
                            </div>
                            <div class="container">
                            <div class="row no-margin padding-onlytop-md content-section">
                                    <!-- Counters -->
                                    <div class="col-md-12 col-sm-12 col-md-12 col-xs-12 padding-leftright-null">
                                        <div id="counters" class="row padding-md-leftright-null padding-md text-center">
                                            <div class=" stat-counter    padding-md-leftright-null">
                                                <div class="statistic">
                                                    <i style="font-size: 60px!important;" class="material-icons color service home-icon-font">people</i>
                                                    <span data-from="0" data-to="168">&nbsp;</span>
                                                    <h3>Clients</h3>
                                                </div>
                                            </div>
                                            <div class="stat-counter   padding-md-leftright-null">
                                                <div class="statistic">
                                                    <i style="font-size: 60px!important;" class="material-icons color service home-icon-font">card_travel</i>
                                                    <span data-from="0" data-to="9">&nbsp;</span>
                                                    <h3>Experience</h3>
                                                </div>
                                            </div>
                                            <div class=" stat-counter  padding-md-leftright-null">
                                                <div class="statistic">
                                                    <!-- <i class="material-icons color service">tr -->
                                                    <i style="font-size: 60px!important;" class="material-icons color service home-icon-font">work</i>
                                                    <span data-from="0" data-to="220">&nbsp;</span>
                                                    <h3>Projects</h3>
                                                </div>
                                            </div>
                                            <div class=" stat-counter   padding-md-leftright-null">
                                                <div class="statistic">
                                                    <!-- <i class="material-icons color service">lightbulb_outline</i> -->
                                                    <i style="font-size: 60px!important;" class="material-icons color service home-icon-font">grade</i>
                                                    <span data-from="0" data-to="4">&nbsp;</span>
                                                    <h3>Awards</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Counters -->
                                  </div>
                            </div>




        <!--  Simple Slider  -->


{{--values--}}

        <div id="home-wrap" class="content-section" style="padding:0 56px 50px;     " >
          <div class="container">
                <!--  Portfolio  -->
                <section id="" data-isotope="load-simple" class="page padding-top-null padding-onlybottom-ml">
                    <!--  Filters  -->
                    <!--  END Filters  -->
                    <h2 class="textAlignment" style="padding-bottom:20px;"  ><strong>Values</strong></h2>

                   {{-- <div >
                        <h2  style="margin-bottom: 30px"><strong>Web Designing and Development Company in USA/Denmark<span class="color">.</span></strong></h2>
                        <h4 style="margin-bottom: 30px">We Love Wallmart so we only charge if you are satisfied with the work we have done. We will fix issues without any cost till 6 months. Stay Chill.</h4>
                    </div>--}}




                    <!--  Simple Services -->
                   {{-- <div class="row padding-sm">
                        <div class="col-md-6">
                            <h3 class="margin-bottom-small">Web design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="margin-bottom-small">Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>
                        </div>
                    </div>--}}
                   {{-- <!--  Material Services -->
                    <div class="row padding-sm">
                        <div class="col-md-12 padding-leftright-null">
                            <div class="col-md-6">
                                <div class="margin-md-bottom">
                                    <i class="icon ion-ios-analytics-outline service material left"></i>
                                    <div class="service-content">
                                        <h3 class="margin-bottom-extrasmall">Business Goals</h3>
                                        <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse eveniet dicta minus quaerat dolorem illum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="margin-md-bottom">
                                    <i class="icon ion-ios-color-filter-outline service material left"></i>
                                    <div class="service-content">
                                        <h3 class="margin-bottom-extrasmall">Professional Team</h3>
                                        <p class="margin-bottom-null">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maiores ut, assumenda consectetur sequi sapiente!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END Material Services -->--}}
                    <!-- Standard Services -->
                    <div class="row padding-null">
                        <div class="col-md-12 padding-leftright-null " style="margin-left: 8px;">
                            <div class="col-md-4">
                                <div class="margin-md-bottom">
{{--
                                    <i class="icon ion-ios-analytics-outline color service"></i>
--}}
                                    <div  style="margin-bottom: 20px" class="image textAlignment">
                                        <!-- <img style="" src="\icons\q4.png" alt=""> -->
                                        <i  class="fa fa-check-circle-o quality-circle" aria-hidden="true"></i>
                                    </div>
                                    <h3 class="margin-bottom-small textAlignment"><strong>QUALITY</strong></h3>
                                    <p  class="textAlignment textAlignJustify"> Quality is our major aspect that Al-Burraq Technologies does not compromise on. We provide immaculate and high-performance in SEO, WordPress, Website, Mobile and Laravel application  development. We provide answers to your daily web-based development projects to ensure your workflow is smooth, that’s is our promise to you.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="margin-md-bottom">
{{--
                                    <i  class="icon ion-ios-lightbulb-outline service color"></i>
--}}
                                    <div style="margin-bottom: 20px" class="image textAlignment">
                                        <img style="" src="\icons\bulbicon.png" alt="">
                                    </div>
                                    <h3 class="margin-bottom-small textAlignment textAlignJustify"><strong>INNOVATION</strong></h3>
                                    <p  class="margin-bottom-null textAlignment textAlignJustify">Innovation is something that we at Al-Burraq Technologies pride ourselves upon, we have the magic to think up creative and cost-efficient ways to perform our work which sets our work apart from our fellow competitors and gives us an edge and shows it our work.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
{{--
                                    <i  class="icon ion-ios-color-filter-outline color service"></i>
--}}
                                    <div style="margin-bottom: 20px" class="image textAlignment">
                                        <img style="" src="\icons\expert.png" alt="">
                                    </div>
                                    <h3 class="margin-bottom-small textAlignment textAlignJustify"><strong>EXPERTISE</strong></h3>
                                    <p class="margin-bottom-null textAlignment textAlignJustify">Al-Burraq Technologies offers some of the best and most convenient solutions that are not only cost-effective but tailored to the needs of the client so that it suits that workflow. Our workforce is well-versed in their domain and provide work of the highest quality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Standard Services -->

                </section>
                <!-- END Portfolio -->
            </div>
        </div>

{{--What sets a Part--}}
        <div id="home-wrap" class="content-section setsApartContainner " >
            <div class="container">

                <h2  class="setusapart marginLeftHeading textAlignment" ><strong>What Sets Us Apart</strong></h2>

                <!--  Accordion and Tabs  -->
                <div class="row padding-null" style="margin-left: 0px;margin-right: 0px">
                    <div class="col-md-6">
                        <!--  Tab  -->
                        <!-- Nav tabs -->
                        <div class="image">
                            <img class="img-responsive" style="margin-right: 5px;width: 100%" src="/homebanners/why-choose-us-new.jpg" alt="image 2">
                        </div>
                       {{-- <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-one" aria-controls="tab-one" role="tab" data-toggle="tab">Tab One</a></li>
                            <li role="presentation"><a href="#tab-two" aria-controls="tab-two" role="tab" data-toggle="tab">Tab Two</a></li>
                        </ul>
                        <!--  Nav Tabs  -->
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-one">Content one. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dolorem sequi qui odit accusantium tempore debitis, est mollitia dolores voluptatum eos ea fugit quis rerum expedita non beatae nostrum. Eos.</div>
                            <div role="tabpanel" class="tab-pane" id="tab-two">Content two. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo animi ipsa architecto corrupti, atque commodi. Incidunt, accusamus. Nesciunt, quam, cumque? Vero id consequatur, aperiam ad quasi! Iure enim nesciunt hic!</div>
                        </div>--}}
                        <!-- Tab panes -->
                        <!--  Tab  -->
                    </div>
                    <!-- Accordion -->
                    <div class="col-md-6" style="">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default" style="">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           <strong>Proven Track Record</strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div style="text-align: justify;text-justify: inter-word;" class="panel-body textAlignment">
                                        We at Al-Burraq Technologies always scheme up new ways and new applications to provide to our clients. This in turn helps them in completing projects on time, cutting costs on delays, better UI/UX and an amazing output of work overall. Our work is tailored towards the social media marketing agency which is why our content is rooted towards marketing our clients to become more mainstream even further than they initially are.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           <strong>Domain Expertise</strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div style="text-align: justify;text-justify: inter-word;" class="panel-body textAlignment">
                                        We at Al-Burraq Technologies are one of USA’s top website designing and development company and we got here not by sheer luck, but by being very good at what we do, we are specialized and provide an array of services such as
                                        Mobile Application development
                                        Website development
                                        custom WordPress plugin development
                                        Social media marketing
                                        SEO (Search engine Optimization)
                                        Software development service
                                        And we have done so for many reputable start-ups in USA.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <strong>Ensured Service Levels</strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div style="text-align: justify;text-justify: inter-word;" class="panel-body textAlignment">
                                        Being a reputable and established web design and development company in USA means that we are consistent in our work and that you can expect the best from our side when we work towards a project. Our demography is not limited to a single industry, we provide solutions to customers in media, healthcare, mobile and social gaming, retail, financial services, technology, education and publishing and what’s more is that it’s done by our highly talented team.
                                        <a href="{{route('about-us.index')}}">Read more.</a>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion -->
                </div>
                <!--  END Accordion and Tabs  -->

            </div>
        </div>

{{--portfolio--}}
        <div id="home-wrap" class="content-section" style="padding: 0 30px 42px;">
            <div class="container">
                <a href="{{route('portfolio.index')}}">  <h2 class="marginLeftHeading textAlignment"><strong>Our Portfolio</strong></h2></a>
                <!--  Portfolio  -->
                <section id="projects" data-isotope="load-simple" class="{{--page--}} padding-onlybottom-small">
                    <!--  Filters  -->
                    <!--  END Filters  -->
                    <div class="projects-items equal three-columns ">
                        <!-- Single Project -->
                        @if(isset($portfolios))
                            @foreach($portfolios as $portfolio)

                                <div class="single-item one-item design {{$portfolio->category->name}}">
                                    <div class="item ">
                                        <div class="image">
                                            <img style="width: 100%" src="/portfolioimages/{{$portfolio->featuredimage}}" alt="">
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

                    <div style="text-align: center;margin-bottom: 20px" >
                        <a href="{{route('portfolio.index')}}" class="btn-pro margin-null">See More</a>
                    </div>
                </section>


                <!-- END Portfolio -->
             </div>
        </div>






        <!-- Tesimonials Section -->
        <div class="container" style="padding: 0 22px;">
            <div class="row no-margin wrap-text  ">
                <div class="col-md-6 padding-leftright-null">
                    <div class="text" style="padding:0 0 32px;">
                        <h2 class="heading textAlignment "><strong>People Say…</strong></h2>
                    </div>
                </div>
            </div>


            <div class="row no-margin wrap-text  " style="padding-bottom: 45px">
                <div class="col-md-8 padding-leftright-null">
                    <div class="row no-margin">
                        <!-- Testimonials -->
                        <section class="testimonials-carousel-single" style="margin-top: 15px;margin-bottom: 20px">

                            @if(isset($reviews))
                                @foreach($reviews as $review)
                                    <div class="item padding-leftright-null">
                                        <div>
                                            <img class="review-image" src="{{ asset('assets/img/man.png') }}">
                                        </div>
                                        <div class=" small overflow-hidden padding-top-null">
                                            <div class="person">
                                                <div class="description">
                                                   <strong ><em style="color: black;">{{$review->name}}</em></strong>
                                                    @if(isset($review->companyname))
                                                        <span>{{$review->companyname}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <blockquote class="comment">{{$review->comment}} </blockquote>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </section>
                        <!-- END Testimonials -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Tesimonials Section -->

        <!-- Start Our Partners -->
        <div class="container" style="padding: 0 22px;">
            <div class="row no-margin wrap-text  ">
                <div class="col-md-6 padding-leftright-null">
                    <div class="text  padding-top-null">
                        <h2 class="heading textAlignment "><strong>Look Who We've Helped.</strong></h2>
                    </div>
                </div>
            </div>
        <div class="container" style="margin-bottom:70px;">
          <div id="owl-demo" style="margin: 50px 0 12px 0;">

            <div class="item"><img  src="/partnerslogo/new1/autoparts.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/cartoon-and-bhaisahab.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/datalooksee.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/khird-and-gilla-river.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/mandy-and-lam.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/number-superstore.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/pinef-and-orderly.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/prime-ed.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/rebootedbody.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/safety-and-gila-river.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/tradesale-ie.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/zongo-and-pci.png" alt="Owl Image"></div>
            <!-- <div class="item"><img src="/partnerslogo/new1/pci.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/pinef.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/prime-ed.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/projectsuperstore.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/rebootedbody.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/safety-jackpot.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/tradesales.ie.png" alt="Owl Image"></div>
            <div class="item"><img src="/partnerslogo/new1/zongo.png" alt="Owl Image"></div> -->

          </div>

        </div>

        <!-- End our Partners -->

{{--
        <div style="" id="home-wrap" class="content-section">
            <div class="container">
                <!--  Portfolio  -->

                <!-- END Portfolio -->

                <!-- Team -->
                <div >
                    <a href="{{route('about-us.index')}}"> <h2 style="margin-left: 22px"><strong>Our Team<span class="color">.</span></strong></h2></a>
                    <div class="row no-margin wrap-text padding-onlytop-lg padding-onlybottom-lg">

                        <div class="col-md-12 padding-leftright-null">
                            <div class="row team no-margin">

                                @if(isset($members))
                                    @foreach($members as $member)
                                        <div class="col-sm-4 padding-leftright-null">
                                            <div class="person padding-onlybottom-md padding-md-bottom-null">
                                                <a href="{{route('about-us.show',$member->id)}}"> <img style="height: 240px;width: 332px" src="/profileimages/{{$member->image}}" alt="" class="img-responsive"></a>
                                                <h3 class="color">{{$member->name}}</h3>
                                                <span>{{$member->jobtitle}}</span>
                                                <ul>
                                                    @if(!empty($member->facebook))
                                                        <li><a href="{{$member->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    @endif
                                                    @if(!empty($member->twitter))
                                                        <li><a href="{{$member->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    @endif
                                                    @if(!empty($member->linkedin))
                                                        <li><a href="{{$member->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    @endif
                                                    @if(!empty($member->instagram))
                                                        <li><a href="{{$member->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center;margin-bottom: 20px" >
                        <a href="{{route('team-member.index')}}" class="btn-pro margin-null">See More</a>
                    </div>

                </div>

            </div>
        </div>--}}



    </div>
    <!--  END Page Content -->
</div>
    <style>
       /* #page-content #home-header .text {
            padding: 150px 19px 125px 23px;
        }*/
        #owl-demo .item{
        margin: 3px;
      }
      .flex-direction-nav a.flex-next,
      .flex-direction-nav a.flex-prev{
          display:none;
      }
      #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
      }
      .owl-dots{
        margin-top: 20px;
      }
      #mandy {
        margin-right: 35px !important;
      }

      #counters{
        padding: 25px 0 !important;
      }

      #projects{
        padding: 30px 0 0 !important;
      }

       .marginLeftHeading {
           margin-left: 22px;
       }

       .setusapart {
           margin-left: 22px;margin-bottom: 50px;
        }

       .setsApartContainner{
           margin-bottom: 50px;padding: 0 30px;
       }

       header nav.navbar #sidemenu .menu-holder ul li a, header nav.navbar #menu-classic .menu-holder ul li a {
           margin-left: 30px;
           font-size: 16px;
           line-height: 26px;
           font-family: "Roboto", sans-serif;
           font-weight: 400;
           color: black;
           padding: 10px 0;
       }


       .stat-counter {
           width: 25%;
           float: left;
       }
       @media only screen and (max-width: 625px) {

           .stat-counter {
               width: 50%;}
       }
       h1 {
           font-size: 55px;
           line-height: 60px;
           font-weight: 700;
           font-family: "Montserrat", sans-serif;
       }
    </style>



    {{--responsive--}}
    <style>



      .slider-heading{
        margin-top: 36px;
        line-height: 40px !important;
        padding-left:30px;
        padding-top: 120px;
        font-size: 24px;
      }

      .slider-p{
          padding: 0 0 55px 25px;
      }

        .one-item{
            width: 32% !important; ;
        }
        .secondary-background {
          background-color: #32ACE3;
        }
        .col-md-offset-3{
          margin-left: 33% !important;
        }

        @media screen and (max-width: 550px)  {

            .marginLeftHeading{
                margin-left:6px;
            }

            .padding-onlybottom-lg{
                padding-bottom: 20px !important;
            }

            .padding-onlytop-md{
                margin-top: 0px;
            }
            h1{
                font-size: 40px;
                line-height: normal;

            }

            .padding-md{
                padding: 0px 0 !important;
            }

            #page-content #home-header .text {
                padding: 80px 20px 80px 20px;
            }

            .setusapart {
                margin-left: 20px;
                margin-bottom: 10px;
            }

            .setsApartContainner{
             margin-bottom: 0px;padding: 0 20px;
            }
        }

        @media screen and (max-width: 991px)   {
            #counters.padding-md {
                padding: 10px 15px !important;
            }
        }


        @media screen and (max-width: 550px)  {
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


        .textAlignment{
            text-align: initial;
        }
        .textAlignJustify{
            text-align: justify;
        }
        .quality-circle{
            font-size: 55px;
            color: #527a99 !important;
        }
        .review-image{
            width: 100px !important;
            float: left;
            margin-right: 10px;
        }
    </style>


    <script type="text/javascript"
            src="{{ asset('js/jquery.shorten.min.js') }}"></script>

    <script>


        $(".comment").shorten({
            "showChars" : 300,
            "moreText"	: "See More",
            "lessText"	: "Less",
        });
            $(document).ready(function() {

  $("#owl-demo").owlCarousel({

      autoplay: true, //Set AutoPlay to 3 seconds
      autoplay:2000,
      loop:true,
      items : 3,
      dots: true,
      margin:10,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]

  });

});

    </script>
    <script type="text/javascript">
    $(window).load(function() {
      $('#flexslider-2').flexslider({
        animation: "slide",
        controlNav: false
      });
      });
    </script>




@endsection
