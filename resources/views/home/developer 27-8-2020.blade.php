@extends('layout.main')

@section('meta')
<meta name="description" content="Al-Burraq a web development company in USA providing website designing in USA, WordPress development, mobile application development and SEO service in USA">
@endsection

@section('title','Al-Burraq| Website designing in USA and web development company USA')

@section('head')
<link rel="stylesheet" href="{{ asset('design/hiredev.css') }}?ver={{date('ymdhis')}}">
@endsection
@section('page')


<div id="page-content">
    <div class="container">
        <div class="row" style="position: relative;">
            <div class="col-md-12">
                <img class="img-responsive banner0 yo" src="{{ asset('design/bg/1920.650.jpg') }}" alt="Banner 1">
                <img class="img-responsive banner1 yo" src="{{ asset('design/bg/banner1.jpg') }}" alt="Banner 1">
                <img class="img-responsive banner2 yo" src="{{ asset('design/bg/560-banner.jpg') }}" alt="Banner 2">
                <img class="img-responsive banner3 yo" src="{{ asset('design/bg/600-banner.jpg') }}" alt="Banner 3">
                <img class="img-responsive banner4 yo" src="{{ asset('design/bg/800w-banner.jpg') }}" alt="Banner 4">
                <img class="img-responsive banner5 yo" src="{{ asset('design/bg/800-banner.jpg') }}" alt="Banner 4">
                <img class="img-responsive banner6 yo" src="{{ asset('design/bg/950-banner.jpg') }}" alt="Banner 4">
                <img class="img-responsive banner7 yo" src="{{ asset('design/bg/1200-banner.jpg') }}" alt="Banner 4">
                <img class="img-responsive banner8 yo" src="{{ asset('design/bg/1300.jpg') }}" alt="Banner 4">
            </div>
            <div class="nextPort">
                <h2 class="w-50 bold text-white head1">Every captain needs a strong team to win.</h2>
                <p class="text-white">
                    <div class="w-50 headp1 fontsizeforheadsub">
                      Set up your team with us and compete your competitors with our talented software engineers
                    </div>
                    <div class="w-50 headp2 fontsizeforheadsub">
                      Click the button below, we will call you back
                    </div>
                </p>
                <div class="w-50">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#hireus" class="btn btn-primary btn-alt active shadow btnpos ml-0">Hunt your Team</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="bold"> <span class="cLogoBlue">We Team Up </span>with Our Clients</h2>
            </div>

            <div class="col-md-8 col-md-offset-2 text-center p-2">
                <div class="pt-3 pb-3">
                    Every single one of our team has been made according to their own requirements, a truly customized team worked around their required skills.
                    <br>
                    <b>These are a few technologies we work with:</b>
                </div>
            </div>

            {{-- <div class="col-md-8 col-md-offset-2 text-center mt-3">
                <div class="pt-3 pb-3">
                    <h3 class="bold"></h3>
                </div>
            </div> --}}

        </div>
        <div class="row">

            <section id="projects" data-isotope="load-simple" class="related padding-bottom-null">
                <div class="col-md-12 padding-leftright-null">
                    <div class="projects-items equal four-columns">



                        <div class="single-item shop one-item design branding">
                            <div class="item">
                                <img src="{{ asset('design/icons/Tech/php.png') }}" alt="">
                                <div class="content">
                                    <div>
                                        <h3>PHP</h3>
                                        <span class="price"></span>
                                    </div>
                                    <p>We have best PHP engineers in our team who work efficiently to provide best quality of projects to our clients.</p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="single-item shop one-item design branding">
                            <div class="item">
                                <img src="{{ asset('design/icons/Tech/ios.png') }}" alt="">
                        <div class="content">
                            <div>
                                <h3>iOS</h3>
                                <span class="price"></span>
                            </div>
                            <p>Our iOS developer team work with the most advanced technologies of iOS to develop iOS applications.</p>
                        </div>
                    </div>
                </div>


                <div class="single-item shop one-item design branding">
                    <div class="item">
                        <img src="{{ asset('design/icons/Tech/Android.png') }}" alt="">
                        <div class="content">
                            <div>
                                <h3>Android</h3>
                                <span class="price"></span>
                            </div>
                            <p>We're experts in Android development, and develop many web and android mobile applications.</p>
                        </div>
                    </div>
                </div> --}}

                <div class="single-item shop one-item design branding">
                    <div class="item">
                        <img src="{{ asset('design/icons/Tech/laravel.png') }}" alt="">
                        <div class="content">
                            <div>
                                <h3>Laravel</h3>
                                <span class="price"></span>
                            </div>
                            <p>
Our Laravel Engineers have done multiple conversions from scratch and other frameworks and languages to Laravel.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="single-item shop one-item design branding">
                    <div class="item">
                        <img src="{{ asset('design/icons/Tech/cold-fusion.png1.png') }}" alt="">
                        <div class="content">
                            <div>
                                <h3>ColdFusion</h3>
                                <span class="price"></span>
                            </div>
                            <p>Our expert software engineers are working with advanced technologies of ColdFusion to develop best applications.</p>
                        </div>
                    </div>
                </div>
                <div class="single-item shop one-item design branding">
                    <div class="item">
                        <img src="{{ asset('design/icons/Tech/dot-net.png') }}" alt="">
                        <div class="content">
                            <div>
                                <h3>.Net</h3>
                                <span class="price"></span>
                            </div>
                            <p>Our team of software engineers also make use of this advanced technology (.Net) for delivering quality projects.</p>
                        </div>
                    </div>
                </div>



        </div>
    </div>
    </section>








</div>
<div class="row mt-4 text-center">
  <div class="w-100">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#hireus" class="btn btn-primary btn-alt active shadow ml-0">Hunt your Team</a>
  </div>
</div>
<div class="row mt-4">
    <div class="col-md-12 text-center">
        <h2 class="bold"> <span class="cLogoBlue">Want to be sure?</span> No Problem!</h2>
    </div>

    <div class="col-md-8 col-md-offset-2 text-center">
        <div class="pt-3 pb-3">
            You found Al-Burraq Technologies and would like to know what is it like to build up a genuine synergy with our community?
        </div>
    </div>
</div>

<div class="row mt-3 mb-5">

    <div class="col-sm-offset-2 col-sm-4 col-xs-12">
        <div class="box boxay text-center p-3">
            <h3 class="bold">Engagement Journey</h3>
            <p class="p-3 d-flex justify-content-center"><img class="img-responsive w-50 fbiS" src="{{ asset('design/icons/bottom/Engagement-Journey.png') }}" alt="Laravel">
            </p>
            <p class="textbotbox">
                Our engagement procedure is extremely lined up with our culture, it’s more like a journey.
                Here you can check how engaging with Al-Burraq Technologies will work for you.
            </p>
            <p>
                <a href="{{ route('homepage') }}" class="btn btn-primary btn-alt active shadow ">Learn More</a>
            </p>
        </div>
    </div>
    <div class="col-sm-4 col-xs-12 mbaaa mt-aa">
        <div class="box boxay text-center p-3">
            <h3 class="bold">Our Clients</h3>
            <p class="p-3 d-flex justify-content-center"><img class="img-responsive w-50 fbiS" src="{{ asset('design/icons/bottom/Our-Clients.png') }}" alt="Laravel">
            </p>
            <p class="textbotbox">
                We have the honor to work with amazingly good software organizations in USA and all around the world.
                We help them with software development, testing, and Design/UX research and execution.
            </p>
            <p>
                <a href="{{ route('portfolio.index') }}" class="btn btn-primary btn-alt active shadow ">See clients</a>
            </p>
        </div>
    </div>


</div>



</div>



</div>

@if (Session::has('success'))


  <div class="modal fade" id="successHireMsg" role="dialog">
      <div class="modal-dialog modal-sm modalsize">
          <div class="modal-content rounded-0">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title bold text-success">Success</h4>
              </div>
              <div class="modal-body text-center">

                <h4 class="bold text-success text-uppercase">We will be in touch with you soon.</h4>

              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-success rounded-0" data-dismiss="modal">Close</button>
          </div>


          </div>
      </div>
  </div>
<script type="text/javascript">
  $("#successHireMsg").modal('show');
</script>
@endif

<div class="modal fade" id="hireus" role="dialog">
    <div class="modal-dialog modal-sm modalsize">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hunt your Team</h4>
            </div>
            <div class="modal-body pl-0 pr-0">
                <div class="container-fluid p-4">

                    <form action="{{ route('addContact') }}" method="post">
                        @csrf
                        <div class="row m-0">


                          <div class="col-md-12">
                          @if ($errors->any())
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">
                                          <li>{{ $error }}</li>
                                        </div>
                                      @endforeach
                                  </ul>
                          @endif

                          </div>
                        </div>
                        <div class="row m-0">

                            <div class="col-md-6 row-set-column">
                                <div class="form-group  md-form">
                                    <input value="{{ old('name') }}" type="text" name="name"  class="form-control input" id="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 row-set-column">
                                <div class="form-group">
                                    <input value="{{ old('email') }}" type="email" name="email" class="form-control input" id="email" placeholder="Email" required>
                                </div>
                            </div>

                        </div>
                        <div class="row m-0">

                            <div class="col-md-6 row-set-column">
                                <div class="form-group">
                                    <input value="{{ old('phone') }}" type="text" name="phone" class="form-control input" id="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6 row-set-column">
                                <div class="form-group">
                                    <input value="{{ old('company') }}" type="text" name="company" class="form-control input" id="company" placeholder="Company">
                                </div>
                            </div>

                        </div>
                        <div class="row m-0">

                            <div class="col-md-12 row-set-column">
                                <div class="form-group">
                                    <input value="{{ old('need') }}" type="text" name="need" class="form-control input" id="need" placeholder="Number of Resources you need">
                                </div>
                            </div>

                        </div>
                        <div class="row m-0">

                            <div class="col-md-12 col-sm-10 row-set-column">
                                <div class="form-group">
                                    <textarea required class="form-control input" style="width: 100%;" name="message" rows="3" placeholder="Message Details">{{ old('message') }}</textarea>
                                </div>
                            </div>

                        </div>
                        <div id="hire_dev"></div>

                        {!! GoogleReCaptchaV3::renderOne('hire_dev','hireDeveloper') !!}
                        <div class="row m-0">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="Get a call back" class="active btn btn-alt btn-primary ml-0 rounded-0 shadow ">
                            </div>
                        </div>
                    </form>
                </div>


            </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> --}}
            {!! GoogleReCaptchaV3::init() !!}

        </div>
    </div>
</div>
@if ($errors->any())
<script type="text/javascript">
    $("#hireus").modal('show');
</script>
@endif

<script type="text/javascript">
_linkedin_partner_id = "831123";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=831123&fmt=gif" />
</noscript>
@endsection
