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

                <h1 class="page-title">Replied Messages</h1>

               {{-- <div class="page-header-actions">
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
                </div>--}}
            </div>
            <div class="page-content container-fluid">
                <div style="background: white "class="table-responsive    ">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Response</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php $i=0 ?>
                        <tbody>
                        @if(isset($messages))
                            @foreach($messages as $message)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td style="width: 230px">{{$message->message}}</td>
                                    <td style="width: 230px">{{strip_tags($message->response)}}</td>



                                    <td style="">
                                       {{-- <div style=" float: left">
                                            <form action="{{ route('message.edit',$message->id) }}" method="get" >
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button style="width: 90px" type="submit" class="btn btn-primary" id="validateButton2">Response</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>--}}



                                        <div style="float: left;">
                                            <form action="{{ route('message.destroy',$message->id) }}" method="post" >
                                                {{ method_field('DELETE') }}
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button type="submit" class="btn btn-danger" id="validateButton2">Delete</button>
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


    </script>

@endsection


