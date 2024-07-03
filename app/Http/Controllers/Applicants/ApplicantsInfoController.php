<?php

namespace App\Http\Controllers\Applicants;
use App\Models\ApplicantsInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ApplicantsInfoController extends Controller
{
    public function saveone(Request $req): RedirectResponse
    {
        $user_id = auth()->user()->id;
        $applicants_info = ApplicantsInfo::where('user_id', $user_id)->first();
        if ($applicants_info)
        {
            
          
            $applicants_info->d_o_b = $req->d_o_b;
            $applicants_info->phone_no = $req->phone_no;
            $applicants_info->country = $req->country;
            $applicants_info->city = $req->city;
            $applicants_info->address = $req->address;
            $applicants_info->user_id = $user_id;
            $applicants_info->save();

            return redirect('upload-education');
        }else{


        $applicants_info = new ApplicantsInfo;
        $applicants_info->d_o_b = $req->d_o_b;
        $applicants_info->phone_no = $req->phone_no;
        $applicants_info->country = $req->country;
        $applicants_info->city = $req->city;
        $applicants_info->address = $req->address;
        $applicants_info->user_id = $user_id;
        $applicants_info->save();
        return redirect('upload-education');
        
    }
}
}


 