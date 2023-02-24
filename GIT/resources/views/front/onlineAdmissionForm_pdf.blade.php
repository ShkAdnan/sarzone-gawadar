<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .personal_info tr>td:nth-child(1) {
            width: 25%;
            padding: 10px;
            text-align: right;
            border-radius: 10px;
        }

        .personal_info tr>td:nth-child(2) {
            width: 75%;
        }

        .infos td {
            text-align: center;
        }
        .images div{
            margin-left: 1%;
            width: 30%;
            float: left;
        }
    </style>
</head>

<body>

    <h3>Application No. {{$info->student_id}}</h3>
    <div>
        <h2 style="float: left;margin-top:60px;">{{ $info->student_firstName . ' ' . $info->student_lastName }}</h2>
        <img src="{{ asset('storage/upload/Information/' . $info->student_image) }}" height="200px" align="right"
            width="30%" alt="">
    </div>
    <div class="personal_info">
        <table style="clear: both;margin-top:70px;" width="100%">
            <tr>
                <td>Contact : </td>
                <td>{{ $info->student_contact }}</td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>{{ $info->student_email }}</td>
            </tr>
            <tr>
                <td>CNIC : </td>
                <td>{{ $info->student_CNIC }}</td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>{{ $info->student_gender }}</td>
            </tr>
            <tr>
                <td>Address : </td>
                <td>{{ $info->student_permanentAddress }}</td>
            </tr>
            <tr>
                <td>Mailing Address : </td>
                <td>{{ $info->student_mailingAddress }}</td>
            </tr>
            <tr>
                <td>Date Of Birth : </td>
                <td>{{ $info->student_DOB }}</td>
            </tr>
            <tr>
                <td>Program : </td>
                <td>{{ $info->program_name }}</td>
            </tr>
            <tr>
                <td>Provice : </td>
                <td>{{ $info->student_state }}</td>
            </tr>
            <tr>
                <td>City : </td>
                <td>{{ $info->city }}</td>
            </tr>

        </table>
    </div>
    <h3>Guardian Information</h3>
    <div class="personal_info">
        <table style="clear: both;margin-top:0px;" width="100%">
            <tr>
                <td>Name : </td>
                <td>{{ $info->guardian_name }}</td>
            </tr>
            <tr>
                <td>Contact : </td>
                <td>{{ $info->guardian_contact }}</td>
            </tr>
            <tr>
                <td>CNIC : </td>
                <td>{{ $info->guardian_CNIC }}</td>
            </tr>
            <tr>
                <td>Relation : </td>
                <td>{{ $info->guardian_relation }}</td>
            </tr>
            <tr>
                <td>Profession : </td>
                <td>{{ $info->guardian_profession }}</td>
            </tr>
            <tr>
                <td>Monthly Income : </td>
                <td>{{ $info->guardian_monthlyIncome }}</td>
            </tr>
        </table>
    </div>
    <h3>Matric Information</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="5" class="infos">
        <tr>
            <th>Board</th>
            <th>Roll No.</th>
            <th>Passing Year</th>
            <th>Total Marks</th>
            <th>Obtained Marks</th>
            <th>Matric Percentage</th>
        </tr>
        <tr>
            <td>{{ $info->matric_board }}</td>
            <td>{{ $info->matric_rollNo }}</td>
            <td>{{ $info->matric_passingYear }}</td>
            <td>{{ $info->matric_obtainedMarks }}</td>
            <td>{{ $info->matric_totalMarks }}</td>
            <td>{{ $info->matric_percentage }}</td>
        </tr>
    </table>
    <h3>Matric Science Subjects Marks</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="5" class="infos">
        <tr>
            <th>English</th>

            <th>Mathematics</th>

            <th>Physics</th>

            <th>Chemistry</th>

            <th>Total Obtained</th>

            <th>Grand Total</th>

        </tr>

        <tr>

            <td>{{ $info->matric_english }}</td>

            <td>{{ $info->matric_math }}</td>

            <td>{{ $info->matric_physics }}</td>

            <td>{{ $info->matric_chemistry }}</td>

            <td>{{ $info->matric_scienceSubObtainedMarks }}</td>

            <td>{{ $info->matric_scienceSubTotalMarks }}</td>

        </tr>

    </table>

    <h3>Intermediate Information</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="5" class="infos" style="margin-top: 50px;">
        <tr>
            <th>Board</th>
            <th>Roll No.</th>
            <th>Passing Year</th>
            <th>Total Marks</th>
            <th>Obtained Marks</th>
            <th>Intermediate Percentage</th>
        </tr>
        <tr>
            <td>{{ $info->inter_board }}</td>
            <td>{{ $info->inter_rollNo }}</td>
            <td>{{ $info->inter_passingYear }}</td>
            <td>{{ $info->inter_obtainedMarks }}</td>
            <td>{{ $info->inter_totalMarks }}</td>
            <td>{{ $info->inter_percentage }}</td>
        </tr>
    </table>
    <h3>Intermediate Science Subjects Marks</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="5" class="infos">
        <tr>
            <th>English</th>

            <th>Mathematics</th>

            <th>Physics</th>

            <th>Chemistry</th>

            <th>Total Obtained</th>

            <th>Grand Total</th>

        </tr>

        <tr>

            <td>{{ $info->inter_english }}</td>

            <td>{{ $info->inter_math }}</td>

            <td>{{ $info->inter_physics }}</td>

            <td>{{ $info->inter_chemistry }}</td>

            <td>{{ $info->inter_scienceSubObtainedMarks }}</td>

            <td>{{ $info->inter_scienceSubTotalMarks }}</td>

        </tr>

    </table>

    <div style="margin-top: 30px;">
        <b>Require Hostel : </b>  {{ $info->student_hostel}}
    </div>
    <div style="margin-top: 10px;">
        <b>Require Pick n Drop : </b>  {{ $info->student_picknDrop}}
    </div>
    
    {{-- <div style="margin-top: 300px;"></div>
    <div>
        <h1 >Domicile</h1>
        @if ( substr($info->student_domicileImg,strlen($info->student_domicileImg)-4,strlen($info->student_domicileImg)-1)==".pdf")
        <a href="{{ asset('storage/upload/Information/' . $info->student_domicileImg) }}" target="pdf-frame">Matric Card</a>
        <h1>This is pdf</h1>
        @else
        <img src="{{ asset('storage/upload/Information/' . $info->student_domicileImg) }}" height="900px" width="100%" alt="">
        <h1>This is JPG</h1>
        @endif
    </div>
    <div>
        <h1>Matric Certificate</h1>
        @if ( substr($info->student_domicileImg,strlen($info->student_domicileImg)-4,strlen($info->student_domicileImg)-1)==".pdf")
        <a src="{{ asset('storage/upload/Information/' . $info->matric_certificate) }}" target="_blank"></a>
        @else
        <img src="{{ asset('storage/upload/Information/' . $info->matric_certificate) }}" height="900px" width="100%" alt="">
        @endif
    </div>
    <div>
        <h1>Intermediate Certificate</h1>
        @if ( substr($info->student_domicileImg,strlen($info->student_domicileImg)-4,strlen($info->student_domicileImg)-1)==".pdf")
        <a src="{{ asset('storage/upload/Information/' . $info->inter_certificate) }}" target="_blank"></a>
        @else
        <img src="{{ asset('storage/upload/Information/' . $info->inter_certificate) }}" height="900px" width="100%" alt="">
        @endif
    </div> --}}
    {{-- <div style="margin: 20px 0px;"></div>
    <div class="images">
        <div>
            <h4>Intermediate Certificate</h4>
            <img src="{{ asset('storage/upload/Information/' . $info->inter_certificate)}}" height="250px" width="100%" alt="">
            <br><br>
        </div>
        <div>
            
            <h4>Matric Certificate</h4>
            <img src="{{ asset('storage/upload/Information/' . $info->matric_certificate)}}" height="250px" width="100%" alt="">
            <br><br>
        </div>
        <div>
            <h4>Domicile Image</h4>
            <img src="{{ asset('storage/upload/Information/' . $info->student_domicileImg)}}" height="250px" width="100%" alt="">
            <br><br>        
        </div>
    
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js" integrity="sha512-K4UtqDEi6MR5oZo0YJieEqqsPMsrWa9rGDWMK2ygySdRQ+DtwmuBXAllehaopjKpbxrmXmeBo77vjA2ylTYhRA==" crossorigin="anonymous"></script>
    <script>PDFObject.embed("", "#example1");</script>
</body>

</html>
