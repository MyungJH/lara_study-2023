<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class NewController extends Controller
{
    public function index()
    {
        return view('new');
    }

    public function add(Request $request)
    {
        $people = new \App\Models\People;
        $people->name = $request->name; // $requestはnew.bladeファイルのnameを受け取る
        $people->sensing_interval = $request->sensing_interval;
        $people->sim_interval = $request->sim_interval;
        $people->predict_interval = $request->predict_interval;
        $people->save();

        // return view('setting');
        return \redirect() -> to('setting');
    }
}