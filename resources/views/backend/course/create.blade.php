@extends('backend.master')

@section('title', 'Course Add')

@section('body')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="row py-4">
                <div class="card">
                    <div class="card-header justify-content-center" >
                        <h2>Add a new Course</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{session('success')}}</span>
                        <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Title:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" placeholder="Course Name" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Price:</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="price" placeholder="Course Price" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Banner:</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="banner" placeholder="Course Banner" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Total Classes:</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="classes" placeholder="Course Classes" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Discount Amount:</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="discount" placeholder="Course Discount" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Description:</label>
                                <div class="col-md-8">
                                    <textarea id="" cols="30" rows="10" class="form-control" name="description" placeholder="Course Describe the Category" ></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Available From:</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="available" placeholder="Course Start From" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status:</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" />Published</label>
                                    <label for=""><input type="radio" name="status" value="0" />Unpublished</label>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
