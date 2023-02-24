<style>
  .nav-link{
    position: relative;
    bottom:0px;
    left: 0px;
    border-radius: 10px;
    margin: 10px;
  }
  .nav-item:hover .nav-link{
    bottom:2px;
    left: 2px;
    box-shadow: 3px 3px 5px black;
    transition: bottom 0.5s, left 0.5s;
  }
</style>
<header class="header position-fixed" style="background-image: linear-gradient(rgba(83, 83, 255, 0.8),rgba(54,171,226,0.5));">

    <div class="header_top_section">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index-2.html">
                <img src="{{ asset('front/images/4781.png') }}" height="100px" width="150px" alt="#" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <img src="{{ asset('front/images/icons8-small-icons-30.png') }}" /> --}}
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <span class="text-danger"><i class="fas fa-bars text-info"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="z-index: 100;">
              <ul class="navbar-nav text-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admissions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="apply.html" target="blank">Apply
                            Online</a>
                        <!-- <a class="dropdown-item" href="#">Alumni Panel</a> -->
                    </div>
                </li>
        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about.html"
                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="aboutintro.html">Introduction</a>
                        <a class="dropdown-item" href="#">Faculty</a>
                    </div>
                </li>
           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Differnte</a>
                        <a class="dropdown-item" href="#">Fee Structure</a>
                    </div>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Placement
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="careres.html">Carrers</a>
                        <a class="dropdown-item" href="careres.html">Current Jobs</a>
                    </div>
                </li>
           
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alumni
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Graduate Department</a>
                        <a class="dropdown-item" href="#">Apply For Alumni</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="e-library.html">E-Library</a>
                        <a class="dropdown-item" href="helpdesk.html" target="_blank">Help
                            Desk</a>
                        <a class="dropdown-item" href="faq.html" target="_blank">FAQ</a>
                        <a class="dropdown-item" href="downloads.html">Downloads</a>
                    </div>
                </li>
            </ul>
            </div>
        </nav>
    </div>
<script>
   $(".navbar-toggler").click(function(){
        $(".header").css({
          "background-color":"rgba(54,171,226,0.8)"
        })
    })
</script>
</header>
