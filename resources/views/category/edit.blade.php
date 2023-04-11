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

            <div class="page-header">

               
            </div>
            <div class="page-content container-fluid">
                <div class="row">
                    
                    <div class="col-md-6">
                        <!-- Panel Static Labels -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update Category</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('category.update',$category->id)}}" autocomplete="off">
                                    {!! csrf_field() !!}
                                    {{method_field("PATCH")}}

                                    <div class="form-group row form-material">
                                        <label class="col-md-3 form-control-label   ">Category Name</label>
                                        <div class="col-md-9 {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            <input type="text" class="form-control" name="name"
                                                   @if(isset($category))
                                                         value="{{ $category->name }}"
                                                    @endif>

                                        </div>

                                        @if ($errors->has('name'))
                                            <span style="color: red;margin-left: 160px" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                        @endif
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary" id="validateButton2">Submit</button>
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

@endsection


