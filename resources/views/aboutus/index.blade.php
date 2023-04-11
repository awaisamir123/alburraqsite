@extends('layout.burraq')
@section('meta')
<meta name="description" content="Al-Burraq Technologies a web designing company in usa is providing web designing, web development, software development, SEO &amp; WordPress Development in USA">
@endsection
@section('title','About Cheap web designing Company USA web development USA')
@section('page')
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div id="page-header">
                        <div class="text">
                            <h1 class="margin-bottom-small">About Us<span class="color">.</span></h1>
                            <p class="heading left max full grey-dark">Al-Burraq Technologies architects design and develops enterprise-class Mobile, Web, Social and Big Data solutions for some of the world’s most innovative startup companies. We help our clients achieve a time-to-market advantage, drive technology innovation, and gain economical access to world-class software engineering resources globally. We drive our clients’ overall effectiveness by delivering quality, on-time and economically, and providing quicker time-to-market analysis. Our customized solutions for clients have to span numerous industries including healthcare, media, mobile & social gaming, financial services, retail, technology, education, and publishing. Al-Burraq Technologies in-house professionals include developers, designers, information architects, project managers, and usability specialists that work together to craft a strategy that is tailored to your business goals.</p>
                        </div>

                        <div style="margin-top: -100px" class="text">
                            <h2 class="margin-bottom-small"><strong>We are by your side at all times?</strong><span class="color">.</span></h2>
                            <p class="heading left max full grey-dark">In life, it’s the journey that matters, not the destination.

                                It is based on this principle that we have built our company; that we have won, we have lost but always have great pleasure in whatever we do. We made mistakes we had blunders but there is one thing we don’t stop, that keeps moving.

                                To meet the challenges ahead and fulfill all our stakeholders’ expectations, we have restructured the company’s strategic initiatives embracing sustainable business practices, focusing on enhancing customer experience, operational efficiency, and people development. We will continue to grow the business organically as well as inorganically, integrating and moving into adjacent businesses either through partnerships or services, all the while focusing more on mobile and enterprise solutions, and transforming into an integrated service provider. We have identified a number of key growth areas that we intend to focus on in the coming years, and the enterprise segment is one of them. This comes in addition to actively examining new business opportunities including SAP, cloud services, and mobile money.

                                I look forward to detailing all these and other developments at the appropriate time, and our website will remain the ideal source of updated information.

                                Al-Burraq Technologies is a success story that would not be possible without the contribution of our clients and dedicated employees who have shared our incredible journey thus far. We look forward to continuing to serve and engage with them as well as other stakeholders in the future. We appreciate the ongoing support received from those who are interested in Al-Burraq Technologies’s activities and pledge to continue in our efforts to exceed expectations.

                                Thank you for taking the time to visit the Al-Burraq Technologies website and I wholeheartedly welcome any constructive feedback you may have.

                                CEO, Muhammad Ali Hassan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page header  -->
        <div style="margin-top: -150px" id="home-wrap" class="content-section">
            <div class="container">
                <!--  Portfolio  -->
                <section id="projects" data-isotope="load-simple" class="page {{--padding-onlytop-md padding-onlybottom-lg--}}">
                    <!--  Filters  -->
                   {{-- <div class="row no-margin text-left">
                        <div class="col-sm-12 padding-leftright-null">
                            <div class="filter-wrap left">
                                <ul class="col-md-12 filters uppercase padding-leftright-null">
                                    <li data-filter="*" class="is-checked">All</li>
                                    <li data-filter=".design">Design</li>
                                    <li data-filter=".branding">Branding</li>
                                    <li data-filter=".photography">Photography</li>
                                    <li data-filter=".web">Web</li>
                                    <li data-filter=".app">Apps</li>
                                </ul>
                            </div>
                        </div>
                    </div>--}}
                    <!--  END Filters  -->
                    <h2 style="margin-left: 20px"><strong>Our Team</strong></h2>
                    <div class="projects-items equal three-columns">
                        @if(isset($members))
                            @foreach($members as $member)
                        <!-- Single Project -->
                                <div class="single-item one-item design branding">
                                    <div class="item">
                                        <img style="height: 250px;width:282px" src="/profileimages/{{$member->image}}" alt="">
                                        <div class="content">
                                            <h3><strong>{{$member->name}}</strong></h3>
                                            <p style="height: 100px;overflow: hidden">{{strip_tags($member->description)}}</p>
                                        </div>
                                        <a href="{{route('about-us.show',$member->id)}}" class="link"></a>
                                    </div>
                                </div>

                              @endforeach
                            @endif
                    </div>
                </section>
                <!-- END Portfolio -->

                <div style="text-align: center">
                    {!! $members->render() !!}

                </div>
            </div>
        </div>
    </div>
    <!--  END Page Content -->

@endsection
