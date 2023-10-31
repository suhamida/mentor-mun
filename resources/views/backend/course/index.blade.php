@extends('backend.master')

@section('title','Manage Course')
@section('body')
    <div class="row py-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2> Manage All Courses</h2>
                </div>
                <div class="card-body">
                    <span class="text-success">{{session('success')}}</span>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Banner</th>
                            <th>Total Classes</th>
                            <th>Discount Amount</th>
                            <th>Description</th>
                            <th>Available From</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->price}}</td>
                                <td>
                                    <img src="{{asset($course->banner)}}" alt="" style="height: 60px" >
                                </td>
                                <td>{{$course->classes}}</td>
                                <td>{{$course->discount}}</td>

                                <td>{{$course->description}}</td>
                                <td>{{$course->availabe}}</td>
                                <td>{{$course->status == 1 ? 'Published': 'Unpublished'}}</td>
                                <td class="d-flex">
                                    <a href="{{route('course.edit',$course->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                                    <form action="{{route('course.destroy',$course->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger ms-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
