<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function home_page()
    {
        return view('home.home_page');
    }

    public function tes_ajax(Request $request)
    {
        $dr = ['status' => 'wrongPassword'];
        return \Response::json($dr);
    }
}
