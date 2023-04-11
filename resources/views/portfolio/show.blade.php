@extends('layout.burraq')
@section('title','Al-burraq')
@section('page')
<style>
    #portdetail{
        font-size: 18px;
        line-height: 30px;
        max-width: 600px;
        letter-spacing: 0;
        margin: 0 auto;
    }

    @media screen and (max-width: 500px) {
        footer .text {
            padding: 20px 20px !important;
        }
    }
    @media screen and (max-width:425px){
      h1{
        margin-left: 25px !important;
      }
    }
    h1 {
      font-size: 52px;

    }



    #site-btn{
      margin-top: 100px;
      margin-bottom: 70px;
    }
</style>
    <!--  Page Content  -->
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div   id="home-wrap" class="content-section">
          <div class="container">
            <!-- <div class="col-md-12"> -->
                <div style="margin-bottom: -40px;">
                    <div class="text">
                        <h1 class="margin-bottom-small">Overview</h1>
                    </div>
                <!-- </div> -->
            </div>
          </div>
        </div>
        <!--  END Page header  -->
        <div   id="home-wrap" class="content-section">
            <!-- Project Info -->
            <div  class="container">
                <div class="row no-margin wrap-text {{--padding-onlytop-lg--}}">

                    <div class="col-md-12 padding-leftright-null">
                        <div class="text small padding-topbottom-null">
                            <p  class="heading left full max grey-dark description">{!! rtrim(trim($portfolio->description))!!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Project Info -->
            <!-- Main Project Img -->
            <div  class="container">
                <div class="row no-margin wrap-text ">
                    <div class="col-md-12 padding-leftright-null">
                        <div class="text small padding-top-null">
                            <img style="" src="{{asset('portfolioimages/'.$portfolio->featuredimage)}}" alt="" class="img-post">
                        </div>
                    </div>
                </div>
            </div>

            <!-- What problem are we solving section -->
            @if($portfolio->description_problem != "" || $portfolio->description_problem != null)
            <div class="container">
                <div class="col-md-12">
                    <div style="margin-bottom: -20px; margin-left: -50px; margin-right: 20px;" id="page-header">
                        <div class="text">
                            <h1 class="margin-bottom-small text-left">What problems are we solving?</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div  class="container">
                <div class="row no-margin wrap-text {{--padding-onlytop-lg--}}">
                    <div class="col-md-6 col-md-offset-3 padding-leftright-null">
                        <div class="text small padding-topbottom-null">
                            <div class="">
                            <p  class="heading left full max grey-dark description">{!! rtrim(trim($portfolio->description_problem))!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!--End What problem are we solving section -->
            @if(count($portfolio->images) > 1 )
            <div   id="home-wrap" class="content-section">
              <div class="container">
                <!-- <div class="col-md-12"> -->
                    <div style="margin-bottom: -40px;">
                        <div class="text">
                            <h1 class="margin-bottom-small">Final Result</h1>
                        </div>
                    <!-- </div> -->
                </div>
              </div>
            </div>
           <div   id="home-wrap" class="content-section">
            <div class="container" style="width: 80%!important">
              <div class="row padding-onlytop-md no-margin ">
                  <div class="col-md-12">
                      <div class="image-carousel dots-inside">
                          @foreach($portfolio->images as $image)
                          <div class="item">
                              <img  src="{{asset('portfolioimages/'.$image->image)}}" alt="image 2">
                          </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
        </div>
          @endif
            <div class="container">
                <div class="row mt-2">
                  <br>
                  <br>
                    {{-- <div class="col-md-6 col-md-offset-3 text-center" id="site-btn">
                            <a class="btn margin-bottom" href="https://burraq.zongo.io">Visit Website</a>
                    </div> --}}
                </div>
            </div>

            <!-- END Main Project Img -->

            <!-- Full width Border Separator -->
            <div class="row no-margin">
                <div class="border-separator"></div>
            </div>
            <!-- END Full Width Border Separator -->
            <div style="margin-top: -100px" class="container">
                <!--  Navigation  -->
                <section id="nav" class="padding-onlytop-lg">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="nav-left">
                              @if(isset($previousPortfolio))
                                  @if($previousPortfolio!=null)
                                       <a href="{{route('portfolio.detail',[ strtolower( str_replace(' ','-' ,$previousPortfolio->title)),$previousPortfolio->id])}}" class="btn-alt small shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Previous Project</span></a>
                                  @endif
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nav-right">
                              @if(isset($nextPortfolio))
                                @if($nextPortfolio!=null)
                                <a  href="{{route('portfolio.detail',[ strtolower(str_replace(' ','-' ,$nextPortfolio->title)),$nextPortfolio->id])}}" class="btn-alt small shadow margin-null"><span>Next Project</span><i class="icon ion-ios-arrow-right"></i></a>
                                @endif
                              @endif
                            </div>
                        </div>
                    </div>
                </section>
                <!--  END Navigation  -->
            </div>
        </div>
    </div>
    <!--  END Page Content -->

    <!--  END Page Content -->



@endsection
