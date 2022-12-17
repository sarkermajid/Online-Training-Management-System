<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $image, $imageName, $imageExtension, $imageUrl, $directory, $teacher;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$imageExtension;
        self::$directory = 'admin/teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        self::$teacher->mobile       = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::getImageUrl($request);
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->save();
    }

    public static function updateTeacher($request,$id)
    {
        self::$teacher = Teacher::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$teacher->image;
        }
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::$imageUrl;
        if($request->password)
        {
            self::$teacher->password = bcrypt($request->password);
        }
        self::$teacher->password    = $request->password;
        self::$teacher->save();
    }

    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);
        if(file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
    }
}
