@extends('front.layout.app')



<style>

    table,tr,th,td{

        text-align:center;

        border:1px solid black;

        padding:10px;

    }

</style>



@section('content')

   

    @include('front.layout.navBar')



    <!-- Section -->

    <div class="container-fluid p-0" style="margin: 150px 0px;">

        <div class="container text-center">
            
            <h1>GWADAR INSTITUTE OF TECHNOLOGY</h1>

            <h1>Fee Structure</h1>

            <table width="100%" align="center">

                <thead>

                    <tr>

                        <th>Sr.no</th>

                        <th>Name</th>

                        <th colspan="3">Fee</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>Admission Fees </td>

                        <td>5000</td>

                    </tr>

                    <tr>

                        <td>2</td>

                        <td>Tuition Fees</td>

                        <td>500</td>

                    </tr>
                    <tr>

                        <td>3</td>

                        <td>Reading Room Fund</td>

                        <td>500</td>

                    </tr>
                    <tr>

                        <td>4</td>

                        <td>Science Fees</td>

                        <td>1000</td>

                    </tr>

                    <tr>

                        <td>5</td>

                        <td>Magazine Fees</td>

                        <td>500</td>

                    </tr>

                    <tr>

                        <td>6</td>

                        <td>Sports Fund</td>

                        <td>500</td>

                    </tr>
                    <tr>

                        <td>7</td>

                        <td>Practical</td>

                        <td>1000</td>

                    </tr>
                    <tr>

                        <td>8</td>

                        <td>Others</td>

                        <td>1000</td>

                    </tr>
                    <tr>

                        <td></td>

                        <th>Total</th>

                        <td>10000</td>

                    </tr>
                </tbody>

            </table>

        </div>

    </div>


    @include('front.layout.footer')

@endsection

