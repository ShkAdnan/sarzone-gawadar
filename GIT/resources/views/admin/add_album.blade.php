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

                <form class="form" action="{{route('album.add')}}" method="POST" enctype="multipart/form-data" >

                    @csrf

                    <h2>

                        New Album

                    </h2>

                    <div class="form-group">

                      <label for="">Album Title</label>

                      <input type="text" name="album_title" id="album_title" class="form-control" placeholder="" aria-describedby="helpId">

                    </div>

                    <label for="">Album Cover Picture</label>
                    
                    <div class="row">
                        
                        <div class="col-6">
                            <div class="custom-file mb-3">

                                <input type="file" class="custom-file-input" name="image" onchange="showImage(event)" id="customFile">
        
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                    
                            </div>
                        </div>
                        <div class="col-6 text-center">
                            <img id="coverImageName" src="" alt="" style="display: none;border-radius:20px;" height="150px" width="70%">
                        </div>

                    </div>



                    <label for="">Album Sub Pictures</label>

                    <div class="custom-file">

                        <input type="file" id="subImages"  name="subImages[]" class="custom-file-input" multiple />

                        <label class="custom-file-label" for="subImages">Choose file</label>

                    </div>

                    <div class="row my-4" id="subImagesPreview">

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
        function showImage(event){
            let url = URL.createObjectURL(event.target.files[0]);
            $("#coverImageName").show().prop("src",url)
        }
       

        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                
                reader.onload = function(event) {
                    var preview=$("#subImagesPreview")
                    preview.append("<div class='col-lg-3 col-md-4 col-sm-6 my-3 text-center'></div>")
                    lastElement=$("#subImagesPreview div:last-child")
                    var $test= $($.parseHTML('<img height="150px" width="100%" style="border-radius:10px;">')).attr('src', event.target.result).appendTo(lastElement);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#subImages').on('change', function() {
        imagesPreview(this);
    });
});
    </script>

@endsection

{{-- var $div="<div class='col-lg-6'></div>"
$($div.append($.parseHTML('<img height="150px" width="90%">').attr('src', event.target.result))).appendTo($preview); --}}
