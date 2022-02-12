@extends('admin.master')

@section('title')
    All - Categories
@endsection

@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">All Category</h4>
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
                                            Category Name
                                        </th>
                                        <th>
                                            Description
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
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                            <td style="width: 20px">{{$category->description}}</td>
                                            {{--<div class="progress">--}}
                                            {{--<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                            {{--</div>--}}

                                            <td>{{$category->status == 1? 'Published' : 'Unpublished'}}</td>
                                            <td>
                                                <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('delete-category',['id'=>$category->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">Delete</a>
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

