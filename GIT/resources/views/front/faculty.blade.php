@extends('front.layout.app')

@section('content')

<style>

  
     .img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 2px 2px 5px #17A2B8;

    }
    .text-style{
     color: #02606e;
 }
</style>

    @include('front.layout.navBar')

    <div class="container" style="margin-top: 150px;">

        <h1 class="text-style">DAE faculty</h1>

        <div class="row jumbotron">



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/vocational faculty/Optimized-priciple image.jpeg')}}" alt="">
            
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Principle Mr. Tariq Aziz</h4>

                <p>

                    B.E Telecom - NUST

                </p>

            </div>

            {{-- 1st --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-asif archiitrecture.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Asif Hameed</h4>

                <p>

                    B.A Architecture - BUITEMS University Quetta

                </p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-ejaz architecture.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Ejaz Ahmed</h4>

                <p>

                    B.A Architecture - Mehran University Jamshoro

                </p>

            </div>

            

            {{-- 2nd --}}

            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-hamid phsics.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Hamid Ali</h4>

                <p>

                    M.Sc Physics - Dawood University Karachi 

                </p>

            </div>



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-naeem civil eng.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Naeem Khan</h4>

                <p>

                    B.E Civil - UET Lahore

                </p>

            </div>



            {{-- 3rd --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-noor electronics.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Noor Yaseen</h4>

                <p>

                    MS Electronics - NED University karachi

                </p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-shahdad chemistry.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Shahzad</h4>

                <p>

                    M.Phill Agriculture - Agriculture University Jamshoro

                </p>

            </div>



            {{-- 4th --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-shakir electronics.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Shakir Hussain</h4>

                <p>

                    B.E Electronics - Dawood University Karachi

                </p>

            </div>



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-shoib islamyat.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Suhaib Ali</h4>

                <p>

                    MA Islamiyat - University of Balochistan

                </p>

            </div>

            

            {{-- 5th --}}



            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-DSC_2299.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Muhammad Baksh</h4>

                <p>

                    MA English - University of Balochistan Quetta

                </p>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3">

                 <img class="img" src="{{asset('front/images/Faculty/Optimized-DSC_2295.JPG')}}" alt="">

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 my-3 my-auto p-3">

                <h4>Mr Sameer</h4>

                <p>

                    M.Sc Physics - University of Karachip

                </p>

            </div>

            

        </div>

    </div>


    @include('front.layout.footer')

@endsection