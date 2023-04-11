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

                    <h1 style="float: left;margin: 10px 3px 50px 6px;" >Reviews</h1>
                    <button class="btn btn-primary" style=";float: right;text-align: center;margin: 30px 10px 0px 0px;">
                        <a  style="color: white"  href="{{route('review.create')}}">
                            Create
                        </a></button>
                    
                </div>

                <div style="background: white "class="table-responsive    ">
                    <table class="table table-hover table-striped">

                        <thead>
                        <tr>

                            <th>Sr.</th>
                            <th>Person Name</th>
                            <th>Company Name</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php $i=1 ?>
                        <tbody>
                        @if(isset($reviews))
                            @foreach($reviews as $review)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$review->name}}</td>
                                    <td>{{$review->companyname}}</td>
                                    <td style="width: 500px">{{$review->comment}}</td>

                                    <td style=""><div style="float: left">
                                            <form action="{{ route('review.edit',$review->id) }}" method="get" >
                                                {{--{!! csrf_field() !!}--}}
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

                                        <div style="float: left">
                                            <form action="{{ route('review.destroy',$review->id) }}" method="post" >
                                                {{ method_field('DELETE') }}
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div  class="text-left">
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
            </div>
            <div style="margin-left: 45%"> {!! $reviews->render() !!}</div>

        </div>
    </div>


    <script>



    </script>

@endsection


