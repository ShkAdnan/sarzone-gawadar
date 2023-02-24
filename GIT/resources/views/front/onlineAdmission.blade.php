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

        background-image:WHITE;

    }



    label {

        margin: 20px 0px;

    }



    input:focus {

        border: none;

    }



    .bg-img {
        background-image: url("{{ asset('front/images/cover img.jpeg') }}");
        background-size: cover;
        background-position:top center;
        background-repeat: no-repeat;
        height:90vh;
        width: 100%;

    }

    input::-webkit-outer-spin-button,

    input::-webkit-inner-spin-button {

        -webkit-appearance: none;

        margin: 0;

    }
    .text-style{
     color: #02606e;
 }
    @media (max-width: 502px) {
            .bg-img {
        
             background-position: top center;
         
             height: 60vh;
             width: 100%;
             /* padding: 40vh 0px 50px 0px; */
         }
         }

</style>

@section('content')

@include('front.layout.navBar')

    

    <!-- section -->

    <section class="main_full banner_section_top">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 bg-img text-center">


                </div>

            </div>

        </div>

    </section>

    <!-- end section -->

    {{-- Errors And Message --}}



    <div class="container">
        <div class="row my-5" style="display: {{ $errors->any() || session()->has('No') ? 'block' : 'none' }}">
            <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
                @if (session()->has('No'))
                    <div class="alert alert-{{ session()->get('status') }}" style="font-size: 20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>
                        Your Application Number is {{ session()->get('No') }} <br>

                        Please click on the following link and Dowload your admission form Copy <br>
                        <a href="{{ asset('storage/upload/students/' . 'Student' . session()->get('No') . '.pdf') }}"
                            target="_blank"
                            class="alert-link text-primary"><u>{{ 'www.gwadarinstituteoftechnology.com/admissionForms/Student' . session()->get('No') }}</u></a>

                    </div>

                @endif
                @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show">

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li style="margin: 5px 0px">{{ $error }}</li>

                            @endforeach

                        </ul>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                @endif
            </div>
        </div>
    </div>




    {{-- Errors And Message End --}}


    <div class="container-fluid"
        style="font-family: 'Montserrat';font-style: bold!important;font-weight: 700; margin-top: 50px;display: {{ session()->has('No') ? 'none' : 'block' }};">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="py-2">
                        Apply Now
                    </h1>

                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 mx-auto mb-3">

                    @if ($programs != '[]')
                        <marquee scrollamount="12" width="100%" direction="left" height="40px">

                            <h4 style="color: #5459f8; background-color:white;">Admissions Are Open</h4>

                        </marquee>
                    @else
                        <marquee scrollamount="12" width="100%" direction="left" height="40px">

                            <h4 style="color: rgb(247, 3, 3); background-color:white;">Admissions Are Closed</h4>

                        </marquee>
                    @endif

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12" style="padding: 40px;">

                <h1 style="text-align: center; margin-bottom: 50px; margin-top: -50px;font-size: 40px;">

                    <b class="text-style">STUDENT REGISTRATION FORM</b>

                </h1>

                <h4>a) Applicant's Particulars:</h4>

                <form class="needs-validation" action="{{ route('onlineAdmission.store') }}" method="POST"
                    enctype="multipart/form-data" id="mainformtag">

                    @csrf

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">First Name</label>

                            <input type="text" value="{{ old('firstName') }}" name="firstName" class="form-control"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Last Name</label>

                            <input type="text" value="{{ old('lastName') }}" name="lastName" class="form-control"
                                required>

                        </div>



                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Contact Number</label>

                            <input type="number" class="form-control" value="{{ old('contact') }}" name="contact"
                                required>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Domicile City</label>

                            <input type="text" class="form-control" value="{{ old('domicileCity') }}" name="domicileCity"
                                required>

                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">CNIC</label>

                            <input type="text" class="form-control CNIC" value="{{ old('CNIC') }}" name="CNIC" required>
                            <p class="text-primary" style="font-size: 13px;padding:0px;margin:0px;">e.g xxxxx-xxxxxxx-x</p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">E-Mail</label>

                            <input type="email" class="form-control" value="{{ old('email') }}" name="email">

                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Whatsapp</label>

                            <input type="number" class="form-control numbers" value="{{ old('whatsappContact') }}"
                                name="whatsappContact" placeholder="Watsapp number">

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Date Of Birth</label>

                            <input type="date" class="form-control" value="{{ old('DOB') }}" name="DOB" required>

                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Add Image</label>

                            <input type="file" class="form-control " id="image" value="{{ old('image') }}" name="image"
                                style="border-radius: 10px;" required>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 pt-3 text-center">

                            <img src="" alt="" id="preview" width="90%" height="300px"
                                style="border-radius: 20px;display:none">

                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="course">Program :</label>

                            <select id="program" class="form-control" value="{{ old('program') }}" name="program"
                                required>

                                <option value="">Select the Program/Diploma</option>

                                @foreach ($programs as $item)

                                    <option value="{{ $item->program_id }}">{{ $item->program_name }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">

                            <div class="form-group pt-4">

                                <label for="gender" class="radio-label">Gender :</label>

                                <input type="radio" name="gender" value="male" id="male" required>

                                <label for="male" style="margin-right: 10px;">Male</label>

                                <input type="radio" name="gender" value="female" id="female" required>

                                <label for="female">Female</label>

                                <input type="radio" name="gender" value="others" id="others" required>

                                <label for="others">Others</label>

                            </div>

                        </div>

                        <div class="col-12 my-3 pl-4" style="display:none;" id="preRequisite">
                            <h5>
                                Program Pre-Requisite
                            </h5>
                            <p>

                            </p>
                        </div>
                        <div class="col-12">

                            <label for="inputAddress">Permanent Address</label>

                            <input type="text" class="form-control" value="{{ old('permanentAddress') }}"
                                name="permanentAddress" id="inputAddress" required>

                        </div>

                        <div class="col-12">

                            <label for="inputAddress2">Mailing/Postal Address</label>

                            <input type="text" class="form-control" value="{{ old('mailingAddress') }}"
                                name="mailingAddress" id="inputAddress2" required>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <div class="form-group">

                                <label for="inputCity">City</label>

                                <input type="text" class="form-control" value="{{ old('city') }}" name="city"
                                    id="inputState" required>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="inputState">State</label>

                            <select id="inputState" class="form-control" value="{{ old('state') }}" name="state"
                                required>

                                <option value="">Select Your State</option>

                                <option value="Azad Jammu and Kashmir">Azad Jammu and Kashmir</option>

                                <option value="Balochistan">Balochistan</option>

                                <option value="Gilgit−Baltistan">Gilgit−Baltistan</option>

                                <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>

                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>

                                <option value="Punjab">Punjab</option>

                                <option value="Sindh">Sindh</option>

                            </select>

                        </div>





                        <div class="form-group col-md-6">

                            <label for="inputZip">Zip</label>

                            <input type="text" class="form-control numbers" value="{{ old('zip') }}" name="zip"
                                id="inputZip">

                        </div>

                        <h4 style="padding-top: 20px;">b) Father's/Guardian(If have any) Particulars:</h4>


                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Name</label>

                            <input type="text" class="form-control" value="{{ old('fatherName') }}" name="fatherName"
                                required>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">CNIC</label>

                            <input type="text" class="form-control CNIC" value="{{ old('fatherCNIC') }}"
                                name="fatherCNIC" required>
                            <p class="text-primary" style="font-size: 13px;padding:0px;margin:0px;">e.g xxxxx-xxxxxxx-x</p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Contact Number</label>

                            <input type="text" class="form-control numbers" value="{{ old('fatherContact') }}"
                                name="fatherContact" required>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Whatsapp</label>

                            <input type="text" class="form-control numbers" value="{{ old('fatherWhatsappContact') }}"
                                name="fatherWhatsappContact">

                        </div>



                        <div class="col-lg-6 col-md-6 col-sm-12 pt-4">

                            <label for="" class="mr-2">Relation :</label>

                            <input type="radio" name="relation" value="Father" required>

                            <label for="" class="mr-2">Father</label>

                            <input type="radio" name="relation" value="Guardian" required>

                            <label for="" class="mr-2">Guardian</label>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Profession/Occupation</label>

                            <input type="text" class="form-control" value="{{ old('fatherProfession') }}"
                                name="fatherProfession" required>

                        </div>

                        <div class="offset-lg-6 offset-md-6 col-lg-6 col-md-6 col-sm-12">

                            <label for="validationServer01">Monthly Income</label>

                            <input type="text" class="form-control numbers" value="{{ old('fatherMonthlyIncome') }}"
                                name="fatherMonthlyIncome" required>

                        </div>



                        <hr style="width:90%;border:2px solid gray; margin:50px auto;border-radius:20px;">



                        <div style="display: flex; font-size: 30px;" class="text-style">Educational Qualifications

                            <p style="padding-left: 10%;">(Matriculation Must be in Science Subjects)</p>

                        </div>

                        <table class="table table-responsive" border="1">



                            <tr>

                                <th>Examination</th>

                                <th>Board</th>

                                <th>Roll Number</th>

                                <th>Passing Year</th>

                                <th>Total Marks</th>

                                <th>Marks Obtained</th>

                                <th>Percentage</th>

                            </tr>

                            <tr>

                                <td>Matriculation</td>

                                <td><input type="text" class="form-control" value="{{ old('matricBoard') }}"
                                        name="matricBoard" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricRollNo') }}"
                                        name="matricRollNo" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('matricPassingYear') }}" name="matricPassingYear"
                                        style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricTotalMarks') }}"
                                        name="matricTotalMarks" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('matricObtainedMarks') }}" name="matricObtainedMarks"
                                        style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricPercentage') }}"
                                        name="matricPercentage" style="border: none;" required></td>

                            </tr>

                            <tr>

                                <td>Intermediate</td>

                                <td><input type="text" class="form-control" value="{{ old('interBoard') }}"
                                        name="interBoard" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interRollNo') }}"
                                        name="interRollNo" style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interPassingYear') }}"
                                        name="interPassingYear" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interTotalMarks') }}"
                                        name="interTotalMarks" style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('interObtainedMarks') }}" name="interObtainedMarks"
                                        style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interPercentage') }}"
                                        name="interPercentage" style="border: none;" required>

                                </td>

                            </tr>

                        </table>

                        <table class="table table-responsive">

                            <div style="display: flex; font-size: 25px; padding:20px 20px;" class="text-style">Marks in Science Subjects and in

                                English

                            </div>

                            <tr>

                                <th>Examination</th>

                                <th>English</th>

                                <th>Mathematics</th>

                                <th>Physics</th>

                                <th>Chemistry</th>

                                <th>Total Obtained</th>

                                <th>Grand Total</th>

                            </tr>

                            <tr>

                                <td>Matriculation</td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricEnglish') }}"
                                        name="matricEnglish" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricMath') }}"
                                        name="matricMath" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricPhysics') }}"
                                        name="matricPhysics" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('matricChemistry') }}"
                                        name="matricChemistry" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('matricScienceSubObtainedMarks') }}"
                                        name="matricScienceSubObtainedMarks" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('matricScienceSubTotalMarks') }}" name="matricScienceSubTotalMarks"
                                        style="border: none;" required></td>

                            </tr>

                            <tr>

                                <td>Intermediate</td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interEnglish') }}"
                                        name="interEnglish" style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interMath') }}"
                                        name="interMath" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interPhysics') }}"
                                        name="interPhysics" style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers" value="{{ old('interChemistry') }}"
                                        name="interChemistry" style="border: none;" required>

                                </td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('interScienceSubObtainedMarks') }}"
                                        name="interScienceSubObtainedMarks" style="border: none;" required></td>

                                <td><input type="text" class="form-control numbers"
                                        value="{{ old('interScienceSubTotalMarks') }}" name="interScienceSubTotalMarks"
                                        style="border: none;" required>

                                </td>

                            </tr>

                        </table>

                        <div class="col-12" style="font-size: 20px; padding:20px 20px;">Optional Facilities Required

                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>a) Do you want to avail Bus (Pick and drop at Gwadar Only) facility.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="radio" name="busPickUps" class=" mx-2" value="yes" required><label
                                        for="">Yes</label>
                                    <input type="radio" name="busPickUps" class=" mx-2" value="no" required> <label
                                        for="">No</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>b) Do you require Hostel facility (Students othe then Gwadar Only).</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <input type="radio" name="requireHostel" class=" mx-2" value="yes" required><label
                                        for="">Yes</label>
                                    <input type="radio" name="requireHostel" class=" mx-2" value="no" required> <label
                                        for="">No</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 text-style" style="font-size: 25px;">

                            Attach Files

                            <div style="font-size: 15px;">

                                <div class="form-row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 pb-2">

                                        <label for="validationServer01">Matric Certificate</label>

                                        <input type="file" class="form-control" value="{{ old('matricCertificate') }}"
                                            name="matricCertificate" required>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 pb-2">

                                        <label for="validationServer01">Intermediate Certificate</label>

                                        <input type="file" class="form-control" value="{{ old('interCertificate') }}"
                                            name="interCertificate" required>

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 pb-2">

                                        <label for="validationServer01">Domicile</label>

                                        <input type="file" class="form-control" value="{{ old('domicileImg') }}"
                                            name="domicileImg" required>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="row pt-4">

                        <div class="col-lg-3 col-md-3 col-sm-6 my-2 ml-auto">

                            <button type="submit" id="resetbtton1" class="btn btn-block btn-outline-primary">Submit</button>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 my-2 mr-auto">

                            <button type="reset" id="resetbtton" class="btn btn-block btn-outline-danger">Reset</button>

                        </div>

                    </div>

                </form>

            </div>



        </div>

    </div>

    <!-- Form End -->
    <!-- footer -->



    <script>
        $(document).ready(function() {



            //Change Cover Image Preview


            $("#program").change(function() {

                $.ajax({

                    url: "/onlineAdmission/pre_requisite",
                    method: 'get',
                    data: {
                        id: $(this).val(),
                    },
                    dataType: "JSON",
                    success: function(result) {

                        $("#preRequisite").show();
                        $("#preRequisite>p").html(result[0].program_preRequisite);

                    }

                });


            })

            $("#image").change(function() {

                $('#preview').show()

                readURL(this);

            });



            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();



                    reader.onload = function(e) {

                        $('#preview').attr('src', e.target.result);

                    }



                    reader.readAsDataURL(input.files[0]); // convert to base64 string

                }

            }

            //Change Cover Image Preview End

        })


        $(".numbers").keypress(function(event) {

            var character = String.fromCharCode(event.keyCode);

            return isValidCNIC(character);

        });



        function isValidCNIC(str) {

            return !

                /[~`!@#$%\^&*()(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z)+=\\[\]\\';,/{}|\\":<>\?]/g

                .test(str);

        }



        $(".CNIC").keypress(function(event) {

            var character = String.fromCharCode(event.keyCode);

            return isValidCNIC(character);

        });



        function isValidCNIC(str) {

            return !

                /[~`!@#$%\^&*()(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z)+=\\[\]\\';,/{}|\\":<>\?]/g

                .test(str);

        }

    </script>

    @include('front.layout.footer')

@endsection
