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
                @if(Session::has('message'))
                    <div    class=" alert flash-message  alert-dismissible   {{ Session::get('alert-class', 'alert-info') }}">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h4>{{ Session::get('message') }}</h4>
                    </div>
                @endif
            </div>
            <div class="row">

                <div class="col-md-12">
                    <!-- Panel Static Labels -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Members
                                <a href="{{route('team-member.create')}}"  class="btn btn-secondary" style="float:right;">Create</a>
                            </h3>
                        </div>
                        <div class="panel-body container-fluid">
                            <div class="panel" id="projects">

                                <div class="table-responsive">
                                    <table class="table table-striped" id='reviewTable'>
                                        <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Job Title</th>
                                            <th>Description</th>
                                            <th>Featured Image</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php $i=1 ?>

                                        @if(isset($members))
                                            @foreach($members as $member)

                                                <tr>
                                                    <td class = "text-overflow speaker-name-padding">{{$i++}}</td>
                                                    <td class = "text-overflow speaker-bio-padding" >{{$member->name}}</td>
                                                    <td class = "text-overflow speaker-bio-padding " >{{$member->jobtitle}}</td>
                                                    <td class = "text-overflow speaker-bio-padding" style="width: 400px;height:200px;overflow: auto" >
                                                        <div style="width: 400px;height:200px;overflow: auto">{!!  $member->description!!}</div>
                                                    </td>
                                                    <td class = "text-overflow speaker-bio-padding" style="" >

                                                        <div>
                                                            <img style="width: 200px;height: 200px" class="img-responsive" src="/profileimages/{{$member->image}}" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap" style="width: 14%;">

                                                        <a class = "fas fa-pencil-alt" href="{{ route('team-member.edit',$member->id) }}">
                                                        </a>

                                                        <form style="display:inline" action="{{ route('team-member.destroy',$member->id) }}" {{--onsubmit="return validation()"--}} method="post">

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
            </div>
        </div>


        <script type="text/javascript">
            function deleteItem() {
                if (confirm("Are you sure want to delete ?")) {
                    return true;
                }
                event.preventDefault();
                return false;
            }
            $(document).ready(function() {
                $("#reviewTable").DataTable();
            });
        </script>
        <!-- End Page -->
    </div>


    <script>



    </script>

@endsection


