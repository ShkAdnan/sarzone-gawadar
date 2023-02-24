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
                        <h3><i class="fas fa-table mr-1"></i> All Programs</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th width="30%">Pre-Requisite</th>
                                        <th>Duration(Months)</th>
                                        <th>Actions</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programs as $program)
                                        <tr>
                                            <td>{{ $program->program_id }}</td>
                                            <td>{{ $program->program_name }}</td>
                                            <td>{{ html_entity_decode(strip_tags($program->program_preRequisite)) }}</td>
                                            <td>{{ $program->program_duration }}</td>
                                            <td>
                                                <a href="{{route('admission.edit',['id'=>$program->program_id]) }}"><i class="fa fa-edit mx-2"></i></a>
                                                <a href="{{route('admission.delete',['id'=>$program->program_id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>
                                            </td>
                                            <td>{{ $program->time }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Pre-Requisite</th>
                                        <th>Duration(Months)</th>
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
