<?php

namespace App\Http\Controllers\Applicants;
use App\Models\ApplicantsEducation;
use App\Models\ApplicantsInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ApplicantsEducationController extends Controller
{
    public function applicants_edu(Request $req):RedirectResponse
    {
        $user_id = auth()->user()->id;
       
        if(ApplicantsInfo::where('user_id',$user_id))
        {
            $applicants_edu = new ApplicantsEducation;
            $applicants_edu->user_id = $user_id;
            $applicants_edu->education_level = $req->edu_level;
            $applicants_edu->field_of_study = $req->field_of_study;
            $applicants_edu->school = $req->school;
            $applicants_edu->school_address = $req->school_address;
            $applicants_edu->studied_from_month = $req->studied_from_month;
            $applicants_edu->studied_from_year = $req->studied_from_year;
            $applicants_edu->studied_to_month = $req->studied_to_month;
            $applicants_edu->studied_to_year = $req->studied_to_year;
            $applicants_edu->save();
            return redirect('work-experience');
    
        }else{

            return redirect('work-experience');
               
    }

  
    }

}
