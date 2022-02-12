@extends('admin.master')
@section('title')
    Add - Blog
@endsection

@section('body')
    <div class="content-wrapper">
        <div class="col-12 grid-margin ">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Add Blog</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('new-blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Category Name :</label>
                            <div class="col-md-8">
                                <select name="category_id" class="form-control" id="">
                                    <option value="" disabled="" selected >Select a Category</option>
                                    @foreach($categories as $category)
                                        @if($category->status == 1)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Blog title :</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Blog Description :</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Author name :</label>
                            <div class="col-md-8">
                                <input type="text" name="authorName" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Blog Image :</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control-file" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right"> Status :</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1"> Published</label>
                                <label for=""><input type="radio" name="status" value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right"></label>
                            <div class="col-md-8">
                                <input type="submit" value="New Blog" class="btn btn-outline-success" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection