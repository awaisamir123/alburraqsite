@extends('layouts.admin')
@section('page')

    <div class="page">
        <div class="page-content container-fluid">
            {{--<style media="screen">
                .dropify-wrapper {
                    width: 150px !important;
                    height: 150px !important;
                }
                .group-padding
                {
                    padding-right: 40px !important;
                }
            </style>--}}
            <!-- Page -->

                <div >
                    @if(Session::has('error'))
                        <div class="container">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center alert alert-danger">
                                        <h4>{{Session::get('error')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(Session::has('success'))
                        <div class="container">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center alert alert-success">
                                        <h4>{{Session::get('success')}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            <div class="row">

                <div class="col-md-12">
                    <!-- Panel Static Labels -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Hire Developer</h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="panel" id="projects">

                                <div class="table-responsive">
                                    <table class="table table-striped" id='hireDeveloperTable'>
                                        <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Company</th>
                                            <th>Need</th>
                                            <th style="width: 20%;">Message</th>
                                            <th>Created At</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($i=1)

                                        @if(isset($hireDeveloper))
                                            @foreach($hireDeveloper as $key)

                                                <tr>
                                                    <td class = "text-overflow speaker-name-padding">{{$i++}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->name}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->email}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->phone}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->company}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->need}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->message}}</td>
                                                    <td class = "text-overflow speaker-bio-padding">{{$key->created_at}}</td>
                                                    <td class="text-nowrap" >



                                                        <!-- <form style="display:inline" action="{{route('hire-developer.destroy',$key->id)}}" {{--onsubmit="return validation()"--}} method="post"> -->

                                                           <!--  {{ method_field('DELETE') }}
                                                            {!! csrf_field() !!} -->

                                                            <button   onclick="deleteHireDeveloper({{$key->id}})" class="btn btn-sm btn-danger btn-icon btn-flat btn-pure btn-default" data-toggle="tooltip"
                                                                    data-original-title="Delete">
                                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                            </button>
                                                        <!-- </form> -->
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
            </div>
        </div>


        <script type="text/javascript">
            function deleteHireDeveloper(id){
                if (confirm('Are you sure you want to delete this Hire developer ?')) {
                  $("#"+id).remove();
                  $.ajax({
                          method: "POST",
                          url: "{{route('hireDeveloperDelete')}}",
                          data: { _token: "{{csrf_token()}}",id: id },
                          success: function(response){
                          if(response.status){
                            window.location.replace('/admin/hire-developer');
                          }else{
                              window.alert('Server errors! '+response.message);
                          }
                        }
                      });
                }
              }
            // function deleteItem() {
            //     if (confirm("Are you sure want to delete ?")) {
            //         return true;
            //     }
            //     event.preventDefault();
            //     return false;
            // }
            $(document).ready(function() {
                $("#hireDeveloperTable").DataTable();
            });
        </script>
        <!-- End Page -->
    </div>

  
    <script>



    </script>

@endsection
