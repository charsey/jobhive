<?php

namespace App\Http\Controllers\Socialite;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Googleauth extends Controller
{
    public function auth(){
         


        $user = Socialite::driver('google')->user();
    }


    
}
