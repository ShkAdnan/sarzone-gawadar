@extends('admin.layout.app')

<style>

    input::-webkit-outer-spin-button,

    input::-webkit-inner-spin-button {

        -webkit-appearance: none;

        margin: 0;

    }



</style>

@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-10 mx-auto mt-5" style="margin-top: 50px;">

                @if (session()->has('msg'))

                    <div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>

                @endif

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form class="form" action="{{ route('graduate.add') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <h2>

                        New Graduate

                    </h2>

                    <div class="form-row">

                        <div class="col-lg-6 col-md-6">

                            <div class="form-group">

                                <label for="name">Name</label>

                                <input type="text" name="name" id="name" class="form-control" placeholder=""

                                    aria-describedby="helpId">

                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6">

                            <div class="form-group">

                                <label for="fatherName">Father Name</label>

                                <input type="text" name="fatherName" id="fatherName" class="form-control" placeholder=""

                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <div class="form-group">

                                <label for="contact">Contact</label>

                                <input type="number" name="contact" id="contact" class="form-control" placeholder=""

                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <div class="form-group">

                                <label for="CNIC">CNIC</label>
        
                                <input type="text" pattern="^[0-9]{5}-[0-9]{7}-[0-9]$" name="CNIC" id="CNIC" class="form-control"
        
                                    placeholder="" aria-describedby="helpId">
        
                                <small id="helpId" class="text-primary">e.g xxxxx-xxxxxxx-x</small>
        
                            </div>

                        </div>
                        
                    </div>


                    <div class="form-group">

                        <label for="program">Program/Diploma</label>

                        <select name="program" class="form-control" id="program">

                            <option value="" disabled selected>Select Program/Diploma</option>

                            @foreach ($programs as $item)

                                <option value="{{ $item->program_id }}">{{ $item->program_name }}</option>

                            @endforeach

                        </select>

                    </div>

                    <div class="form-group">

                        <label for="duration">Program Duration(Months)</label>

                        <input type="number" min="0" name="duration" id="duration" class="form-control" placeholder=""

                            aria-describedby="helpId">

                    </div>

                    <div class="form-group">

                        <label for="date">Graduation Date</label>

                        <input type="date" name="date" id="date" class="form-control" placeholder=""

                            aria-describedby="helpId">

                    </div>

                    <div class="form-group">

                        <label for="address">Address</label>

                        <input type="text" name="address" id="address" class="form-control" placeholder=""

                            aria-describedby="helpId">

                    </div>

                    <div class="form-row">

                        <div class="col-lg-6 col-md-6 mx-auto">

                            <input type="submit" class="btn btn-primary my-5 btn-block">

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>

        $("#contact").on("keyup", function() {

            var value = $("#contact").val()

            if (value.length > 11) {

                value = value.slice(0, 11)

                $("#contact").val(value)

            }

        })

        $("#name").keypress(function(event) {

            var character = String.fromCharCode(event.keyCode);

            return isValid(character);

        });

        $("#CNIC").keypress(function(event) {

            var character = String.fromCharCode(event.keyCode);

            return isValidCNIC(character);

        });



        function isValid(str) {

            return !/[~`!@#$%\^&*()(0,1,2,3,4,5,6,7,8,9)+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);

        }



        function isValidCNIC(str) {

            return !

                /[~`!@#$%\^&*()(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z)+=\\[\]\\';,/{}|\\":<>\?]/g

                .test(str);

        }



    </script>

@endsection

