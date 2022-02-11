<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::user()->id)->get();
        //$checkouts = Checkout::with('Camps')->where('user_id', Auth::user()->id)->get();
        $data = array(
            'checkouts' => $checkouts
        );
        return view('user.dashboard', $data);
    }
}
