@extends('admin.layout.app')



@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 my-5">

                @foreach ($programs as $program)

                    <a href="{{ route('online_applications.view',$program->program_id) }}"> <h4> {{$program->program_name}} ({{$countApplications[$program->program_name]}}) </h4> </a>
                
                @endforeach

            </div>

        </div>

    </div>



@endsection

