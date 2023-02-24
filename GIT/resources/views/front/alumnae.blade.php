@extends('front.layout.app')





@section('content')

    <style>

        #carerenav {

            height: 130px;

        }



        #careerheading {

            font-size: 40px;

            font-family: sans-serif;

            margin-top: 50px;

            border-bottom: 5px solid skyblue;

            display: inline-block;

        }

        th,td,tr{

            border:1px solid black;

            padding:10px;

        }
        .dataTables_filter input[type="search"]{
            padding:5px 10px;
            border-radius: 5px;
        }
        /* .dataTables_length{

            position:relative;

            top:35px;

        } */

        .paginate_button{

            padding:10px;

            border-radius:5px;

            border:1px solid gray;

            position:relative;

            bottom:10px;

            margin:5px;

        }

    </style>



    @include('front.layout.navBar')

    


    <div class="container">

        <h1 style="margin-top:130px; color:rgb(0, 111, 128);">All Alumnae</h1>
        <div class="card-body">



                        <div class="table-responsive">



                            <table id="dataTable" width="100%" cellspacing="0">



                                <thead>

                                    <tr>

                                        <th class="th">Sr.#</th>

                                        <th class="th">Name</th>

                                        <th class="th">Father Name</th>

                                        <th class="th">Degree</th>

                                        <th class="th">Batch</th>

                                    </tr>

                                </thead>



                                <tbody>

                                    @foreach ($graduates as $graduate)

                                        <tr>

                                            <td>{{$loop->iteration}}</td>

                                            <td>{{$graduate->graduate_name}}</td>

                                            <td>{{$graduate->graduate_fatherName}}</td>

                                            <td>{{$graduate->program_name}}</td>

                                            <td>{{$graduate->graduate_date}}</td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>



                                    <tr>

                                        <th class="th">Sr.#</th>

                                        <th class="th">Name</th>

                                        <th class="th">Father Name</th>

                                        <th class="th">Degree</th>

                                        <th class="th">Batch</th>

                                    </tr>



                                </tfoot>



                            </table>



                        </div>



                    </div>

     

    </div>


<script>

    $(document).ready(function() {

         $('#dataTable').DataTable();

    });

</script>

    @include('front.layout.footer')



@endsection

