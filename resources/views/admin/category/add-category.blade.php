@extends('admin.master')
@section('title')
    Add - Category
@endsection

@section('body')
    <div class="content-wrapper">
        <div class="col-12 grid-margin ">
        <div class="card">
            <div class="card-body position-relative">
                <h4 class="card-title">Blog Category Add</h4>
                <form class="form-sample" action="{{route('new-category')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Category name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Category Description</label>
                                <div class="col-sm-8">
                                   <textarea class="form-control" name="description" rows="5" cols="30"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked />
                                            Published
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" />
                                            Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit" class="btn btn-outline-info btn-block" value="Add Category"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection