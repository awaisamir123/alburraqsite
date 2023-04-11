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

                    <h1 style="float: left;margin: 30px 3px 50px 6px;" >Messages</h1>
                    
                </div>
                <div style="background: white "class="table-responsive    ">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <?php $i=1 ?>
                        <tbody>
                        @if(isset($messages))
                            @foreach($messages as $message)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td>{{$message->created_at->diffForHumans()}}</td>
                                    @if($message->responsestatus==1)
                                    <td>Answered</td>
                                    @endif
                                    @if($message->responsestatus==0)
                                        <td>Not</td>
                                    @endif
                                    <td style="width: 200px">{{ substr($message->message, 0, 80)}}...</td>



                                    <td style="width:155px">

                                        <div style=" float: left">
                                            <form action="{{ route('message.edit',$message->id) }}" method="get" >
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button style="" type="submit" class="btn btn-primary" id="action-button-edit"><i class="fas fa-reply"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div style=" float: left">
                                            <form action="{{ route('message.edit',$message->id) }}" method="get" >
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button style="" type="submit" class="btn btn-primary" id="action-button-view"><i class="fas fa-eye"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



                                        <div style="float: left;">
                                            <form action="{{ route('message.destroy',$message->id) }}" method="post" >
                                                {{ method_field('DELETE') }}
                                                {!! csrf_field() !!}
                                                <div  class="form-group">
                                                    <div style="margin-left: 20px" class="text-left">
                                                        <button id="action-button-delete" type="submit" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
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
            <div style="margin-left: 45%"> {!! $messages->render() !!}</div>
        </div>
    </div>



    <script>


    </script>

@endsection


