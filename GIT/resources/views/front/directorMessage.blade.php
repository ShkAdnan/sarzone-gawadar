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
.direct-img {
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

    <div class="row mt-5" >
        <div class="col-lg-4 text-center">
            <img src="{{asset('front/images/director technical education.jpeg')}}" class="direct-img" alt="">
        </div>
        <div class="col-lg-8">
            <h1 class="my-3">Messagae from Professor Engineer Muhammad Rafiq Ghilzai</h1>
            <h3>Director Technical Education, Balochistan</h3>
        </div>
        <div class="col-lg-12 my-5" style="text-align:justify;">
            <p>
                Gwadar Institute of Technology (GIT) has set itself on the right path from its very beginning and earned a very positive reputation. Youth in Makran is highly capable; Gwadar Institute of Technology is rightly poised to polish their abilities and channelize their energies to seek practical knowledge in the emerging fields of technology. The standard of teaching and learning process at GIT is compatible with any quality institute of the country despite inadequate faculty, administrative difficulties and being quite distant from the city.
            </p>
            <p>
                Students in GIT are being groomed in a wholesome manner as sound professionals through balanced academic and extracurricular activities. In this context, it is heartening to know that Institute is launching its college website this year. I congratulate Principal, faculty and students on its successful event. This website will provides a platform for the students and faculty to express themselves by sharing knowledge and ideas.
            </p>
            <p>
                My prayers and best wish for the administration, faculty and students of GIT. May Allah bless you all (Ameen).
            </p>
        </div>
    </div>
    </div>
    <!-- end section -->


    <!-- footer -->

    @include('front.layout.footer')

@endsection

