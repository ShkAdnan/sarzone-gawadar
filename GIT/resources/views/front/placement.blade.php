@extends('front.layout.app')





@section('content')

    <style>
        #carerenav {

            height: 130px;

        }



        #placementheading {

            font-size: 40px;

            font-family: sans-serif;

            margin-top: 50px;

            border-bottom: 5px solid skyblue;

            display: inline-block;

        }



        table,

        th,

        td {

            border: 2px solid black;

            border-collapse: collapse;

            padding: 10px;

            margin-top: 20px;

            margin-left: 30px;

            color: black;

        }



        .th {

            height: 50px;

        }



        #tr2:hover {

            color: brown;

            cursor: pointer;

        }

    </style>



    @include('front.layout.navBar')



 

    <div class="container my-5">
        <h1 style="margin-top:130px;color:rgb(0, 111, 128);">Latest Jobs for Apply</h1>
        <table style="width: 100%;">

            <thead>

                <tr>

                    <th class="th">Sr.#</th>

                    <th class="th">Job Title</th>

                    <th class="th">Job Requirements</th>

                    <th class="th">Dead Line</th>

                    <th>Apply</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($placements as $placement)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $placement->job_title }}</td>

                        <td>{!! $placement->job_requirements !!}</td>

                        <td>{{ $placement->job_endDate }}</td>

                        <td><a href="{{url('alumnae/applyForm/'.$placement->job_id.'/placements_job')}}" class="btn btn-primary">Apply Now</a></td>
                           {{-- <td align="center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Apply With CV
                            </button> 
                            <br>
                            <span style="color: red;">@error('cv') {{$message}} @enderror</span>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apply For Placements</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <h5>Upload CV in PDF or Jpeg Format</h5>
                                                <form method="POST" action="{{route('alumnae.placement.apply')}}" enctype="multipart/form-data" class="pt-5">
                                                    @csrf
                                                    <input class="form-control" type="hidden" name="jobId" value="{{$placement->job_id}}">
                                                    <label for="cv">Browse Your CV</label>
                                                    <input class="form-control mb-3 mt-1" accept=".pdf" name="cv" id="cv" type="file">
                                                    <input class="form-control btn btn-primary my-3" type="submit">
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td> --}}

                    </tr>

                @endforeach

            </tbody>

        </table>



    </div>



    @include('front.layout.footer')

@endsection
