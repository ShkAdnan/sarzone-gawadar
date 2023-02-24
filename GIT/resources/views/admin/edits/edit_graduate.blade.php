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
                <form class="form" action="{{ route('graduate.edited') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>
                        Update Graduate
                    </h2>
                    <input type="hidden" value="{{ $graduate->graduate_id }}" name="id">
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{ $graduate->graduate_name }}"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="number" name="contact" id="contact" value="{{ $graduate->graduate_contact }}"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="CNIC">CNIC</label>
                        <input type="text" pattern="^[0-9]{5}-[0-9]{7}-[0-9]$" name="CNIC" id="CNIC"
                            value="{{ $graduate->graduate_CNIC }}" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-primary">e.g xxxxx-xxxxxxx-x</small>
                    </div>
                    <div class="form-group">
                        <label for="program">Program/Diploma</label>
                        <select name="program" class="form-control" id="program">

                            @foreach ($programs as $item)
                                @if ($item->program_id == $graduate->program_id)
                                    <option value="{{ $item->program_id }}" selected>{{ $item->program_name }}</option>
                                @else
                                    <option value="{{ $item->program_id }}">{{ $item->program_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="duration">Program Duration(Months)</label>
                        <input type="number" min="0" name="duration" id="duration"
                            value="{{ $graduate->graduate_duration }}" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="date">Graduation Date</label>
                        <input type="date" name="date" id="date" value="{{ $graduate->graduate_date }}"
                            class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="{{ $graduate->graduate_address }}"
                            class="form-control" placeholder="" aria-describedby="helpId">
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
