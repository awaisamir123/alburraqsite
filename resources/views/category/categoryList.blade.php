@extends('layouts.admin')
@section('page')
    <div class="page">
        <div class="page-content container-fluid">

            <div >
                @if(Session::has('message'))
                    <div    class=" alert flash-message  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h4>{{ Session::get('message') }}</h4>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-8">
                    <!-- Panel Static Labels -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>
                        <div class="panel-body container-fluid">




                            <div class="panel" id="projects">

                                <div class="table-responsive">
                                    <table class="table table-striped" id='categoriesTable'>
                                        <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php $i=1 ?>

                                        @if(isset($categories))
                                            @foreach($categories as $category)


                                                <tr>
                                                    <td class = "text-overflow speaker-name-padding">{{$i++}}</td>
                                                    <td class = "text-overflow speaker-bio-padding" >{{$category->name}}</td>
                                                    <td class="text-nowrap" style="width: 14%;">

                                                        <a class = "fas fa-pencil-alt" href="{{ route('category.edit',$category->id) }}">
                                                        </a>

                                                        <form style="display:inline" action="{{ route('category.destroy',$category->id) }}" {{--onsubmit="return validation()"--}} method="post">

                                                            {{ method_field('DELETE') }}
                                                            {!! csrf_field() !!}

                                                            <button type="button" class="btn btn-sm btn-danger btn-icon btn-flat btn-pure btn-default" data-target="#exampleNiftySlideFromRight" data-toggle="modal"
                                                                    data-original-title="Delete">
                                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                            </button>



                                                            <div class="modal fade modal-slide-in-right" id="exampleNiftySlideFromRight" aria-hidden="true"
                                                                 aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
                                                                <div class="modal-dialog modal-simple">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                            <h4 class="modal-title">Delete category</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Deleting this category will also delete related portfolio have this category
                                                                                .</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-danger" id="validateButton2">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>




                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- End Panel Static Labels -->
                </div>
                <div class="col-md-4">
                    <!-- Panel Floating Labels -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create New category</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <form method="POST"
                                  @if(isset($cat))
                                  action="{{route('category.update',$cat->id)}}"
                                  @endif
                                  @if(!isset($cat))
                                  action="{{route('category.store')}}"
                                  @endif
                                  accept-charset="UTF-8" style="width:100%"{{-- id="speakerForm"--}} enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                @if(isset($cat))
                                    {{method_field("PATCH")}}
                                @endif

                                <div class="form-group form-material">
                                    <input class="form-control" placeholder="Enter Category Name" required="" style="width:97%;" name="name" type="text" @if(isset($cat)) value="{{$cat->name}}" @endif>
                                    <span style="color:red; float:right; margin-top:-25px;">*</span>
                                    @if ($errors->has('name'))
                                        <span style="color: red;" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                    @endif
                                </div>





                                <br clear="all">
                                <button type="submit" class=" btn btn-primary"  >Submit</button>


                            </form>
                        </div>
                    </div>
                    <!-- End Panel Floating Labels -->
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            $('.flash-message').fadeOut('fast');
        }, 8000);




    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#categoriesTable").DataTable();


        });
    </script>

    <style>

    </style>
@endsection













