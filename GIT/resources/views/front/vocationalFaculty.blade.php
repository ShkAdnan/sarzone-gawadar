@extends('front.layout.app')

@section('content')

<style>

    img{

        border-radius: 10px;
        box-shadow: 2px 2px 5px #02606e; 

    }
    .text-style{
     color: #02606e;
 }
</style>

    @include('front.layout.navBar')

    <div class="container" style="margin-top: 200px;">

        <h1 class="text-style">Vocational Faculty</h1>

        <div class="row jumbotron">



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-priciple image.jpeg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Principle Mr. Tariq Aziz</h4>

                <p>

                    B.E Telecom - NUST

                </p>

            </div>

            {{-- 1st --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-jabbar.jpg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Abdul Jabbar</h4>

                <p>

                    Computer Instructor

                </p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-Jahanzeb.JPG')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Jahanzeb</h4>

                <p>

                    Carpenter Instructor

                </p>

            </div>

            

            {{-- 2nd --}}

            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-munawar.jpg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Munawir Ali</h4>

                <p>

                    Vehicle Driving Instructor

                </p>

            </div>



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-shah fahad.JPG')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Shah Fahad</h4>

                <p>

                    Carpenter Instructor

                </p>

            </div>



            {{-- 3rd --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-shahbaz.jpg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Shahbaz Ahmed</h4>

                <p>

                    Auto Mechanic Instructor

                </p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-WhatsApp Image 2021-04-12 at 2.55.53 PM.jpeg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Zulfiqar</h4>

                <p>

                    Auto Mechanic Instructor

                </p>

            </div>



            {{-- 4th --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-WhatsApp Image 2021-04-12 at 2.55.54 PM.jpeg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Rahib Ali</h4>

                <p>

                    Welding Instructor

                </p>

            </div>



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-WhatsApp Image 2021-04-12 at 2.55.55 PM.jpeg')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Latif Ullah</h4>

                <p>

                    Electrician Instructor

                </p>

            </div>

            

            {{-- 5th --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-4">

                <img src="{{asset('front/images/vocational faculty/Optimized-younis.JPG')}}" width="100%" height="280px" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-4 p-5">

                <h4>Mr Muhammad Younis</h4>

                <p>

                    Electrician Instructor

                </p>

            </div>

            

        </div>

    </div>



    @include('front.layout.footer')

@endsection

