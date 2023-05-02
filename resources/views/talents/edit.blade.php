@extends('layouts.admin')
@section('page')

    <div style="">
        <div   class="page">



            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Panel Static Labels -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update Talent</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('talent.update',$talent->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    {{ method_field("PATCH") }}


                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Name:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="name" id="name"  required
                                                           placeholder="Enter Person Name"
                                                           @if(isset($talent))
                                                           value="{{ $talent->name }}"
                                                        @endif>

                                                    @if ($errors->has('name'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email"> Image:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control " name="image"  id="title" placeholder="Select  Image" required>
                                                    @if ($errors->has('image'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="professional_bio">Professional Bio:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="professional_bio" value=""
                                                              id="experience" placeholder="Enter professional bio">
                                                              @if(isset($talent))
                                                              {{ trim($talent->professional_bio) }}
                                                            @endif
                                                           </textarea>
                                                    @if ($errors->has('professional_bio'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('professional_bio') }}</strong>
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



                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Expereince:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="experience" value=""
                                                              id="experience" placeholder="Enter experience">@if(isset($talent))
                                                            {{ trim($talent->experience) }}
                                                        @endif</textarea>
                                                    @if ($errors->has('experience'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('experience') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="video_url">Video Url:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="video_url" id="video_url"
                                                           placeholder="Enter Video Url"
                                                           @if(isset($talent))
                                                           value="{{ $talent->video }}"
                                                        @endif
                                                    >

                                                    @if ($errors->has('video_url'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('video_url') }}</strong>
                                                </span>
                                                    @endif

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




    </script>

@endsection


