@extends('layout.burraq')
@section('title','Al-burraq')
@section('page')
    <!--  Page Content  -->
    <!--  Page Content  -->
    <div id="page-content">
        <!--  Page header  -->
        <div   class="container">
            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div style="margin-bottom: -50px" id="page-header">
                        <div class="text">
                            <h1 class="{{--margin-bottom-small--}}">{{$member->name}}</h1>
                            <h3 class="{{--margin-bottom-small--}}">{{$member->jobtitle}}</h3>
                            <p style="display: none;" class="heading left max full grey-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quos rem, error facilis eveniet perspiciatis tempora totam animi doloribus. Quia officia laudantium dolor sapiente? Dolor maxime voluptatum sint molestias ipsa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div   class="container"  >
            <div class="row no-margin">
                <div class="col-md-4 padding-leftright-null imagemarginleft500" {{--style="margin-left: 30px;"--}}>
                    <div style="margin-bottom: -70px" id="page-header">

                            <div class="text small padding-top-null">
                                <img style="height: 315px;width: 315px" src="{{asset('profileimages/'.$member->image)}}" alt="" class="img-post">
                            </div>
                    </div>
                </div>
                <div class="co-md-8">
                    <div class="text marinleft500" >
                        <p  class="heading left full max grey-dark">{!! rtrim(trim($member->description))!!}</p>

                        
                        <div class=" "  style="margin-bottom: 100px">
                            @if(!empty($member->facebook) or !empty($member->linkedin) or !empty($member->twitter) or !empty($member->skype))
                                <h3><strong>Social Links:</strong></h3>
                                <ul style="padding: 15px;font-size: larger">
                                    @if(isset($member->facebook))
                                        <li style="float: left;padding: 10px"><a href="{{$member->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    @endif
                                    @if(isset($member->linkedin))
                                        <li style="float: left;padding: 10px"><a href="{{$member->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                    @endif
                                    @if(isset($member->twitter))
                                        <li style="float: left;padding: 10px"><a href="{{$member->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                    @endif
                                    @if(isset($member->skype))
                                        <li style="float: left;padding: 10px"><a href="{{$member->skype}}"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    @endif

                                    @if(isset($member->skype))
                                        <li style="float: left;padding: 10px"><a href="{{$member->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    @endif

                                </ul>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>







       {{-- <div style="margin-top: -200px" class="container margin-bottom-small">
            <div class="row no-margin wrap-text padding-onlytop-lg">
                <div class="col-md-12 padding-leftright-null">
                    <div class="text small padding-top-null">
                        <img style="height: 700px" src="{{asset('profileimages/'.$member->image)}}" alt="" class="img-post">
                    </div>
                </div>
            </div>
        </div>

        <!--  END Page header  -->
        <div   id="home-wrap" class="content-section">
            <!-- Project Info -->
            <div  class="container">
                <div class="row no-margin wrap-text --}}{{--padding-onlytop-lg--}}{{--">
                    --}}{{--<div class="col-md-4 padding-leftright-null">
                        <div class="text small padding-top-null">
                            <h2 class="heading margin-bottom-extrasmall">Industrial Design<span class="color">.</span></h2>
                        </div>
                    </div>--}}{{--
                    <div class="col-md-12 " style="margin-left: -40px;margin-right: -60px">
                        <div class="text small padding-topbottom-null">
                            <div class="">
                            <p  class="heading left full max grey-dark">{!! rtrim(trim($member->description))!!}</p>
                            <div  style="margin-top: -80px">
                                <h3><strong>Social Links:</strong></h3>
                                <ul style="padding: 15px;font-size: medium">
                                        @if(isset($member->facebook))
                                            <li style="padding: 5px" ><a href="{{$member->facebook}}">Facebook</a></li>
                                        @endif
                                        @if(isset($member->linkedin))
                                            <li style="padding: 5px" ><a href="{{$member->linkedin}}">Linked In</a></li>
                                        @endif
                                        @if(isset($member->twitter))
                                            <li style="padding: 5px"><a href="{{$member->twitter}}">Twitter</a></li>
                                        @endif
                                        @if(isset($member->skype))
                                            <li style="padding: 5px"><a href="{{$member->skype}}">Skype</a></li>
                                        @endif

                                </ul>
                            </div>
                            </div>


--}}{{--
                            <a href="#" class="btn-pro">Read more</a>
--}}{{--
                        </div>
                    </div>
                </div>
            </div>
       --}}     <!-- END Project Info -->
            <!-- Main Project Img -->

            <!-- END Main Project Img -->
            <!-- Main Project Img -->

            <!-- END Main Project Img -->
            <!-- Full width Border Separator -->
          {{--  <div class="row no-margin">
                <div class="border-separator"></div>
            </div>--}}
            <!-- END Full Width Border Separator -->
            <div  class="container">
                <!--  Navigation  -->
                <section id="nav" class="">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="nav-left">
                                @if($previousMember!=null)
                                    <a href="{{route('about-us.show',$previousMember->id)}}" class="btn-alt small shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Previous Project</span></a>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="nav-right">
                                @if($nextMember!=null)
                                    <a  href="{{route('about-us.show',$nextMember->id)}}" class="btn-alt small shadow margin-null"><span>Next Project</span><i class="icon ion-ios-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
                <!--  END Navigation  -->
            </div>
        </div>
    <!--  END Page Content -->

    <!--  END Page Content -->


    <style>

        .marginleft500{
            margin-left: 30px;
            
        }

        .imagemarginleft500  {
            margin-left: 30px;

        }

        #nav {
            padding: 30px 50px 30px 50px !important;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #portdetail{
            font-size: 18px;
            line-height: 30px;
            max-width: 600px;
            letter-spacing: 0;
            margin: 0 auto;
        }

        @media screen and (max-width: 991px)  {
            .marinleft500 {
                margin-left: 25px !important;
                margin-right: 25px !important;
            }

            .imagemarginleft500{
                margin-left: 0px !important;
            }
        }
        @media screen and (max-width: 500px)  {
            .marinleft500 {
                margin-left: 10px !important;
                margin-right: 10px !important;
            }

            .imagemarginleft500{
                margin-left: 0px !important;
            }
        }
        
        @media screen and (max-width: 500px) {
            footer .text {
                padding: 20px 20px !important;
            }
            /*.marinleft500{
                 margin-left: 28px;
                 margin-right: 25px;
            }*/
           

            #nav {
                padding: 0px 50px 40px 50px !important;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

        }
        @media screen and (max-width: 991px) {
            
            .marinleft500{
                margin-left: 50px;
                margin-right: 50px;
            }
        }

    </style>
@endsection
