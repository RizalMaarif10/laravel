<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class UpdateMerchController extends Controller
{
    public function update($id)
    {
        $merchant = Merchant::find($id);
        return view('tampilan.updatemerch', compact('merchant'));
    }
}
