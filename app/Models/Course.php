<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','banner','classes', 'discount', 'description', 'available', 'status'];
    protected static $course,$imageFile, $imageName, $imageUrl, $imageDirectory;

    public static function createCourse($request,$id =null)
    {
        self::$imageFile = $request->file('banner');
        if (self::$imageFile)
        {
            self::$imageName                 = self::$imageFile->getClientOriginalName();
            self::$imageDirectory            = 'backend/upload-files/courses/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl                  = self::$imageDirectory . self::$imageName;
        }

        self::$course               =new Course();
        self::$course->title         =$request->title;
        self::$course->price         =$request->price;
        self::$course->banner         =self::$imageUrl;
        self::$course->classes         =$request->classes;
        self::$course->discount         =$request->discount;
        self::$course->description  =$request->description;
        self::$course->available    =$request->available;
        self::$course->status       =$request->status;
        self::$course->save();

    }

    public static function updateCourse($request, $id= null)
    {
        self::$course = Course::find($id);
        self::$imageFile = $request->file('banner');
        if (self::$imageFile)
        {
            if (file_exists(self::$course->banner))
            {
                unlink(self::$course->banner);
            }
            self::$imageName                 = self::$imageFile->getClientOriginalName();
            self::$imageDirectory            = 'backend/upload-files/courses/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl                  = self::$imageDirectory . self::$imageName;
        }else{
            self::$imageUrl = self::$course->banner;
        }

        self::$course->title         =$request->title;
        self::$course->price         =$request->price;
        self::$course->banner         =self::$imageUrl;
        self::$course->classes         =$request->classes;
        self::$course->discount         =$request->discount;
        self::$course->description  =$request->description;
        self::$course->available    =$request->available;
        self::$course->status       =$request->status;
        self::$course->save();


    }

}
