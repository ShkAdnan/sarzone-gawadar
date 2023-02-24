@extends('admin.layout.app')



@section('content')



    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 my-5">

                @if (session()->has('msg'))

                    <div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>

                @endif

                <div class="card mb-4 w-100">

                    <div class="card-header">

                        <h3><i class="fas fa-table mr-1"></i> All Notices</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">

                                <thead>

                                    <tr>

                                        <th>Id</th>

                                        <th>Make Online</th>

                                        <th>Title</th>

                                        <th>Delete</th>

                                        <th>Time</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($notices as $notice)

                                        <tr>

                                            <td>{{ $notice->notice_id }}</td>

                                            <td>{{ $notice->notice_title }}</td>

                                            <td>
                                                <a href="{{ route('notice.delete', ['id' => $notice->notice_id]) }}"><i

                                                class="fa fa-trash text-danger mx-2"></i></a>
                                            </td>

                                            <td>{{ $notice->time }}</td>

                                        </tr>

                                    @endforeach

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Id</th>

                                        <th>Make Online</th>

                                        <th>Title</th>

                                        <th>Delete</th>

                                        <th>Time</th>

                                    </tr>

                                </tfoot>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>

        $('.showOnline').on("change", function() {

            var isChecked = $(this).is(":checked")
            
            $.ajax({

                type: "POST",

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },

                data: {

                    "_token": "{{ csrf_token() }}",

                    "id": $(this).prev('input[type="hidden"]').val(),

                    "value": isChecked,
                    
                },
                url: "/notice/online",

                success: function(data) {
                

                }

            });

        })



    </script>

@endsection

