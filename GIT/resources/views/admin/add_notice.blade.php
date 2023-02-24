@extends('admin.layout.app')



@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-10 mx-auto mt-5" style="margin-top: 50px;">

                @if (session()->has("msg"))

                    <div class="alert alert-{{session()->get("status")}}">{{session()->get("msg")}}</div>

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

                <form class="form" action="{{route('notice.add')}}" method="POST" enctype="multipart/form-data" >

                    @csrf

                    <h2>

                        New Notice

                    </h2>

                    <div class="form-group">

                      <label for="title">Notice Title</label>

                      <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">

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

    

@endsection

