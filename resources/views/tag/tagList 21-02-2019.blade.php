@extends('layouts.admin')
@section('page')

    <div style="">
        <div style="padding-top: 30px"   class="page">

            <div >
                @if(Session::has('message'))
                    <div    class="alert flash-message  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ Session::get('message') }}
                    </div>

                @endif
            </div>



           {{-- <div class="d-flex justify-content-center alert alert-success">
                <h4>Speaker deleted successfully</h4>
            </div>--}}
            <div  class="page-content container-fluid">




                <div class="row">
                    {{-- <div  >

                         <h1 style="float: left;margin: 10px 3px 50px 6px;" >Catgories</h1>
                     </div>--}}
                    <div style="background: white;padding: 40px "class="table-responsive col-sm-6    ">
                        <h2 style="margin: 0px" >Tags</h2>
                        <table  class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th >Actions</th>
                            </tr>
                            </thead>

			                <?php $i=1 ?>
                            <tbody>
                            @if(isset($tags))
                                @foreach($tags as $tag)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td style="width: 250px">{{$tag->name}}</td>

                                        <td style="">

                                            <div style="float: left">
                                                <form action="{{ route('tag.destroy',$tag->id) }}" method="post" >
                                                    {{ method_field('DELETE') }}
                                                    {!! csrf_field() !!}
                                                    <div  class="form-group">
                                                        <div  class="text-left">
                                                            <button type="submit" class="btn btn-danger" id="action-button-delete"><i class="fas fa-trash-alt"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div style="float: left">
                                                <form action="{{ route('tag.edit',$tag->id) }}" method="get" >
                                                    <div  class="form-group">
                                                        <div  class="text-left">
                                                            <button style="width: 70px" type="submit" class="btn btn-primary" id="action-button-edit"><i class="fas fa-edit"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            {{--  <div style="">
                                                  <form action="{{ route('portfolio.show',$portfolio->id) }}" method="get" >
                                                      {{csrf_field()}}
                                                      <div  class="form-group">
                                                          <div style="margin-left: 20px" class="text-left">
                                                              <button type="submit" class="btn btn-info" id="validateButton2">View</button>
                                                          </div>
                                                      </div>
                                                  </form>
                                              </div>--}}





                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    <div  class="col-sm-6">


                        <div  class="panel">
                            <div class="panel-heading">
                                <h3 style="     padding: 45px 43px 14px;"; class="panel-title">Create Tag</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal"  method="post"
                                      @if(isset($tagEdit))
                                            action="{{route('tag.update',$tagEdit->id)}}"
                                      @endif

                                      @if(!isset($tagEdit))
                                         action="{{route('tag.store')}}"
                                      @endif

                                      autocomplete="off">
                                    {!! csrf_field() !!}

                                    @if(isset($tagEdit))
                                         {{method_field("PATCH")}}
                                    @endif

                                    <div class="form-group {{--row form-material--}}">
                                        <label class="col-md-6">Enter Tag Name</label>
                                        <div class="col-md-9 {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            <input type="text" class="form-control" name="name"  required @if(isset($tagEdit)) value="{{$tagEdit->name}}" @endif  />
                                        </div>

                                        @if ($errors->has('name'))
                                            <span style="color: red;margin-left: 160px" class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                        @endif
                                    </div>

                                    <div >
                                        <button  type="submit" style="margin-left: 15px" class="btn btn-primary " id="validateButton2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>



    </script>

@endsection













