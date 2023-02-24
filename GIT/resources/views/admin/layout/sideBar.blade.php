<div id="layoutSidenav_nav">

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

        <div class="sb-sidenav-menu">

            <div class="nav">

                <a class="nav-link my-5" href="{{route('dashboard')}}">

                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>

                    Dashboard

                </a>


                <a class="nav-link collapsed my-1" href="{{route('online_applications')}}">

                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>

                    Online Applications

                </a>

                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#graduates" aria-expanded="false" aria-controls="collapseLayouts">

                    <div class="sb-nav-link-icon"><i class="fas fa-camera-retro"></i></div>

                    Gallery

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse" id="graduates" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('album')}}">Add Album</a>

                        <a class="nav-link" href="{{route('album.view')}}">View Albums</a>

                    </nav>

                </div>

                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">

                    <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>

                    Graduate Directory

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('graduates')}}">Add graduate</a>

                        <a class="nav-link" href="{{route('graduate.view')}}">View graduates</a>

                    </nav>

                </div>

                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#placements" aria-expanded="false" aria-controls="placements">

                    <div class="sb-nav-link-icon"><i class="fas fa-street-view"></i></div>

                    Placement

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse" id="placements" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('placement')}}">Add job</a>

                        <a class="nav-link" href="{{route('placement.view')}}">View jobs</a>

                        <a class="nav-link" href="{{route('placement.closed')}}">Closed jobs</a>

                    </nav>

                </div>

                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#career" aria-expanded="false" aria-controls="career">

                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>

                    Careers

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse" id="career" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('career')}}">Add job</a>

                        <a class="nav-link" href="{{route('career.view')}}">View jobs</a>

                        <a class="nav-link" href="{{route('career.closed')}}">Closed jobs</a>

                    </nav>

                </div>

                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#admission" aria-expanded="false" aria-controls="admission">

                    <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>

                    Admissions

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse" id="admission" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('admission')}}">Add Program</a>

                        <a class="nav-link" href="{{route('admission.view')}}">View Programs</a>

                        <a class="nav-link" href="{{route('admission.onlineAdmission')}}">Online Admission</a>

                        {{-- <a class="nav-link" href="{{route('admission.closed')}}">View Forms</a> --}}

                    </nav>

                </div>
                <a class="nav-link collapsed my-1" href="#" data-toggle="collapse" data-target="#Notices" aria-expanded="false" aria-controls="Notices">

                    <div class="sb-nav-link-icon"><i class="fas fa-flag"></i></div>

                    Notices

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                </a>

                <div class="collapse pb-5" id="Notices" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                    <nav class="sb-sidenav-menu-nested nav">

                        <a class="nav-link" href="{{route('notice')}}">Add Notice</a>

                        <a class="nav-link" href="{{route('notice.view')}}">View Notices</a>

                    </nav>

                </div>


            </div>

        </div>


    </nav>

</div>