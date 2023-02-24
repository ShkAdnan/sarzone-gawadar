@extends('admin.layout.app')



@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 my-5">

                @if (session()->has("msg"))

                    <div class="alert alert-{{session()->get("status")}}">{{session()->get("msg")}}</div>

                @endif

                <div class="card mb-4 w-100">

                    <div class="card-header">

                        <h3><i class="fas fa-table mr-1"></i> All Jobs</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                                <thead>

                                    <tr>

                                        <th>Id</th>

                                        <th>Title</th>

                                        <th width="30%">Description</th>

                                        <th>Closing Date</th>

                                        <th width="100px">CVs</th>

                                        <th>Actions</th>

                                        <th>Time</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($jobs as $job)

                                        <tr>

                                            <td>{{ $job->job_id }}</td>

                                            <td>{{ $job->job_title }}</td>

                                            <td>{{ html_entity_decode(strip_tags($job->job_requirements)) }}</td>

                                            <td>{{ $job->job_endDate }}</td>

                                            <td><a href="{{route('placement.viewCVs',$job->job_id)}}" class="btn btn-primary">View CVs</a></td>

                                            <td>

                                                <a href="{{route('placement.edit',['id'=>$job->job_id]) }}"><i class="fa fa-edit mx-2"></i></a>

                                                <a href="{{route('placement.delete',['id'=>$job->job_id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>

                                            </td>

                                            <td>{{ $job->time }}</td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Id</th>

                                        <th>Title</th>

                                        <th>Description</th>

                                        <th>Closing Date</th>

                                        <th>CVs</th>

                                        <th>Time</th>

                                        <th>Actions</th>

                                    </tr>

                                </tfoot>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



@endsection

