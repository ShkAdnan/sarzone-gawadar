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

                        <h3><i class="fas fa-table mr-1"></i> All Albums</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                                <thead>

                                    <tr>

                                        <th>Id</th>

                                        <th>Title</th>

                                        <th>Cover Image</th>

                                        <th>Time</th>

                                        <th>Actions</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($albums as $album)

                                        <tr>

                                            <td>{{ $album->album_id }}</td>

                                            <td>{{ $album->album_title }}</td>

                                            <td><img src="{{ asset('upload/GIT_albums') }}/{{$album->album_coverImage}}" height="100px" width="200px" alt=""></td>

                                            <td>{{ $album->time }}</td>

                                            <td>

                                                <a href="{{route('album.edit',['id'=>$album->album_id]) }}"><i class="fa fa-edit mx-2"></i></a>

                                                <a href="{{route('album.delete',['id'=>$album->album_id])}}"><i class="fa fa-trash text-danger mx-2"></i></a>

                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Id</th>

                                        <th>Title</th>

                                        <th>Cover Image</th>

                                        <th>time</th>

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

