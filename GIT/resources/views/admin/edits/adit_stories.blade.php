@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mt-5" style="margin-top: 50px;">
                @if (session()->has('msg'))
                    <div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>
                @endif
                <form class="form" action="{{route('Stories.update',$stories->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>
                        Update Album
                    </h2>
                    <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="">Album Title</label>
                            <input type="text" name="title_name" value="{{ $stories->name }}" id="album_title"
                                class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="">Album Title</label>
                            <input type="text" name="title" value="{{ $stories->name }}" id="album_title"
                                class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    </div>
                    <input type="hidden" value="{{ $stories->id }}" name="id">
                    <div class="form-row my-5">
                        <div class="col-lg-6 col-md-6">
                            <h6>Album Cover Picture</h6>
                            <img id="preview" src="{{ asset('upload/images/' . $stories->stories_images) }}"
                                style="border-radius: 20px;height:200px;width:80%;" alt="image not found">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h6>Change Cover Picture</h6>
                            <div class="btn btn-outline-primary btn-block my-5" id="updateCoverImage">upload</div>
                            <input type="file" name="image" value="{{ 10+3 }}" id="newImage" style="display: none;">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-group">

                            <label for="">Description</label>
      
                            <textarea class="form-control" name="description"  id="" cols="10" rows="5  ">{{$stories->discription}}</textarea>
                            {{-- <input type="text" name="album_title" id="album_title" class="form-control" placeholder="" aria-describedby="helpId"> --}}
      
                          

                        </div>
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
        $(document).ready(function() {

            //Change Cover Image Preview

            $("#newImage").change(function() {
                readURL(this);
            });

            $('#updateCoverImage').click(function() {
                $('#newImage').click()
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

    </script>
@endsection
