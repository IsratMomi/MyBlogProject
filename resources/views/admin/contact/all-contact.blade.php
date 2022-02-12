@extends('admin.master')

@section('title')
    All - Messages
@endsection

@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Reader Messages</h4>
                            <p class="card-description">
                                {{--Add class <code>.table-bordered</code>--}}
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            SL No
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Message
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                            {{--<div class="progress">--}}
                                                {{--<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                            {{--</div>--}}

                                        <td>{{$message->message}}}</td>
                                        <td>
                                            <a href="" class="btn btn-info showModal" data-toggle="modal" data-id="{{ $message->id }}" data-target="#exampleModal">View</a>
                                            <a href="{{route('delete-message',['id'=>$message->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection

@section('message-js')
    <script>
        $(document).on('click', '.showModal', function (){
            var messageId = $(this).data('id');

            $.ajax({
                url: "{{ url('/get-message-info') }}",
                dataType: "JSON",
                method: "GET",
                data: {id:messageId},
                success: function (data){

                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#message-text').text(data.message);

                },
                error: function (res)
                {
                    console.log(res);
                }
            })
        })
    </script>

@endsection