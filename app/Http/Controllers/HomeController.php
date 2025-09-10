<?php

namespace App\Http\Controllers;
use App\Models\AcademicLevel;
use App\Models\Deadline;
use App\Models\Fare;


use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index (){
        $academic_levels = AcademicLevel::all();
        $deadlines = Deadline::orderBy('id', 'asc')->get();
        $fares = Fare::with('services')->get();
        // dd($fares);
        return view('index', compact('academic_levels', 'deadlines' , 'fares'));
    }

    public function cipd_level_3() {
    $academic_levels = AcademicLevel::all();
    $deadlines = Deadline::all();
    $fares = Fare::all();
    return view('cipd-level-3', compact('academic_levels', 'deadlines', 'fares'));
}

    public function cipd_level_5() {
    $academic_levels = AcademicLevel::all();
    $deadlines = Deadline::all();
    $fares = Fare::all();
    return view('cipd-level-5', compact('academic_levels', 'deadlines', 'fares'));
}

    public function cipd_level_7() {
    $academic_levels = AcademicLevel::all();
    $deadlines = Deadline::all();
    $fares = Fare::all();
    return view('cipd-level-7', compact('academic_levels', 'deadlines', 'fares'));
}

    public function hr_assignment_help() {
    $academic_levels = AcademicLevel::all();
    $deadlines = Deadline::all();
    $fares = Fare::all();
    return view('hr-assignment-help', compact('academic_levels', 'deadlines', 'fares'));
}


    // Section Pages

    public function about_us (){
        return view('about-us');
    }
    public function reviews (){
        return view('reviews');
    }
    public function sitemap (){
        return view('sitemap');
    }
    public function terms_and_conditions (){
        return view('terms-and-conditions');
    }
    // public function return_and_exchange_policy (){
    //     return view('return-and-exchange-policy');
    // }
    public function privacy_policy (){
        return view('privacy-policy');
    }
    // public function refund_policy (){
    //     return view('refund-policy');
    // }
    
    public function pricing(){
        return view('pricing');
    }
    public function samples(){
        return view('samples');
    }
    
      
}

