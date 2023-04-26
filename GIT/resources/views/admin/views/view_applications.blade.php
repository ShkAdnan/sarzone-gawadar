@extends('admin.layout.app')



@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 my-5">

                @if (session()->has('msg'))

                    <div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>

                @endif


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#non_viewed" role="tab"
                            aria-controls="non_viewed" aria-selected="true">Recent</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="viewed-tab" data-toggle="tab" href="#viewed" role="tab"
                            aria-controls="viewed" aria-selected="false">Viewed</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="non_viewed" role="tabpanel" aria-labelledby="non_viewed-tab">

                        <div class="card mb-4 w-100">
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered text-center" id="dataTable" width="100%"
                                        cellspacing="0">

                                        <thead>

                                            <tr>

                                                <th>Id</th>

                                                <th>Application Form</th>

                                                <th>CNIC No.</th>

                                                <th>Matric Card</th>

                                                <th>Intermediate Card</th>

                                                <th>Domicile</th>

                                                <th>Time</th>

                                                <th>Actions</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            @foreach ($nonViewed as $item)

                                                <tr>

                                                    <td>{{ $item->student_id }}</td>

                                                    <td><a target="_blank" href="{{asset('upload/students/'.$item->CV.".pdf" )}}" target="_blank">{{ $item->CV }}</a></td>

                                                    <td>{{ $item->student_CNIC }}</td>

                                                    <td><a target="_blank" href="{{asset('upload/Information/'.$item->matric_certificate)}}" >{{ $item->student_id }} Matric Card</a></td>

                                                    <td><a target="_blank" href="{{asset('upload/Information/'.$item->inter_certificate)}}" >{{ $item->student_id }} Intermediate Card</a></td>

                                                    <td><a target="_blank" href="{{asset('upload/Information/'.$item->student_domicileImg)}}" >{{ $item->student_id }} Domicile</a></td>

                                                    <td>{{ $item->time }}</td>

                                                    <td>

                                                        <a
                                                            href="{{ route('online_applications.makeViewed', $item->student_id) }}"><i
                                                                class="fa fa-eye mx-2"></i></a>(Make Viewed)

                                                        <a
                                                            href="{{ route('online_applications.delete', $item->student_id) }}"><i
                                                                class="fa fa-trash text-danger mx-2"></i></a>

                                                    </td>

                                                </tr>

                                            @endforeach

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>Id</th>

                                                <th>CV</th>

                                                <th>CNIC No.</th>

                                                <th>Matric Card</th>

                                                <th>Intermediate Card</th>

                                                <th>Domicile</th>

                                                <th>Time</th>

                                                <th>Actions</th>

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="viewed" role="tabpanel" aria-labelledby="viewed-tab">
                        <div class="card mb-4 w-100">
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered text-center" id="dataTable" width="100%"
                                        cellspacing="0">

                                        <thead>

                                            <tr>

                                                <th>Id</th>

                                                <th>CV</th>

                                                <th>CNIC No.</th>

                                                <th>Matric Card</th>

                                                <th>Intermediate Card</th>

                                                <th>Domicile</th>

                                                <th>Time</th>

                                                <th>Actions</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            @foreach ($viewed as $item)

                                                <tr>

                                                    <td>{{ $item->student_id }}</td>

                                                    <td><a href="{{asset('storage/upload/students/'.$item->CV.".pdf" )}}" target="_blank">{{ $item->CV }}</a></td>

                                                    <td>{{ $item->student_CNIC }}</td>

                                                    <td><a href="{{asset('storage/upload/Information/'.$item->matric_certificate)}}" target="_blank">{{ $item->student_id }} Matric Card</a></td>

                                                    <td><a href="{{asset('storage/upload/Information/'.$item->inter_certificate)}}" target="_blank">{{ $item->student_id }} Intermediate Card</a></td>

                                                    <td><a href="{{asset('storage/upload/Information/'.$item->student_domicileImg)}}" target="_blank">{{ $item->student_id }} Domicile</a></td>

                                                    <td>{{ $item->time }}</td>

                                                    <td>

                                                        <a
                                                            href="{{ route('online_applications.delete', $item->student_id) }}"><i
                                                                class="fa fa-trash text-danger mx-2"></i></a>

                                                    </td>

                                                </tr>

                                            @endforeach

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th>Id</th>

                                                <th>CV</th>

                                                <th>CNIC No.</th>

                                                <th>Matric Card</th>

                                                <th>Intermediate Card</th>

                                                <th>Domicile</th>

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

    </div>

    </div>



@endsection
