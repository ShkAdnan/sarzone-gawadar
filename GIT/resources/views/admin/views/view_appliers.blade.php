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

                        <h3><i class="fas fa-table mr-1"></i> All appliers</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                                <thead>

                                    <tr>

                                        <th>Id</th>

                                        <th>CV</th>

                                        <th>Actions</th>

                                        <th>Time</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($CVs as $CV)

                                        <tr>

                                            <td>{{ $CV->applier_id }}</td>

                                            <td>
                                                <a href="{{ asset("storage/upload/CVs/". $CV->applier_cv ) }}" target="_blank" download>{{ $CV->applier_cv }}</a>
                                            </td>
                                            <td>
                                                <a href="{{route('applier.delete',['id'=>$CV->applier_id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>
                                            </td>

                                            <td>{{ $CV->time }}</td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Id</th>

                                        <th>CV</th>

                                        <th>Actions</th>

                                        <th>Time</th>

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

