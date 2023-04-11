@extends('layouts.admin')
@section('page')

    <div style="">
        <div   class="page">

            <div style="padding-top: 30px">
                @if(Session::has('message'))
                    <div   class="alert flash-message  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ Session::get('message') }}
                    </div>

                @endif
            </div>


            <div  class="page-content container-fluid">




                <div class="row">
                   {{-- <div  >

                        <h1 style="float: left;margin: 10px 3px 50px 6px;" >Catgories</h1>
                    </div>--}}
                <div style="background: white "class="table-responsive   col-sm-6  ">
                    <h1 style="float: left;margin: 10px 3px 50px 6px;" >Catgories</h1>

                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th style="float: right;margin-right: 80px">Actions</th>
                        </tr>
                        </thead>

                        <?php $i=1 ?>
                        <tbody>
                        @if(isset($categories))
                            @foreach($categories as $category)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->name}}</td>

                                    <td style="align-content: center"><div style="float: left">
                                            <form action="{{ route('category.edit',$category->id) }}" method="get" >
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
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

                                        <div style="float: left">
                                            <form action="{{ route('category.destroy',$category->id) }}" method="post" >
                                                {{ method_field('DELETE') }}
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button type="submit" class="btn btn-danger" id="action-button-delete"><i class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



                                    </td>

                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>

                    <div class="col-sm-6">


                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create Category</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="exampleStandardForm" method="post" action="{{route('category.store')}}" autocomplete="off">
                                    {!! csrf_field() !!}

                                    <div class="form-group row form-material">
                                        <label class="col-md-3 form-control-label   ">Category Name</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>



    </script>

@endsection


