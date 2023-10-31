<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class MentorController extends Controller
{
    protected $course, $courses=[];
    public function home()
    {
        $this->course =Course::all();
        return view('frontend.home.index',[
            'courses'=>Course::where('status',1)->get()
        ]);
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    //
    public function trainer()
    {
        return view('frontend.pages.trainer');
    }
    //
    public function pricing()
    {
        return view('frontend.pages.pricing');
    }
    //
    public function event()
    {
        return view('frontend.pages.event');
    }
    //
    public function courses()
    {
        $this->course =Course::all();
        return view('frontend.pages.courses.courses',[
            'courses'=>Course::where('status',1)->get()
        ]);
    }
    //

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //

    public function courseDetails(string $id)
    {
        $this->course =Course::find($id);
        return view('frontend.pages.courses.details',[
            'course'=>$this->course
        ]);
    }
    //

}
