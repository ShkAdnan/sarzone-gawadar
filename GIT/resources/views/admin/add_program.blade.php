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
                <form class="form" action="{{ route('admission.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>
                        New Program
                    </h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="preRequisite">Pre-requisite</label>
                        <textarea name="preRequisite" id="preRequisite" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="duration">Program Duration(Months)</label>
                        <input type="number" min="0" name="duration" id="duration" class="form-control" placeholder=""
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
        tinymce.init({
            selector: 'textarea',
            branding: false,
            menubar: false,
            plugins: [
                'advlist autolink lists charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime table contextmenu paste code wordcount'
            ],
            mobile: {
                theme: 'mobile'
            },
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat '
        });

    </script>
@endsection
