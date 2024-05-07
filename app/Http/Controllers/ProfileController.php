<?php

namespace App\Http\Controllers;

use App\Models\Admin;


class ProfileController extends Controller
{
    public function profile()
    {
        
        return view('tampilan.profile');
        
    }
    
   
}
