@extends('layout.burraq')
@section('meta')

@endsection
@section('title','Partnership')
@section('page')
    <!--  Page Content  -->
    <div  id="page-content">
        <!--  Page header  -->
        <div class="container">

            @if(Session::has('message'))
                <div style="height: 50px;text-align: center"  class="alert  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('message') }}
                </div>

            @endif

            <div class="row no-margin">
                <div class="col-md-12 padding-leftright-null">
                    <div id="page-header">
                        <div class="text" style="padding: 50px 50px;">
                            <h1 class="margin-bottom-small">Contact</h1>
                            <p class="heading left max full grey-dark">Looking for a talented Development team? let's join hands, we are the ones behind many giants, we are the ones you can rely for your amazing products development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page header  -->
        <div id="home-wrap" class="content-section">
            <div class="row margin-leftright-null">
                <!--  Map. Settings in maps.js  -->
                <!-- <div class="col-md-12 padding-leftright-null map">
                    <div id="mapss" ></div>
                </div> -->
                <!--  END Map  -->
            </div>
            <!-- Contact -->
            <div class="container padding-md-bottom-lg">
                <div class="row no-margin padding-onlytop-lg">
                    <div class="col-md-12 padding-leftright-null">
                        <div class="text padding-topbottom-null">
                            <h2 class="heading margin-bottom-null">Let's work together</h2>

                        </div>
                    </div>
                    <div class="col-md-12 wrap-text" style="padding-bottom:40px;">
                        <div class="col-sm-7 padding-leftright-null">
                            <div class="text small">
                                <!-- <p class="small">
                                    Looking for a talented Development team? let's join hands, we are the ones behind many giants, we are the ones you can rely for your amazing products development.
                                </p> -->

                                <p class="small grey-dark"><a href="tel:+13018875877" class="grey-dark"><i class="fa fa-phone" aria-hidden="true"></i> +1 (301) 887 5877 </a><br>
                                </p>
                                <p class="small grey-dark"> <a href="skype:/http:/alihassan869?chat" class="grey-dark"><i class="fa fa-skype" aria-hidden="true"></i>  alihassan869 </a><br>
                                </p>
                                <p class="small"> <a href="mailto:info@al-burraq.com"><i class="fa fa-envelope" aria-hidden="true"></i>  info@al-burraq.com </a></p>


                            </div>
                        </div>
                        <div class="col-sm-5 padding-leftright-null">
                            <!-- Contact Form -->
                            <form id="contact-form" class="padding-md padding-md-topbottom-null" method="post" action="{{route('message.store')}}">
                                {!! csrf_field() !!}
                                <div class="row no-margin">
                                    <div class="col-md-12 padding-leftright-null">
                                        <div class="text small padding-topbottom-null">
                                            @if ($errors->has('name'))
                                                <span style="color: red" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                            @endif
                                            <input class="form-field" name="name" id="name" type="text" required placeholder="Name"value="{{ old('name') }}">

                                        </div>

                                    </div>

                                    <div class="col-md-12 padding-leftright-null">
                                        <div class="text small padding-topbottom-null">
                                            @if ($errors->has('email'))
                                                <span style="color: red" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('email') }}</strong>
                                             </span>
                                            @endif
                                            <input class="form-field" name="email" id="mail" type="email" placeholder="Email"  required
                                            value="{{ old('email') }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="row no-margin">
                                    <div class="col-md-12 padding-leftright-null">
                                        <div class="text small padding-topbottom-null">
                                            @if ($errors->has('subject'))
                                                <span style="color: red" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('subject') }}</strong>
                                             </span>
                                            @endif
                                            <input class="form-field" name="subject" id="subjectForm" type="text"  required
                                            placeholder="Subject" value="{{ old('subject') }}">

                                        </div>

                                    </div>
                                    <div style="margin-top: 25px !important;" class="col-md-12 padding-leftright-null">
                                        <div class="text small padding-topbottom-null">
                                            @if ($errors->has('message'))
                                                <span style="color: red" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('message') }}</strong>
                                             </span>
                                            @endif
                                            <textarea class="form-field" name="message" id="messageForm" rows="7" required style="border:1px solid #c7c5c5;" placeholder="Your  Message" >{{ old('message') }}</textarea>

                                        </div>

                                    </div>
                                    <div id="contact_us_id"></div>

                                    {!!  GoogleReCaptchaV3::renderOne('contact_us_id','contact_us') !!}


                                    <div class="col-md-12 padding-leftright-null">
                                        <div class="text small padding-topbottom-null">
                                            <div class="submit-area {{--padding-onlytop-sm--}}">
                                                <input type="submit"  class="btn btn-primary btn-alt active shadow" {{--id="submit-contact"--}} value="Send Message">
                                                <div id="msg" class="message"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Contact -->
        </div>
    </div>
    <!--  END Page Content -->
    <!--  END Page Content -->
    {!!  GoogleReCaptchaV3::init() !!}


    <script type="text/javascript">

      setTimeout(function() {
      $('.invalid-feedback').fadeOut('fast');
    }, 5000); // <-- time in milliseconds

    </script>


<style>


    .padding-onlytop-lg{
        padding-top: 20px !important;
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

                .content-section .text.small {
                    padding: 13px 5px;
                }

        }

        @media screen and (max-width: 500px) {
            #page-header .text {
                padding: 20px 20px    !important;
            }
        }

        @media screen and (max-width: 500px)  {
            .content-section .text .small {
                padding: 0px 0px !important;
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





        #contact-form .form-field, #search-form .form-field {
            outline: inherit;
            border: none;
            width: 100%;
            margin-bottom: 30px !important;
            padding: 10px;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            line-height: 14px;
            color: #000;
            border-bottom: 1px solid rgba(117, 117, 117, 0.41);
            font-weight: 300;
        }


    </style>


@endsection
