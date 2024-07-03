<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicantsInfo;
use App\Models\ApplicantsEducation;
class IndexController extends Controller
{
    public function index(Request $request)
    {
         $ipAddress = $request->ip();
        return view('applicants/index',['ip' => $ipAddress]);
    }
    public function applicants_info (Request $req){
        $user_id = auth()->user()->id;
        if(ApplicantsInfo::where('user_id', $user_id)){
        $applicantInfo = ApplicantsInfo::where('user_id', $user_id)->first();
        return view('applicants/upload-resume1', compact('applicantInfo'));
        } else {
        return view('applicants/upload-resume1');
    }
}
public function applicants_edu (Request $req){
    $user_id = auth()->user()->id;
    if(ApplicantsEducation::where('user_id', $user_id)){
    $applicantEdu = ApplicantsEducation::where('user_id', $user_id)->first();
    return view('applicants/upload-resume2', compact('applicantEdu'));
    } else {
    return view('applicants/upload-resume2');
}
}
 public function applicants_skills (Request $req){
    $user_id = auth()->user()->id;
    // if(ApplicantsEducation::where('user_id', $user_id)){
    //     $applicantEdu = ApplicantsEducation::where('user_id', $user_id)->first();
    //     return view('applicants/upload-resume3', compact('applicantEdu'));
    //     } else {
        return view('applicants/upload-resume3');
    // }
 }
}
