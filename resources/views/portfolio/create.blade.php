@extends('layouts.admin')
@section('page')
<style media="screen">
.select2 {

    width:100% !important;

}
</style>
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
                                <h3   class="panel-title">Create Portfolio</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" onsubmit="swaptext()" method="post" action="{{route('portfolio.store')}}" autocomplete="off" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Title:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="title" id="title"  required
                                                    placeholder="Enter title" value="{{ old('title') }}">

                                                    @if ($errors->has('title'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            {{--<div class="container">
                                                <div id="quillEditor"></div>
                                            </div>--}}



                                           {{-- <div class="form-group">
                                                <label class="control-label col-sm-5"  for="comment">Description:</label>
                                                <div class="col-sm-12 container">
                                                    <textarea class="form-control" rows="8" id="quillEditor" name="description" >{{ old('description') }}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>--}}
                                            <div class="form-group">
                                                <label class="control-label col-sm-5"   for="sel1">Category:</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="category_id" id="sel1">
                                                        @foreach( $categories as $cat)
                                                            <option  style="padding-left: 100px;padding-right: 100px"   value="{{$cat->id}}">{{$cat->name}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Technologies:</label>
                                                <div class="col-sm-12">
                                                    <select class="js-example-basic-multiple form-control" name="technologies[]" required multiple="multiple">

                                                        @if(isset($tags))
                                                            @foreach($tags as $tag)
                                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                            @endforeach
                                                        @endif



                                                    </select>
                                                    @if ($errors->has('technologies'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('technologies') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Images:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" name="images[]" multiple id="title" required placeholder="Select Images">
                                                    @if ($errors->has('images'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('images') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Featured Image:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control " name="featuredimage"  id="title" placeholder="Select Featured Image" required>
                                                    @if ($errors->has('featuredimage'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('featuredimage') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">



                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="editor-container">Description:</label>
                                                <div class="col-sm-12 ">
                                                    <input name="description" type="hidden">
                                                </div>
                                                <div style="height: 200px ; " id="editor-container"  class="col-sm-12 p-2">
                                                    <p>{!!   old('description') !!}</p>
                                                </div>
                                                @if ($errors->has('description'))
                                                    <span style="color: red;margin-left: 20px" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="editor-div">What Problems are we solving?</label>
                                                <div class="col-sm-12 ">
                                                    <input name="description_problem" type="hidden">
                                                </div>
                                                <div style="height: 200px ; " id="editor-div"  class="col-sm-12 p-2">
                                                    <p>{!!   old('description_problem') !!}</p>
                                                </div>
                                                @if ($errors->has('description'))
                                                    <span style="color: red;margin-left: 20px" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description_problem') }}</strong>
                                                </span>
                                                @endif
                                            </div>


                                        </div>

                                            <div  class="form-group">
                                                <div style="margin-left: 30px" class="text-left">
                                                    <button type="submit" class="btn btn-primary" id="validateButton2">Submit</button>
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

        #editor-container, #editor-div{
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


        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });




        var quill = new Quill('#editor-container', {

            placeholder: 'Write something about the new portfolio....',
            theme: 'snow'
        });

        var quill_2 = new Quill('#editor-div', {

            placeholder: 'Write something about the new portfolio....',
            theme: 'snow'
        });

       /* var content = quill.getContents();
        $("#description").val(content);*/


        var form = document.querySelector('form');
         function swaptext() {
            // Populate hidden form on submit
            var about = document.querySelector('input[name=description]');
            var description_problem = document.querySelector('input[name=description_problem]');
            if (quill.root.innerHTML =="<p><br></p>") {
                quill.root.innerHTML ==null;
            }  else {
                about.value = quill.root.innerHTML;
                description_problem.value = quill_2.root.innerHTML;
                return true;
            }

        };


    </script>

@endsection
