<?php

namespace App\Http\Controllers\Profile;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\profile_picture;
use App\Models\ApplicantsInfo;
 
class ProfileController extends Controller
{
   
    public function profile (Request $req)



    {
    $user_id = auth()->user()->id;
    $info= User::where('id', $user_id)->first();
     $user= User::where('id', $user_id)->first();
     return view('profile/profile', ['user' => $user, 'info'=>$info]);
    }

    public function save_changes(Request $req){
        $user_id = auth()->user()->id;
        $user=User::where('id', $user_id)->first();
   
        if($user){
            $pass= $req->pass1;
            $passn= $req->pass2;
            $passc= $req->pass3;
            if($pass && $passn && $passc){
                $enteredPassword = $req->pass1; // The password entered by the user
$storedHashedPassword = $user->password; // The hashed password stored in the database


if (password_verify($enteredPassword, $storedHashedPassword)) {
    if($passn==$passc){
        $password=password_hash($passn, PASSWORD_DEFAULT);
        $user->name= $req->name;
        $user->sname= $req->sname;
        $user->lname= $req->lname;
        $user->gender= $req->gender;
        $user->email= $req->email;
        $user->password= $password; 
        $user->account_type= $req->account_type;

        $user->save();
        $req->session()->flash('saved','saved details');
        return redirect('profile-settings');

    }else{
        $req->session()->flash('dintmatch_password','passwords dint match');
        return redirect('profile-settings');
    }
} else {
                $req->session()->flash('wrong_password','wrong password');
                return redirect('profile-settings');
}

               
            }else{
                $user->name= $req->name;
                $user->sname= $req->sname;
                $user->lname= $req->lname;
                $user->gender= $req->gender;
                $user->email= $req->email;
                 $user->account_type= $req->account_type;

                $user->save();
                $message="saved";
                $req->session()->flash('status', $message);
                return redirect('profile-settings');
            }
          
        }        
    }
}
