@extends('front.layout.app')

<style>
    .bg-img {
        background-image: url("{{ asset('front/images/cover img.jpeg') }}");
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        height: 90vh;
        width: 100%;
        /* padding: 40vh 0px 50px 0px; */
    }

    .news {
        line-height: 0;
        text-align: center;
        border-radius: 10px;
        color: red;
    }



    .bg-gallery {
        height: 35vh;
        background-position: center;
        background-size: 100% 100%;
        border-radius: 10px;
        box-shadow: black 2px 2px 5px;
    }

    .gallery-details-overlay {
        width: 100%;
        height: 100%;
        background-color: rgba(83, 83, 255, 0.5);
        border-radius: 10px;
        color: white;
        display: none;
    }

    .bg-gallery:hover .gallery-details-overlay {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hide {
        display: none;
    }

    .text-style {
        color: #02606e;
    }

</style>

@section('content')
    @include('front.layout.navBar')


    <div class="container-fluid">

        <div class="row">
            <div class="col-12 bg-img">

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 text_align_center pt-4" style="text-align: justify">

                <div class="full heading_s1 text-center">

                    <h3 class="text-style">Welcome to Gwadar Institute of Technology</h3>

                </div>

                <div class="full">

                    <p class="large">Gwadar Institute of Technology (GIT) to be transformed into an
                        internationally recognized Engineering University as an ICON for professional
                        engineers to contribute in social economic development of Gwader focusing on
                        emerging technologies</p>

                </div>

            </div>
            <div class="col-md-8 col-sm-12">

                <!-- about section -->

                <section class="layout_padding section about_dottat">

                    <div class="container">

                        <div class="row">


                            <div class="col-lg-12 col-md-12">

                                <div class="margin_top_30  text_align_center">

                                    <img src="{{ asset('front/images/cover img.jpeg') }}" width="100%" alt="#" />

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            <section class="layout_padding section ">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-lg-12 text_align_center">

                                <div class="full heading_s1 text-center py-3">

                                    <h1 class="text-style">Our Success Stories</h1>
                                </div>
                            </div>
                            {{-- <h1>Pending</h1>    --}}
                            <div id="carouselExampleIndicators" class="carousel slide py-3" data-ride="carousel">
                                {{-- <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-info py-2 rounded-circle"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-info py-2 rounded-circle"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-info py-2 rounded-circle"></li>
                                </ol> --}}
                                <div class="carousel-inner">
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-12 ">
                                    @foreach($stories as $slider)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="slider-image text-center">
                                            <img src="{{ asset('upload/images/' . $slider->stories_images) }}" class="d-inline-block border text-center rounded" alt="{{ $slider->image }}" height="100%" width="600px">
                                        </div>
                                        <h4 class="mt-4 text-center"><span class="theme_color_text">{{$slider->name}}<br><small>{{$slider->category}}</small></h4>
                                            <p>{{$slider->discription}}</p>
                                    </div>
                                   
                                @endforeach
                                  
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            {{-- <div class="col-md-12" id="successS3" style="display: none;">

                                <div class="full text_align_center">

                                    <iframe width="100%" height="315" style="border-radius: 10px;"
                                        src="https://www.youtube.com/embed/s7LEWhECT7s" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                    <h4 class="mt-4"><span class="theme_color_text">Mr Asad Sewa
                                            Khan</span><br><small>Student</small></h4>

                                </div>

                                <div class="full text_align_center">

                                    <p>Mr. Asad Sewa Khan , resident of Dera Bugti Balochistan . He has recently
                                        done the Electrician Course at Gwadar institute of technology . Now after
                                        the course he aims to open the shop at his native Town where he can earn
                                        his bread and respect by his work as honourable citizen of pakistan.</p>

                                </div>

                            </div>

                            <div class="col-md-12" id="successS2" style="display: none;">

                                <div class="full text_align_center">

                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/2tYNv_W4Wvk"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                    <h4 class="mt-4"><span class="theme_color_text">Ms
                                            Fahmida</span><br><small>Student</small></h4>

                                </div>

                                <div class="full text_align_center">

                                    <p>Ms. Fahmida , resident of katti Door Gwadar, Balochistan . She has recently
                                        done the Computer application course at Gwadar institute of technology .
                                        Now after the course she aims to work on Free Lancing at her home town
                                        Gwadar where she can earn her bread and respect by her work.</p>

                                </div>

                            </div>
                            <div class="col-md-12" id="successS1">

                                <div class="full text_align_center">

                                    <picture>
                                        <img style="box-shadow: 2px 2px 10px rgb(5, 5, 5)"
                                            sizes="(max-width: 1280px) 100vw, 1280px"
                                            srcset="
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_200.jpg 200w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_313.jpg 313w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_412.jpg 412w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_516.jpg 516w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_617.jpg 617w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_719.jpg 719w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_888.jpg 888w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_1190.jpg 1190w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_1143.jpg 1143w,
                                             front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_1280.jpg 1280w"
                                            src=" front/images/posotion-img/success_stories_2021_hjmj5y_c_scale,w_1280.jpg"
                                            alt="front/images/Position image" class="position-img">
                                    </picture>

                                    <h4 class="mt-4"><span class="theme_color_text">
                                            Achievements</span><br><small><b>Results</b></small></h4>

                                </div>

                                <div class="full text_align_center" style="text-align:justify">

                                    <p>Bright Stars of Gwadar institute of technology has once again proved their talent and
                                        capabilities by securing first three positions in Balochistan Board of Intermediate
                                        and Secondary Education, Quetta in annual seesion 2020 .</p>

                                </div>

                            </div> --}}

                        </div>

                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="btn bg-primary text-white mx-1" id="success1"
                                style="cursor: pointer;border-radius:30px;">1</div>
                            <div class="btn bg-primary text-white mx-1" id="success2"
                                style="cursor: pointer;border-radius:30px;">2</div>
                            <div class="btn bg-primary text-white mx-1" id="success3"
                                style="cursor: pointer;border-radius:30px;">3</div>
                        </div>
                    </div> --}}
                </section>

               
            </div>

            <div class="col-lg-4 col-md-4 col-sm-10 mx-auto mt-2"
                style="box-shadow: 2px 2px 10px rgb(0, 65, 95);border-radius:10px;">


                <section>
                    <div class="container-fluid">
                        <div class="row text-center p-3">
                            <div class="col-12">

                                <h4 class="text-success pt-3"> <i class="fa fa-clock text-info"></i> Timings</h4>
                            </div>
                            <div class="col-3 my-1">
                                Monday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-2:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Tuesday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-2:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Wednesday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-2:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Thursday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-2:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Friday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-12:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Saturday
                            </div>
                            <div class="col-9 my-1">
                                8:30AM-2:30pm
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-3 my-1">
                                Sunday
                            </div>
                            <div class="col-9 my-1">
                                Holiday
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                        <div class="col-12">
                            <img style="border-radius: 10px;"
                                src="{{ asset('front/images/vocational faculty/Optimized-priciple image.jpeg') }}"
                                width="100%" alt="">
                            <h4>Principal Mr. Tariq Aziz</h4>

                            <p>

                                B.E Telecom -<br>National University of Science & Technology.

                            </p>
                        </div>
                    </div>

                </section>

                <!-- end section -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <h1 class="text-center mt-3 text-style">Gallery</h1>
            </div>
            @foreach ($albums as $album)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 my-2">
                    <a href="{{ route('gallery.album', [$album->album_id]) }}">
                        <div class="bg-gallery"
                            style="background-image: url({{ 'upload/GIT_albums/'.$album->album_coverImage }})">
                            <div class="gallery-details-overlay">
                                <h4 class="text-white">
                                    {{ $album->album_title }}
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <section class="layout_padding section">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center pt-2">

                    <h1 class="text-style">Our Courses</h1>

                </div>

            </div>

            <div class="row">



                <div class="col-md-4 text_align_center">

                    <div class="cours">

                        <img class="img-responsive" height="230px" width="250px" style="border-radius: 50%;"
                            src="{{ asset('front/images/DAE electrical Technology.jpeg') }}" alt="#" />

                    </div>

                    <h4 class="my-4">DAE Architecture</h4>

                    <p>
                        The three years diploma of Associate Engineer (DAE) in Architecture trains the students in
                        the formation of free hand drawings, designing and construction of domestic, commercial,
                        educational, religious, recreational and health related buildings.
                    </p>

                </div>

                <div class="col-md-4 text_align_center">

                    <div class="cours">

                        <img class="img-responsive" height="230px" width="250px" style="border-radius: 50%;"
                            src="{{ asset('front/images/DAE civil Technology.jpeg') }}" alt="#" />

                    </div>

                    <h4 class="my-4">DAE Civil</h4>

                    <p>
                        Our renowned Civil Engineering Technology program prepares you to be a dynamic participant
                        in the design and creation of our built environment where humans live. This ranges from the
                        metropolitan infrastructure of bridges, airports and <a class="read-more-show hide text-primary"
                            href="#">Read More</a> <span class="read-more-content"> harbors to the neighborhood design of
                            water supply systems,
                            sewage disposal, residential layout and areas such as water management, the resource
                            issue of the 21st century. <a class="read-more-hide hide text-primary" href="#">Read
                                Less</a></span>
                    </p>

                </div>



                <div class="col-md-4 text_align_center">

                    <div class="cours">

                        <img class="img-responsive" height="230px" width="250px" style="border-radius: 50%;"
                            src="{{ asset('front/images/DAE electronics Technology.jpeg') }}" alt="#" />

                    </div>

                    <h4 class="my-4">DAE Electronics</h4>

                    <p>
                        Electronics Technology diploma and degree programs provide students with an understanding of
                        electronic circuitry and electrical theory. Through a combination of lab work and classroom
                        lectures, students learn how to apply this knowledge <a class="read-more-show hide text-primary"
                            href="#">Read More</a> <span class="read-more-content"> to install, service and repair a wide
                            variety of electronic
                            equipment.<a class="read-more-hide hide text-primary" href="#">Read Less</a></span>
                    </p>

                </div>



            </div>

        </div>

    </section>

    <!-- end section -->


    @include('front.layout.footer')
    <script>
        // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
        $('.read-more-content').addClass('hide')
        $('.read-more-show, .read-more-hide').removeClass('hide')

        // Set up the toggle effect:
        $('.read-more-show').on('click', function(e) {
            $(this).next('.read-more-content').removeClass('hide');
            $(this).addClass('hide');
            e.preventDefault();
        });

        // Changes contributed by @diego-rzg
        $('.read-more-hide').on('click', function(e) {
            var p = $(this).parent('.read-more-content');
            p.addClass('hide');
            p.prev('.read-more-show').removeClass('hide'); // Hide only the preceding "Read More"
            e.preventDefault();
        });
        $("#success1").on("click", function() {
            $("#successS2").hide()
            $("#successS1").show()
            $("#successS3").hide()
        })
        $("#success2").on("click", function() {
            $("#successS2").show()
            $("#successS1").hide()
            $("#successS3").hide()
        })
        $("#success3").on("click", function() {
            $("#successS3").show()
            $("#successS1").hide()
            $("#successS2").hide()

        })
    </script>
@endsection
