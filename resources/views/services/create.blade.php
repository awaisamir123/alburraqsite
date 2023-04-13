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
                                <h3 class="panel-title">Create New Service</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('service.store')}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Name:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="title" id="title"  required
                                                           placeholder="Enter Title" value="{{ old('title') }}">

                                                    @if ($errors->has('title'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Short Description:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="short_description" value=""   required
                                                              id="short_description" placeholder="Enter Short Description">{{ old('short_description') }}</textarea>
                                                    @if ($errors->has('short_description'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('short_description') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="overview">OverView:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control" name="overview" value=""   required
                                                              id="overview" placeholder="Enter Short Description">{{ old('overview') }}</textarea>
                                                    @if ($errors->has('overview'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('overview') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>







                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email"> Thumbnail:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control " name="image"  id="image" placeholder="Select  Image" required>
                                                    @if ($errors->has('image'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('image') }}</strong>
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
                                                <label class="control-label col-sm-5" for="design">Our Design:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="design" value=""   required
                                                              id="design" placeholder="Enter  Design">{{ old('design') }}</textarea>
                                                    @if ($errors->has('design'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('design') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="design">Our Development:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="development" value=""   required
                                                              id="design" placeholder="Enter Development">{{ old('design') }}</textarea>
                                                    @if ($errors->has('development'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('development') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="strategy">Strategy:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" type="text" class="form-control " name="strategy" value=""   required
                                                              id="strategy" placeholder="Enter Strategy">{{ old('strategy') }}</textarea>
                                                    @if ($errors->has('strategy'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('strategy') }}</strong>
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


