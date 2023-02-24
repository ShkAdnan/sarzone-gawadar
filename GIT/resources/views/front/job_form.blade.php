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


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 mx-auto my-5">
            
            <h1 style="margin-top:130px;">Apply With Your CV Now</h1>
            <form method="POST" action="{{route('alumnae.placement.apply')}}" enctype="multipart/form-data" class="pt-5">
                @csrf
                <input class="form-control" type="hidden" name="jobId" value="{{$myId}}">
                <input class="form-control" type="hidden" name="jobType" value="{{$job_type}}">
                <input class="form-control mb-3 mt-1" accept=".pdf" name="cv" id="cv" type="file">
                <input class="form-control btn btn-primary my-3" type="submit">
            </form>
            
        </div>
    </div>
</div>
    
    @include('front.layout.footer')

@endsection
