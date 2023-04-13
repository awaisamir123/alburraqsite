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
                                <h3 class="panel-title">Create New Review</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('review.store')}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Name:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="name" id="name"  required
                                                    placeholder="Enter Person Name" value="{{ old('name') }}">

                                                    @if ($errors->has('name'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Comapny Name (Optional):</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="companyname" id="companyname" placeholder="Enter Company Name" value="{{ old('companyname') }}" >

                                                    @if ($errors->has('companyname'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('companyname') }}</strong>
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



                                            <div  class="form-group">
                                                <div style="margin-left: 20px" class="text-left">
                                                    <button type="submit" class="btn btn-primary" id="validateButton2">Submit</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Comment:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="8" type="text" class="form-control " name="comment" value=""   required
                                                    id="comment" placeholder="Enter comment">{{ old('comment') }}</textarea>
                                                    @if ($errors->has('comment'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('comment') }}</strong>
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


