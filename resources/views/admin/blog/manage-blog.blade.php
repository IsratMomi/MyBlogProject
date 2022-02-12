@extends('admin.master')

@section('title')
    All - Blogs
@endsection

@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">All Blogs</h4>
                            <p class="card-description">
                                {{--Add class <code>.table-bordered</code>--}}
                            </p>
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            SL No
                                        </th>
                                        <th>
                                            Category Id
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Author
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$blog->category_id}}</td>
                                            <td>{{Str::limit($blog->title, 15)}}</td>
                                            <td>{{Str::limit($blog->description, 25)}}</td>
                                            {{--<div class="progress">--}}
                                            {{--<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                            {{--</div>--}}
                                            <td>{{$blog->authorName}}</td>
                                            <td>
                                                <img src="{{ asset($blog->image) }}" style="height: 100px; width: 100px;" alt="">
                                            </td>
                                            <td>{{$blog->status == 1? 'Published' : 'Unpublished'}}</td>
                                            <td>

                                                <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('delete-blog',['id'=>$blog->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">Delete</a>
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

