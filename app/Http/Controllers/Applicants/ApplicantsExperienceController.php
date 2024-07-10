<?php

namespace App\Http\Controllers\Applicants;
use App\Models\ApplicantsExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ApplicantsExperienceController extends Controller
{
    public function save(Request $req): RedirectResponse
    {
        $user_id = auth()->user()->id;
        $applicantsExp = ApplicantsExperience::where('user_id', $user_id)->first();
        if ($applicantsExp)
        {
            $applicantsExp->job_tittle = $req->job_tittle;
            $applicantsExp->country = $req->country;
            $applicantsExp->activity_field = $req->activity_field;
            $applicantsExp->city = $req->city;
            $applicantsExp->company_name = $req->company_name;
            $applicantsExp->worked_from_month = $req->worked_from_month;
            $applicantsExp->worked_from_year = $req->worked_from_year;
            $applicantsExp->worked_to_month = $req->worked_to_month;
            $applicantsExp->worked_to_year = $req->worked_to_year;
            $applicantsExp->job_description = $req->job_description;
            $applicantsExp->user_id = $user_id;   
            $applicantsExp->save();
            return redirect ('review');
        }else{


        $applicantsExp = new ApplicantsExperience;
        $applicantsExp->job_tittle = $req->job_tittle;
        $applicantsExp->country = $req->country;
        $applicantsExp->activity_field = $req->activity_field;
        $applicantsExp->city = $req->city;
        $applicantsExp->company_name = $req->company_name;
        $applicantsExp->worked_from_month = $req->worked_from_month;
        $applicantsExp->worked_from_year = $req->worked_from_year;
        $applicantsExp->worked_to_month = $req->worked_to_month;
        $applicantsExp->worked_to_year = $req->worked_to_year;
        $applicantsExp->job_description = $req->job_description;
        $applicantsExp->user_id = $user_id;   
        $applicantsExp->save();
         return redirect('review');
         
        
    }
}
}
