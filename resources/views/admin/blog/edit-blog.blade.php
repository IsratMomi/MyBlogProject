@extends('admin.master')
@section('title')
    Edit - Blog
@endsection

@section('body')
    <div class="content-wrapper">
        <div class="col-12 grid-margin ">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Add Blog</h2>
                </div>
                <div class="card-body">

                    <form action="{{route('update-blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Category Name :</label>
                            <div class="col-md-8">
                                <select name="category_id" class="form-control" id="">
                                    <option value="" disabled="" selected >{{$blog->category->name}}</option>
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
                                <input type="text" name="title" class="form-control" value="{{$blog->title}}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Blog Description :</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$blog->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Author name :</label>
                            <div class="col-md-8">
                                <input type="text" name="authorName" class="form-control" value="{{$blog->authorName}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right">Blog Image :</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control-file" />
                                <img src="{{asset($blog->image)}}" alt="" height="60" width="60"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 text-right"> Status :</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" {{$blog->status ==1? 'checked':''}}> Published</label>
                                <label for=""><input type="radio" name="status" value="0"{{$blog->status ==0? 'checked':''}}> Unpublished</label>
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