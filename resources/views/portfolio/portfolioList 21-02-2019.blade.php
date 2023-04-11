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


            <div class="page-content container-fluid">

                <div  >

                    <h1 style="float: left;margin: 30px 3px 50px 6px;" >Portfolios</h1>
                    <button class="btn btn-primary" style=";float: right;text-align: center;margin: 30px 10px 0px 0px;">
                        <a  style="color: white"  href="{{route('portfolio.create')}}">
                            Create Portfolio
                        </a></button>
                </div>
                
                <div style="background: white "class="table-responsive    ">
                    <table id="table_id" class="table table-hover table-striped">
                        <thead >
                        <tr style="border: black">
                            <th>Sr.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Featured Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php $i=1 ?>
                        <tbody>
                        @if(isset($portfolios))
                            @foreach($portfolios as $portfolio)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$portfolio->title}}</td>
                                    <td  >
                                        <div style="width: 400px; height: 200px; overflow: auto">
                                           {!! $portfolio->description !!}
                                        </div>
                                    </td>
                                    <td>{{$portfolio->category->name}}</td>
                                    <td>
                                        <div><img class="img-responsive" style="height: 175px;width: 175px"  src="/portfolioimages/{{$portfolio->featuredimage}}" alt=""></div></td>
                                    <td style="width: 70px">
                                        <div style="float: left">
                                            <form action="{{ route('portfolio.edit',$portfolio->id) }}" method="get" >
                                                {{--{!! csrf_field() !!}--}}
                                                <div  class="form-group">
                                                    <div  class="text-left">
                                                        <button  type="submit" class="btn btn-primary" id="action-button-edit"><i class="fas fa-edit"></i></button>
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
                                            <form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="post" >
                                                {{ method_field('DELETE') }}
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div  class="text-left">
                                                        <button i type="submit" class="btn btn-danger" id="action-button-delete"><i class="fas fa-trash-alt"></i></button>
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
            </div>
        </div>
    </div>


    <script>
        //Datatables
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

    </script>

@endsection


