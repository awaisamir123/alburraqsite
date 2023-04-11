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

                <h1 class="page-title">Create New Tags</h1>

                <div class="page-header-actions">
                    <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                            data-original-title="Edit">
                        <i class="icon md-edit" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                            data-original-title="Refresh">
                        <i class="icon md-refresh-alt" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                            data-original-title="Setting">
                        <i class="icon md-settings" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="page-content container-fluid">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- Panel Static Labels -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create Tag</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('tag.store')}}" autocomplete="off">
                                    {!! csrf_field() !!}

                                    <div class="form-group row form-material">
                                        <label class="col-md-3 form-control-label   ">Enter Tag Name</label>
                                        <div class="col-md-9 {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            <input type="text" class="form-control" name="name"  />
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


