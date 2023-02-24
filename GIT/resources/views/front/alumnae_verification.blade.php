@extends('front.layout.app')

<style>
    .details ul>li{
        font-size: 20px;
        margin: 20px 0px;
    }
    .text-style{
     color: #02606e;
 }
</style>

@section('content')


    @include('front.layout.navBar')


    <div class="mt-5"></div>

    <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-sm-10 mx-auto">
            <h3 style="margin-top: 150px;" class="text-style">Enter CNIC for verification</h3>
            <form action="{{route('alumnae.details')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" pattern="^[0-9]{5}-[0-9]{7}-[0-9]$" name="CNIC" id="CNIC" class="form-control"

                        placeholder="" aria-describedby="helpId">
                        <span style="color:red;">@error('cnic') {{$message}} @enderror</span> <br>
                    <small id="helpId" class="text-primary">e.g xxxxx-xxxxxxx-x</small>

                </div>
                <input type="submit" class="btn btn-block btn-primary my-4">
            </form>
        </div>
    </div>


    @if (isset($details) && sizeof($details))
    
        
    <div class="row details">
            <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
                <ul style="margin: 40px 0px 100px 0px;">
                    <li><b>Name : </b> {{$details[0]->graduate_name}}</li>
                    <li><b>Father's Name : </b> {{$details[0]->graduate_fatherName}}</li>
                    <li><b>CNIC : </b> {{$details[0]->graduate_CNIC}}</li>
                    <li><b>Program : </b> {{$details[0]->program_name}}</li>
                    <li><b>Contact : </b> {{$details[0]->graduate_contact}}</li>
                    <li><b>Address : </b> {{$details[0]->graduate_address}}</li>
                    <li><b>Graduated On : </b> {{$details[0]->graduate_date}}</li>
                </ul>
            </div>
        </div>
    @elseif(isset($details) && sizeof($details)==0)
        <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
            <h4 style="color: red;">Record Not Found</h4>
        </div>
    @endif
    
    @include('front.layout.footer')

<script>
        $("#CNIC").keypress(function(event) {

    var character = String.fromCharCode(event.keyCode);

    return isValidCNIC(character);

    }); 



    function isValidCNIC(str) {

    return !

        /[~`!@#$%\^&*()(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z)+=\\[\]\\';,/{}|\\":<>\?]/g

        .test(str);

    }


</script>

@endsection

