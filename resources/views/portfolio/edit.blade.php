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
                                <h3   class="panel-title">Update Portfolio</h3>
                            </div>
                            <div class="panel-body">
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                <form class="form-horizontal" id="exampleStandardForm" onsubmit="swaptext()" method="post" action="{{route('portfolio.update',$portfolio->id)}}" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PATCH') }}

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Title:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control " name="title" id="title"
                                                    placeholder="Enter title"
                                                           @if(isset($portfolio))
                                                           value="{{ $portfolio->title }}"
                                                           @endif
                                                    >

                                                    @if ($errors->has('title'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-5"   for="sel1">Category:</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="category_id" id="sel1">

                                                        @if(isset($portfolio))
                                                            @foreach($categories as $cat)
                                                                @if($cat->id==$portfolio->category_id)
                                                                    <option selected  style="padding-left: 100px;padding-right: 100px"   value="{{$cat->id}}">{{$cat->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif

                                                        @foreach( $categories as $cat)
                                                            <option  style="padding-left: 100px;padding-right: 100px"   value="{{$cat->id}}">{{$cat->name}}</option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>






                                            <div class="form-group">
                                                <label class="control-label col-sm-5" for="email">Technologies:</label>
                                                <div class="col-sm-12">
                                                    <select class="js-example-basic-multiple form-control"  name="technologies[]" multiple="multiple">

                                                        @if(isset($portfolio))

                                                            @foreach($portfolio->tags as $ptag)

                                                                @foreach($tags as $tag)
                                                                    @if($tag->id==$ptag->name)
                                                                        <option selected  value="{{$tag->id}}">{{$tag->name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @endif

                                                        @if(isset($tags))
                                                            @foreach($tags as $tag)
                                                                <option  value="{{$tag->id}}">{{$tag->name}}</option>
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
                                                    <input type="file" class="form-control" name="images[]" multiple id="title" placeholder="Select Images">
                                                    @if ($errors->has('images'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('images') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                            @if(isset($portfolio))
                                                <div style="margin-left: 0px;margin-right: 0px" class="row">
                                                    @foreach($portfolio->images as $img)
                                                        <div style="margin-bottom: 10px"  class="image col-sm-6">
                                                            <img style="width:200px ;height: 150px" src="/portfolioimages/{{$img->image}}" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div style="margin-top: 20px" class="form-group">
                                                <label class="control-label col-sm-5" for="email">Featured Image:</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" name="featuredimage"  id="title" placeholder="Select Featured Image">
                                                    @if ($errors->has('featuredimage'))
                                                        <span style="color: red" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('featuredimage') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                            </div>

                                            @if(isset($portfolio))
                                                <div style="margin-left: 0px;margin-right: 0px" class="row">
                                                    <div   class="image col-sm-6">
                                                        <img style="width: 100%;height: 150px" src="/portfolioimages/{{$portfolio->featuredimage}}" alt="">
                                                    </div>
                                                </div>
                                            @endif



                                        </div>
                                        <div class="col-sm-6">


                                            <div class=" form-group">
                                                <label class="control-label col-sm-5"  for="comment">Description:</label>
                                                <div class="col-sm-12 ">
                                                    <input name="description" type="hidden">
                                                </div>
                                                <div style="height: 200px " id="editor-container"  class="col-sm-12 ">
                                                    <p>@if(isset($portfolio)){!! trim($portfolio->description) !!}@endif</p>
                                                </div>
                                                @if ($errors->has('description'))
                                                    <span style="margin-left: 20px;color: red" class="invalid-feedback" role="alert">
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
                                                    <p>@if(isset($portfolio)){!! trim($portfolio->description_problem) !!}@endif</p>
                                                </div>
                                                @if ($errors->has('description'))
                                                    <span style="color: red;margin-left: 20px" class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('description_problem') }}</strong>
                                                </span>
                                                @endif
                                            </div>





                                        </div>



                                    </div>



                                            <div  class="form-group">
                                                <div style="margin:30px 0 0 12px" class="text-left">
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

        // console.log('Yes')
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
