<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Major;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index()
    {
        
        $majors = Major::all(); // كل التخصصات
        $doctors = Doctor::all(); 
        // $doctors = Doctor::latest()->take(6)->get(); // آخر 6 دكاترة
        // $appointments = Appointment::latest()->take(5)->get(); // آخر 5 مواعيد
        
        // إرسال البيانات إلى الـ View
        return view('home', compact('majors', 'doctors'));
    }
}
