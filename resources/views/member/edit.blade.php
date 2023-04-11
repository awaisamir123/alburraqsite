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
                                <h3   class="panel-title">Update Member</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" onsubmit="swaptext()" action="{{route('team-member.update',$member->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    {{ method_field('PATCH') }}


                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Name:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="name" id="title" placeholder="Enter title"
                                                           @if(isset($member))
                                                           value="{{ $member->name }}"
                                                            @endif
                                                    >

                                                    @if ($errors->has('name'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Linked In:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="linkedin" id="title" placeholder="Enter Linked link"
                                                           @if(isset($member))
                                                           value="{{ $member->linkedin }}"
                                                            @endif>

                                                    @if ($errors->has('linkedin'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('linkedin') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Facebook:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="facebook" id="title" placeholder="Enter facebook link"
                                                           @if(isset($member))
                                                           value="{{ $member->facebook }}"
                                                            @endif>
                                                    @if ($errors->has('facebook'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('facebook') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Twitter:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="twitter" id="title" placeholder="Enter twitter link"
                                                           @if(isset($member))
                                                           value="{{ $member->twitter }}"
                                                            @endif>

                                                    @if ($errors->has('twitter'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('twitter') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Instagram:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="instagram" id="title" placeholder="Enter instagram link"
                                                           @if(isset($member))
                                                           value="{{ $member->instagram }}"
                                                            @endif>

                                                    @if ($errors->has('instagram'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('instagram') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Skype:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="skype" id="title" placeholder="Enter skype link"
                                                           @if(isset($member))
                                                           value="{{ $member->skype }}"
                                                            @endif>

                                                    @if ($errors->has('skype'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('skype') }}</strong>
                                                </span>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Profile Image:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" name="image"  id="title" placeholder="Select Profile Images">
                                                    @if ($errors->has('image'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div style="margin-left: 20px;margin-bottom: 20px" class="image">
                                                <img style="width: 345px;height: 250px;" src="/profileimages/{{$member->image}}" alt="">
                                            </div>

                                        </div>

                                        <div class="col-sm-6">

                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="comment">Description:</label>
                                                <div class="col-sm-12 ">
                                                    <input name="description" type="hidden">
                                                </div>
                                                <div style="height: 200px " id="editor-container"  class="col-sm-12 ">
                                                    <p>@if(isset($member)){!! trim( $member->description) !!}@endif</p>
                                                </div>
                                                @if ($errors->has('description'))
                                                    <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                                @endif
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Job Title:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="jobtitle" id="title" placeholder="Enter job title"
                                                           @if(isset($member))
                                                              value="{{ $member->jobtitle }}"
                                                            @endif>

                                                    @if ($errors->has('jobtitle'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('jobtitle') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>




                                            <div  class="form-group">
                                                <div style="margin-left: 20px" class="text-left">
                                                    <button type="submit" class="btn btn-primary" id="validateButton2">Submit</button>
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
    </style>

    <script>



        var quill = new Quill('#editor-container', {

            placeholder: 'Write something about the new member....',
            theme: 'snow'
        });



        var form = document.querySelector('form');
        function swaptext() {
            // Populate hidden form on submit
            var about = document.querySelector('input[name=description]');
            about.value = quill.root.innerHTML;
            return true;
        };

    </script>

@endsection


