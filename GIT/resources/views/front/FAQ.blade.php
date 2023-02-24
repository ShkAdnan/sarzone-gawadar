@extends('front.layout.app')





@section('content')



@include('front.layout.navBar')

<style>
    .text-style{
     color: #02606e;
 }
</style>

   <!-- section -->

   <section class="main_full banner_section_top">

    <div class="container-fluid">

        <div class="row">

            <div class="full">

                <div class="slider_banner">

                    <img class="img-responsive" src="{{asset('front/images/navimg.jpg')}}" height="100px" alt="#" id="carerenav">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- end section -->

<!-- Section -->

<div class="container p-0 mt-5">

    <h1 id="careerheading" class="text-style"><b>Frequently Asked Questions</b></h1>

</div>

<!-- Section -->

<div class="container py-5 mb-5">
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How can I get the admission forms of Gwadar institute of technology ?
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                Ans. Free Admissions forms are available at GIT Gwadar, DC office Gwadar ,
                DC office Turbat , AC office Pasni , AC office Jewani , MVTC Surbandar, Noor
                Communications Gwadar, Askari bank Gwadar and Polytechnic institute
                panjgoor . Now Students can also apply for the online admission . Student Can also download the 
                admission form from the GIT website 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Is Gwadar institute of technology is private or government institution ?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                Ans. Gwadar institute of technology is the first modern technical institute of
                Gwadar, working under the Provincial Govt of Balochistan and is providing
                extremely affordable standard class education to aspiring students of the
                Balochistan .
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Gwadar institute of technology is affiliated with which board ? 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                Ans. Gwadar institute of technology is affiliated with BBISE Quetta. 
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Is there any age limit for the admission in DAE programmes .
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Ans. Your age limit should not be more than 21 years till 1st October in that
                current year . 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Is there any hostel facility available there ? 
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Ans. Yes Gwadar institute of technology offers free hostel facility to its out
                stationed students .
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Is there any contact no in case of any query related to admissions ? 
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Ans . Yes Gwadar institute of technology has contact no on which you can ask
                your queries about admissions or anything else regarding Gwadar institute of
                technology .Contact no is Mentioned on website please . 
                
              </div>
            </div>
          </div>
      </div>
</div>

<!-- end-Section -->



@include('front.layout.footer')



@endsection