<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Student, User};

class AdminController extends Controller
{
    public function dashbord(){
        $data['total_students'] = student::all()->count();
        $data['total_user'] = user::all()->count();
        return view("admin/dashboard",$data);
    }

    public function manageUser(){
        $data['users'] = User::all();
        return view("admin/manageUsers",$data);
    }
    
    public function manageStudent(){
        $data['students'] =Student::all();
        return view("admin/manageStudents",$data);
    }
}


