@extends('front.layout.app')

<style>

    table,

    td,

    th {

        border: 1px solid black;

    }



    table td,

    th {

        padding: 10px;

    }



    header a {

        color: white !important;

    }



    header {

        z-index: 1;

        background-image: linear-gradient(rgba(83, 83, 255, 0.8), rgba(0, 0, 0, 0.7)) !important;

    }



    label {

        margin: 20px 0px;

    }



    input:focus {

        border: none;

    }


    input::-webkit-outer-spin-button,

input::-webkit-inner-spin-button {

    -webkit-appearance: none;

    margin: 0;

}
.princ-img {
        width: 70%;
        height: auto;
        border-radius: 10px;
        box-shadow: 2px 2px 5px #17A2B8;

    }

    .bg-img {
        background-image: url("{{ asset('front/images/cover img.jpeg') }}");
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        height: 90vh;
        width: 100%;

    }

    @media (max-width: 502px) {
        .bg-img {
            background-position: top center;
            height: 60vh;
            width: 100%;

        }

    }
</style>

@section('content')



    @include('front.layout.navBar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="bg-img p-0 pt-3 w-100"></div>
            </div>
        </div>
    </div>
    <!-- section -->
    {{-- <img src="{{ asset('front/images/cover img.jpeg') }}" style="height: 70vh;" width="100%" alt=""> --}}

    <div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 text-center">
            <img src="{{asset('front/images/vocational faculty/Optimized-priciple image.jpeg')}}" class="princ-img" alt="">
        </div>
        <div class="col-lg-8">
            <h1 class="my-3">Message from Mr. Tariq Aziz </h1>
            <h3>Principal Gwadar Institute of Technology</h3>
        </div>
        <div class="col-lg-12 my-5" style="text-align:justify;"> 
            <p>
                Technical education is one of the essential elements in our society that provides educational training through various means. As a result of innovations and developments of technology these days, significance of technical education is increasing manifold. That is the reason why most of the people these days take up technical education courses and trainings in order to have a more lucrative career and future.
            </p>
            <p>
                Gwadar Institute of Technology has a good reputation in the field of technical education and it strives hard in order to cultivate a fraternal spirit among teachers, technicians, practitioners and industrialists.
            </p>
            <p>
                Launching of College Website is a milestone in the history of GIT. It is really hearting to see our students and faculty contributing towards the launching of Website. GIT is committed to skill development of Baloch youth both in curricular and extracurricular domains.
            </p>
        </div>
    </div>
    </div>
    <!-- end section -->
                
    

    <!-- footer -->

    @include('front.layout.footer')

@endsection

