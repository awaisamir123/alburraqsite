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

                    <h1 style="float: left;margin: 30px 3px 50px 6px;" >Team Members</h1>
                    <button class="btn btn-primary" style=";float: right;text-align: center;margin: 30px 10px 0px 0px;">
                        <a  style="color: white"  href="{{route('team-member.create')}}">
                            Create New Member
                        </a></button>
                </div>
                <div style="background: white "class="table-responsive    ">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Description</th>
                            <th>Featured Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php $i=1 ?>
                        <tbody>
                        @if(isset($members))
                            @foreach($members as $member)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->jobtitle}}</td>
                                    <td width="400" height="150px">
                                        <div style="width: 400px; height: 150px; overflow: auto">
                                           {!! $member->description !!}
                                        </div>
                                    </td>
                                    <td>
                                        <div><img style="height: 120px;width: 120px"  src="/profileimages/{{$member->image}}" alt=""></div></td>
                                    <td style="width: 100px" ><div style="float: left">
                                            <form action="{{ route('team-member.edit',$member->id) }}" method="get" >
                                             {{--   {!! csrf_field() !!}--}}
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
                                            <form action="{{ route('team-member.destroy',$member->id) }}" method="post" >
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
            </div>
            <div style="margin-left: 45%"> {!! $members->render() !!}</div>

        </div>
    </div>


    <script>


    </script>

@endsection


