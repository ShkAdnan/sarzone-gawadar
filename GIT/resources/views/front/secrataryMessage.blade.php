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

    .secrety-img {
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

    <!-- section -->
    {{-- <img src="{{ asset('front/images/cover img.jpeg') }}" style="height: 70vh;" width="100%" alt=""> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="bg-img p-0 pt-3 w-100"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 text-center">
                <img class="secrety-img" src="{{ asset('front/images/secratary colleges.jpeg') }}" alt="">
            </div>
            <div class="col-lg-8">
                <h1 class="my-3">Message from Mr. Muhammad Hashim Ghilzai</h1>
                <h3>Secretary Colleges, Higher and Technical Education, Balochistan</h3>
            </div>
            <div class="col-lg-12 my-5" style="text-align:justify;">
                <p>
                    Gwadar institute of technology has been established to provide quality technical education to the youth
                    of Makran and Gwadar to enable them to contribute towards the development of the area and benefit from
                    opportunities being provided by upcoming Gwadar Deep port and related industrial sequel to CPEC
                </p>
                <p>
                    Academic programmes play an important role in the professional development of the students of an
                    institute. Similarly, extracurricular activities are essential to polish their true potential, team
                    spirit, develop leadership traits and provide means of social integration through the ability to express
                    oneself orally and physically. The new initiative of GIT with regard to launching an official college
                    website is a welcome step, which will play an important role and will provide a medium of communication
                    to its students, faculty and public in large. I feel great pleasure to convey my message of deep
                    appreciation at this occasion.
                </p>
                <p>
                    I would personally like to appreciate all the hard work and diligent efforts that have put into for
                    attaining such goals and wish all the best to the institution, management, faculty and students. May
                    Almighty Allah be with you (AMEEN).
                </p>
            </div> 
        </div>
    </div>
    <!-- end section -->



    <!-- footer -->

    @include('front.layout.footer')
@endsection
