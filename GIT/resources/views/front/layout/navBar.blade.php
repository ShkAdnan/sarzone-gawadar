<style>
    .header .dropdown-item {

        text-transform: capitalize;

        font-size: 14px;

        padding: 10px 1rem;

        background-color: rgba(115, 207, 231, 0.8);

        font-weight: 300;

        border-radius: 10px;

        margin: 10px auto;

        /* width: 100%; */

    }

    .navbar-toggler-icon {
        background-color: black;
        color: #3e8e41 !important;
        /* color: red; */
    }

    .dropbtn {
        /* background-color: #04AA6D; */
        color: #FFFFFF;
        /* padding: 16px; */
        font-size: 16px;
        /* border: none; */
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: -10px;
        background-color: #ffffff;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 100;
        width: 100%;
        padding: 0;
        margin: 0;

    }

    .dropdown-content a {

        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    .nav-link text-info {

        position: relative;

        bottom: 0px;

        left: 0px;

        border-radius: 10px;

        margin: 10px;
        color: rgb(0, 105, 146)
    }
    .nav-item:hover .nav-link text-info {

        bottom: 2px;

        left: 2px;

        box-shadow: 3px 3px 5px black;

        transition: bottom 0.5s, left 0.5s;

    }

    .dropdown .dropdown-menu {


        -webkit-transition: all 0.5s;

        -moz-transition: all 0.5s;

        -ms-transition: all 0.5s;

        -o-transition: all 0.5s;

        transition: all 0.5s;



        max-height: 0;

        display: block;

        overflow: hidden;

        opacity: 0;
        background-color: white;
        padding: 10px;
        z-index: 10;

    }



    .dropdown.show .dropdown-menu {
        /* For Bootstrap 4, use .dropdown.show instead of .dropdown.open */

        max-height: 100vh;

        opacity: 1;
        /* background-color: white; */

    }

    ul {

        list-style-type: none;

    }

</style>

<header class="header position-fixed bg-white p-0 m-0">
    <div class="w-100 bg-info">
        <div class="container-fluid p-0 m-0">
            <div class="row">

                <div class="col-11">
                    <div class="news">
                        <div>
                            <marquee behavior="" direction="left">
                                <div class="notice p-2">
                                    @foreach ($notices as $notice)
                                        <span class="text-white my-auto p-2" style="font-size: 15px">
                                            {{ $loop->iteration . ' | ' . $notice->notice_title }}
                                        </span>
                                    @endforeach
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid p-0 m-0">
        <div class="header_top_section container-fluid bg-white">
            <nav class="navbar navbar-expand-lg navbar-dark px-0 my-auto">
                <div class="nav-logo">
                    <a class="navbar-brand" href="/" style="z-index: 100">
                        <img src="{{ asset('front/images/logo2.png') }}" width="100%" alt="#" />
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="text-danger"><i class="fas fa-bars text-info"></i></span>
                    {{-- <img src="{{ asset('front/images/icons8-small-icons-30.png') }}" /> --}}
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="z-index: 100;">

                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown px-2">


                            <a class="nav-link text-info dropdown-toggle" href="" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Admissions

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('onlineAdmission.index') }}">Apply Online</a>
                                <a class="dropdown-item" href="{{ asset('front/images/GIT prospectus.pdf') }}"
                                    target="_blank">Download Prospectus</a>
                                <a class="dropdown-item" href="{{ asset('front/images/admission form Apr 01, 2021.pdf') }}"
                                    target="_blank">Download Admission <br> Form</a>
                                <a class="dropdown-item" href="{{ asset('front/images/Vocational Course Admission Form.pdf') }}"
                                target="_blank">Download Vocational Courses<br>Admission Form</a>

                            </div>

                        </li>



                        <li class="nav-item dropdown px-2">

                            <a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                About Us

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('about.index') }}">Introduction</a>

                                <a class="dropdown-item" href="{{ route('about.secrataryMessage') }}">Secretary Message</a>

                                <a class="dropdown-item" href="{{ route('about.directorMessage') }}">Director Message</a>

                                <a class="dropdown-item" href="{{ route('about.principleMessage') }}">Principal Message</a>

                                <a class="dropdown-item" href="{{ route('about.faculty') }}">DAE Faculty</a>

                                <a class="dropdown-item" href="{{ route('about.vocationalFaculty') }}">Vocational Faculty</a>

                            </div>

                        </li>



                        <li class="nav-item dropdown px-2">

                            <a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Programs

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('program.offering') }}">Programs Offered</a>

                                <a class="dropdown-item" href="{{ route('program.fee_structure') }}">Fee Structure</a>

                            </div>

                        </li>



                        <li class="nav-item dropdown px-2">

                            <a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Careers

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('careers.front') }}">Join Us</a>

                            </div>

                        </li>


                        <li class="nav-item dropdown px-2">

                            <a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Alumni

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('alumnae') }}">Graduate Directory</a>
                                <a class="dropdown-item" href="{{ route('alumnae.verify') }}">Alumnae Verification</a>
                                <a class="dropdown-item" href="{{ route('alumnae.placementsTable') }}">Placements</a>

                            </div>

                        </li>

                        <li class="nav-item dropdown px-2">

                            <a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Resources

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('about.Elibrary') }}">E-Library</a>
                                {{-- <a class="dropdown-item" href="{{route('about.helpDesk')}}">Help

                                  Desk</a> --}}

                                <a class="dropdown-item" href="{{ route('about.FAQ') }}">FAQ</a>

                            </div>

                        </li>

                    </ul>

                </div>
                {{-- <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">

                            <a class="nav-link text-info text-info" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <div class="dropdown px-2">
                                <a href="" class="nav-link text-info text-info">Admissions</a>
                                <div class="dropdown-content p-2">
                                    <a class="dropdown-item" href="{{ route('onlineAdmission.index') }}">Apply Online</a>
                                    <a class="dropdown-item" href="{{ asset('front/images/GIT prospectus.pdf') }}"
                                        target="_blank">Download Prospectus</a>
                                    <a class="dropdown-item"
                                        href="{{ asset('front/images/admission form Apr 01, 2021.pdf') }}"
                                        target="_blank">Download Admission <br> Form</a>
                                </div>
                            </div>

                        </li>



                        <li class="nav-item dropdown px-2">
                            <div class="dropdown px-2">
                                <a href="" class="nav-link text-info text-info">About Us</a>

                                <div class="dropdown-content p-2">

                                    <a class="dropdown-item" href="{{ route('about.index') }}">Introduction</a>

                                    <a class="dropdown-item" href="{{ route('about.secrataryMessage') }}">Secretary
                                        Message</a>

                                    <a class="dropdown-item" href="{{ route('about.directorMessage') }}">Director
                                        Message</a>

                                    <a class="dropdown-item" href="{{ route('about.principleMessage') }}">Principal
                                        Message</a>

                                    <a class="dropdown-item" href="{{ route('about.faculty') }}">DAE Faculty</a>

                                    <a class="dropdown-item" href="{{ route('about.vocationalFaculty') }}">Vocational
                                        Faculty</a>
                                </div>
                            </div>


                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('about.index') }}">Introduction</a>

                                <a class="dropdown-item" href="{{ route('about.secrataryMessage') }}">Secretary
                                    Message</a>

                                <a class="dropdown-item" href="{{ route('about.directorMessage') }}">Director
                                    Message</a>

                                <a class="dropdown-item" href="{{ route('about.principleMessage') }}">Principal
                                    Message</a>

                                <a class="dropdown-item" href="{{ route('about.faculty') }}">DAE Faculty</a>

                                <a class="dropdown-item" href="{{ route('about.vocationalFaculty') }}">Vocational
                                    Faculty</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <div class="dropdown px-2">
                                <a href="{{ route('careers.front') }}" class="nav-link text-info text-info">Careers</a>

                            </div>
                        </li>
                        <li class="nav-item  px-2">
                            <div class="dropdown">
                                <a href="" class="nav-link text-info text-info">Programs</a>
                                <div class="dropdown-content p-2">
                                    <a class="dropdown-item" href="{{ route('program.offering') }}">Programs Offered</a>
                                    <a class="dropdown-item" href="{{ asset('program.fee_structure') }}"
                                        target="_blank">Fee Structure</a>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item">
                            <div class="dropdown px-2">
                                <a href="" class="nav-link text-info text-info">Alumni</a>

                                <div class="dropdown-content p-2">
                                    <a class="dropdown-item" href="{{ route('alumnae') }}">Graduate Directory</a>
                                    <a class="dropdown-item" href="{{ route('alumnae.verify') }}">Alumnae
                                        Verification</a>
                                    <a class="dropdown-item"
                                        href="{{ route('alumnae.placementsTable') }}">Placements</a>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown px-2">
                            <div class="dropdown px-2">
                                <a href="" class="nav-link text-info text-info">Resources</a>

                                <div class="dropdown-content p-2">
                                    <a class="dropdown-item" href="{{ route('about.Elibrary') }}"
                                        target="_blank">E-Library</a>
                                    <a class="dropdown-item" href="{{ route('about.FAQ') }}">FAQ</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div> --}}

            </nav>

        </div>
    </div>

    <script>
        $(".navbar-toggler").click(function() {

            $(".header").css({

                "background-color": "rgba(54,171,226,0.8)"

            })

        })
    </script>

</header>
