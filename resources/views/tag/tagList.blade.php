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
                            <h3 class="panel-title">Tags</h3>
                        </div>
                        <div class="panel-body container-fluid">




                            <div class="panel" id="projects">

                                <div class="table-responsive">
                                    <table class="table table-striped" id='tagsTable'>
                                        <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1 ?>

                                        @if(isset($tags))
                                            @foreach($tags as $tag)
                                                
                                        <tr>
                                            <td class = "text-overflow speaker-name-padding">{{$i++}}</td>
                                            <td class = "text-overflow speaker-bio-padding" >{{$tag->name}}</td>
                                            <td class="text-nowrap" style="width: 14%;">

                                                <a class = "fas fa-pencil-alt" href="{{ route('tag.edit',$tag->id) }}">
                                                </a>

                                                <form style="display:inline" action="{{ route('tag.destroy',$tag->id) }}" {{--onsubmit="return validation()"--}} method="post">

                                                    {{ method_field('DELETE') }}
                                                    {!! csrf_field() !!}

                                                    <button type="submit" class="btn btn-sm btn-danger btn-icon btn-flat btn-pure btn-default" data-toggle="tooltip"
                                                            data-original-title="Delete">
                                                        <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                    </button>
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
                            <h3 class="panel-title">Create Tag</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <form method="POST"
                                  @if(isset($tagEdit))
                                         action="{{route('tag.update',$tagEdit->id)}}"
                                  @endif
                                  @if(!isset($tagEdit))
                                         action="{{route('tag.store')}}"
                                  @endif accept-charset="UTF-8" style="width:100%" id="speakerForm" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                @if(isset($tagEdit))
                                    {{method_field("PATCH")}}
                                @endif

                                <div class="form-group form-material">
                                    <input class="form-control" placeholder="Enter tag Name" required="" style="width:97%;" name="name"
                                     type="text" @if(isset($tagEdit)) value="{{$tagEdit->name}}" @endif>
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
            $("#tagsTable").DataTable();


        });
    </script>

    <style>
       
    </style>
@endsection













