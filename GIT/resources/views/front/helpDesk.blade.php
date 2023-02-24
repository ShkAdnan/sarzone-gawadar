@extends('front.layout.app')





@section('content')



@include('front.layout.navBar')



   <!-- section -->

   <section class="main_full banner_section_top" style="margin-top: 100px !important;">

    <div class="container-fluid">

        <div class="row pt-4">

            <div class="col-10 mx-auto">

                <h1 style="text-align:center;" class="text-primary">Gawader Institute Of Technology(Help Desk)</h1>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row mt-5">

            <div class="full">

                <div class="slider_banner">

                    <img class="img-responsive" src="{{asset('front/images/help.png')}}" alt="#" />

                </div>

            </div>

        </div>

    </div>

</section>

<!-- end section -->

<div class="main mt-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <img src="{{asset('front/Form/images/bab4.jpg')}}" width="100%" style="border-radius: 20px; height: 800px;" alt="">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">

                <form method="POST" class="register-form pt-5" id="register-form">

                    <h3 style="text-align: center;" class="text-primary">WELLCOME</h3>

                    <div class="form-row">

                        <div class="form-group col-lg-6 col-sm-12">

                            <label for="name">Name :</label>

                            <input type="text" class="form-control" name="name" id="name" required/>

                        </div>

                        <div class="form-group col-lg-6 col-sm-12">

                            <label for="father_name">Father Name :</label>

                            <input type="text" class="form-control" name="father_name" id="father_name" required/>

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="pincode">E-Mail :</label>

                        <input type="email" class="form-control" name="pincode" id="pincode">

                    </div>

                    <div class="form-group">

                        <label for="email">Enter Your Text :</label>

                        <textarea name="" class="form-control" id="" cols="30" rows="7"></textarea>

                    </div>

                    <div class="form-submit">

                        <input type="reset" value="Reset All" class="btn btn-primary" name="reset" id="reset" />

                        <input type="submit" value="Submit Form" class="btn btn-primary" name="submit" id="submit" />

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- section -->


@include('front.layout.footer')



@endsection