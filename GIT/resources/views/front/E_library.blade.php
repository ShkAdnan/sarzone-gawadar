@extends('front.layout.app')





@section('content')

    <style>

        #carerenav {

            height: 130px;

        }



        #careerheading {

            text-align: center;

            font-size: 40px;

            font-family: sans-serif;

            margin-top: 50px;

            margin-left: 20px;

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



        .ndlast {

            text-align: center;

        }



        .icons {

            color: white;

            background-color: rgba(83, 83, 255, 0.8);

            font-size: 60px;

            padding: 30px;

            border-radius: 50%;

        }



    </style>



    @include('front.layout.navBar')



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <ol class="carousel-indicators">

                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

            </ol>

            <div class="carousel-item active mysetting">

                <img class="d-block w-100" height="500px" src="{{asset('front/salman/L-images/library1.jpg')}}" alt="First slide">

            </div>

            <div class="carousel-item mysetting">

                <img class="d-block w-100" height="500px" src="{{asset('front/salman/L-images/library2.jpg')}}" alt="Second slide">

            </div>

            <div class="carousel-item mysetting">

                <img class="d-block w-100" height="500px" src="{{asset('front/salman/L-images/library3.jpg')}}" alt="Third slide">

            </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
    
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    
            </ol>
    
        </div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-5">
                <h2>WELLCOME TO OUR LIBRARY</h2>
            </div>
        </div>
    </div>
    
{{-- 
    <div class="container-fluid d-flex mt-5">

        <div class="row">

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div>

                    <div class="card border-0 w-100">

                        <img src="{{asset('front/salman/L-images/book8.jpg')}}" alt="...">

                        <div class="card-body">

                            <p class="card-text">THE ROAD</p>

                            <p>BY CORMAC MCCARTHY</p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book2.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">INTERPRETER OF MALADIE

                        </p>

                        <p>BY JHUMPA LAHIRI</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book5.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">MIDDLESEX: A NOVEL</p>

                        <p>BY JEFFREY EUGENIDES</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book6.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">GILEAD: A NOVEL</p>

                        <p>BY MARILYNNE ROBINSON</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book5.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">KAVALIER & CLAY</p>

                        <p>BY MICHAEL CHABON</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book6.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">A CANTICLE FOR LEIBOWITZ</p>

                        <p>BY WALTER M. MILLER JR.</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book7.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">TREE OF SMOKE: A NOVEL</p>

                        <p>BY DENIS JOHNSON</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-4 mx-auto col-sm-6">

                <div class="card border-0 w-100">

                    <img src="{{asset('front/salman/L-images/book8.jpg')}}" alt="...">

                    <div class="card-body">

                        <p class="card-text">THE CORRECTIONS</p>

                        <p>BY JONATHAN FRANZEN</p>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="containter">

        <div class="container-fluid pt-5">

            <div class="row">

                <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">

                    <p style="font-size: 30px;" class="ndlast">Innovations</p>

                    <div>

                        <i class="fas fa-lightbulb-on icons"></i>

                    </div>

                    <h6 class="std mt-3">MES CUML DIA SED INENIET INGER LOT ALIIQS DOLORE</h6>

                    <p class="para text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod quis nostrud

                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet

                        consectetur adipisicing elit. Velit neque beatae

                        qui quae, distinctio explicabo expedita in! Ipsam molestias soluta praesentium expedita adipisci?

                        Explicabo sequi corrupti </p>

                    <button class="btn btn-primary my-4 btn-sm-block">READ MORE</button>

                </div>

                <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">

                    <div>

                        <p style="font-size: 30px;" class="ndlast">Join the Library</p>

                        <div>

                            <i class="fa fa-wrench icons" aria-hidden="true"></i>

                        </div>

                        <h6 class="std mt-3">MES CUML DIA SED INENIET INGER LOT ALIIQS DOLORE</h6>

                        <p class="para text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod quis

                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor

                            sit amet consectetur, adipisicing elit. Aspernatur voluptates

                            ipsa, dolorum tempore consectetur quae numquam facere, error, amet fugit maxime est quas in

                            voluptate sed quis nulla dolores assumenda? </p>

                        <button class="btn btn-primary my-4 btn-sm-block">READ MORE</button>

                    </div>

                </div>

                <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">

                    <div>

                        <p style="font-size: 30px;" class="ndlast">Help</p>

                        <div>

                            <i class="fa fa-search icons" aria-hidden="true"></i>

                        </div>

                        <h6 class="std mt-3">MES CUML DIA SED INENIET INGER LOT ALIIQS DOLORE</h6>

                        <p class="para text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod quis

                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor

                            sit amet consectetur adipisicing elit. Quo facilis ducimus

                            magni voluptas id quidem vitae, optio excepturi totam nisi doloremque, aliquam iure quasi

                            exercitationem iusto fuga veritatis aliquid eum? </p>

                        <button class="btn btn-primary my-4 btn-sm-block">READ MORE</button>

                    </div>

                </div>

                <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">

                    <div>

                        <div>

                            <p style="font-size: 30px;" class="ndlast">Ask a Librarian</p>

                            <i class="fa fa-comment icons" aria-hidden="true"></i>

                            <h6 class="std mt-3">MES CUML DIA SED INENIET INGER LOT ALIIQS DOLORE</h6>

                            <p class="para text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod quis

                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum

                                dolor, sit amet consectetur adipisicing elit. Voluptate,

                                sunt. Natus libero voluptate eligendi ipsum quos harum necessitatibus tempore optio quaerat,

                                excepturi sed voluptates, corporis eaque. </p>

                            <button class="btn btn-primary my-4 btn-sm-block">READ MORE</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
 --}}


    @include('front.layout.footer')

@endsection

