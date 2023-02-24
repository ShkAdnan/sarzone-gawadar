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
                        <h3><i class="fas fa-table mr-1"></i> All Graduates</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>CNIC No.</th>
                                        <th>Program/Diploma</th>
                                        <th>Graduation Date</th>
                                        <th>Program Duration</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($graduates as $graduate)
                                        <tr>
                                            <td>{{ $graduate->graduate_id }}</td>
                                            <td>{{ $graduate->graduate_name }}</td>
                                            <td>{{ $graduate->graduate_CNIC }}</td>
                                            <td>{{ $graduate->program_name }}</td>
                                            <td>{{ $graduate->graduate_date }}</td>
                                            <td>{{ $graduate->graduate_duration }}</td>
                                            <td>{{ $graduate->graduate_contact }}</td>
                                            <td>{{ $graduate->graduate_address }}</td>
                                            <td>{{ $graduate->time }}</td>
                                            <td>
                                                <a href="{{route('graduate.edit',['id'=>$graduate->graduate_id]) }}"><i class="fa fa-edit mx-2"></i></a>
                                                <a href="{{route('graduate.delete',['id'=>$graduate->graduate_id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>CNIC No.</th>
                                        <th>Program/Diploma</th>
                                        <th>Graduation Date</th>
                                        <th>Program Duration</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
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
