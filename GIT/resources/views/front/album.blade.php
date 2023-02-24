@extends('front.layout.app')

@section('content')
<style>
    .close{
        position: absolute;
        top:20px;
        right:20px;
        z-index:10;
        color:red;
        font-size:50px;
    }
</style>

    @include('front.layout.navBar')


    <div class="container" style="margin-bottom: 120px;">
        <div class="row text-center">
            <div class="col-12" style="margin-top: 170px;">
                <img src="{{ asset('upload/GIT_albums/' . $album[0]->album_coverImage) }}"
                    style="height: 60vh;width:100%;borde-radius:20px;" alt="">
                <h1 class="my-4 mb-5">
                    {{ $album[0]->album_title }}
                </h1>
            </div>
            
            @if (Storage::disk()->exists('upload/GIT_albums/' . $album[0]->album_coverImage))
                <h1>Image Exists</h1>
            @endif

            @foreach ($album as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 my-3 img">
                    <a href="#subImagePreview" data-toggle="modal">
                    <img src="{{ asset('upload/GIT_albums/' . $item->albums_subImages_name) }}"
                        style="border-radius: 10px !important;width:100%;height:250px;" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="subImagePreview" tabindex="-1" role="dialog" aria-labelledby="subImagePreviewTitle" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 80% !important;margin:0px auto;">
      <div class="modal-content" style="position: relative;background-color:transparent;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <img src="" alt="" id="imagePreview" height="500px" width="100%">
        </div>
      </div>
    </div>
  </div>
    @include('front.layout.footer')
    <script>
        $(".img").click(function(){
            $("#imagePreview").prop("src",$(this).find("img").prop("src"))
        })
    </script>

@endsection
