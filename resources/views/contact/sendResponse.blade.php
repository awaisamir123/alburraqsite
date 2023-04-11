@extends('layouts.admin')
@section('page')

    <div style="">
        <div   class="page">

            @if(Session::has('message'))
                <div style="margin-left: 150px;margin-right: 150px;height: 50px;text-align: center"  class="alert  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('message') }}
                </div>
            @endif


            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Panel Static Labels -->
                        <div class="panel">
                            <div class="panel-heading">
                                @if($message->responsestatus==0)
                                    <h3  class="panel-title">Send Response</h3>
                                @endif
                                    @if($message->responsestatus==1)
                                        <h3  class="panel-title">Sent Response</h3>
                                    @endif
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" onsubmit="swaptext()" action="{{route('message.update',$message->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    {{ method_field('PATCH') }}


                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Email:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " readonly name="email" id="title" placeholder="Enter Email"
                                                           @if(isset($message))
                                                           value="{{ $message->email }}"
                                                            @endif
                                                    >

                                                    @if ($errors->has('email'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Subject:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="subject" id="title"  readonly  placeholder="Enter Subject"
                                                           @if(isset($message))
                                                           value="{{ $message->subject }}"
                                                            @endif
                                                    >

                                                    @if ($errors->has('subject'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('subject') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="comment">Message</label>
                                                <div class="col-sm-12 ">
                                                    <p style="border: 1px solid rgba(0,0,0,0.11);border-radius: 4px;padding: 10px;background-color: #ededed">{!! $message->message !!}</p>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="col-sm-6">

                                            @if($message->responsestatus==0)
                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="comment">Response:</label>
                                                <div class="col-sm-12 ">
                                                    <input name="response" type="hidden">
                                                </div>
                                                <div style="height: 200px " id="editor-container"  class="col-sm-12 ">
                                                    <p>@if(isset($message)){!! trim( $message->response) !!}@endif </p>
                                                </div>
                                                @if ($errors->has('response'))
                                                    <span style="margin-left: 20px;color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('response') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            @endif


                                            @if($message->responsestatus==1)
                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="comment">Response</label>
                                                <div class="response" class="col-sm-12 form-control ">
                                                    @if(isset($message)){!! trim( $message->response) !!}@endif
                                                </div>
                                            </div>
                                            @endif





                                            @if($message->responsestatus==0)
                                            <div  class="form-group">
                                                <div style="margin-left: 20px" class="text-left">
                                                    <button type="button" class="btn btn-primary" data-target="#exampleNiftySlideFromRight" data-toggle="modal" >Send</button>
                                                </div>
                                            </div>

                                            @endif


                                                <div class="modal fade modal-slide-in-right" id="exampleNiftySlideFromRight" aria-hidden="true"
                                                     aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-simple">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                                <h4 class="modal-title">Send Email</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Do you really want to send email.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary" id="validateButton2">Send</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>


                                    </div>



                                </form>
                            </div>
                        </div>

                        <!-- End Panel Static Labels -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>

        #editor-container{
            height: 200px;
            width: 96%;
            margin-left: 14px;
        }
        .ql-toolbar.ql-snow{
            width: 96%;
            margin-left: 14px;
        }

        .response{
            border: 1px solid rgba(0,0,0,0.11);border-radius: 4px;padding: 10px;background-color: #ededed;
            margin-left: 15px;
        }
    </style>

    <script>



        var quill = new Quill('#editor-container', {

            placeholder: 'Response....',
            theme: 'snow'
        });



        var form = document.querySelector('form');
        function swaptext() {
            // Populate hidden form on submit
            var about = document.querySelector('input[name=response]');
            if (quill.root.innerHTML =="<p><br></p>") {
                quill.root.innerHTML ==null;
            }  else {
                about.value = quill.root.innerHTML;
                return true;
            }
        };

    </script>

@endsection


