<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    protected $courses = [], $course;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->courses = Course::all();
        return view('backend.course.index', [
            'courses' => $this->courses
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::createCourse($request);
        return back()->with('success', 'New Course created Successfully!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->course = Course::find($id);
        return view('backend.course.edit', [
            'course' => $this->course
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect()->route('course.index')->with('success', 'Course updated Successfully!');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        return back()->with('success', 'Course deleted Successfully!');

        //
    }
    //
}
