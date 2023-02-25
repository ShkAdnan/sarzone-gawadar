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

                        <h3><i class="fas fa-table mr-1"></i> All Stories</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                                <thead>

                                    <tr>

                                        <th>Id</th>

                                        <th>Name</th>

                                        <th>Image</th>

                                        <th>Student</th>

                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($stories as $storie)

                                        <tr>

                                            <td>{{ $storie->id }}</td>

                                            <td>{{ $storie->name }}</td>

                                            <td><img src="{{ asset('upload/images/') }}/{{$storie->stories_images}}" height="100px" width="200px" alt=""></td>

                                            <td>{{ $storie->category }}</td>
                                            <td>{{ $storie->discription }}</td>

                                            <td>

                                                <a href="{{route('Stories.edit',['id'=>$storie->id]) }}"><i class="fa fa-edit mx-2"></i></a>

                                                <a href="{{route('Stories.delete',['id'=>$storie->id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Id</th>

                                        <th>Name</th>

                                        <th>Image</th>

                                        <th>Student</th>

                                        <th>Description</th>
                                        <th>Action</th>

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

