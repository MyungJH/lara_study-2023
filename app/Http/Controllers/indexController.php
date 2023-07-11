<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;


class indexController extends Controller
{
    public function index()
    {
        $peopele_id_list = DB::table('people') -> select('id', 'name') -> get('id');

        $start_btn_state = false;

        return view('index', ['peopele_id_list' => $peopele_id_list,
                                'start_btn_state' => $start_btn_state]);
    }

    public function gotoready($id)
    {
        $people = \App\Models\People::findOrFail($id);

        return view('gotoready') -> with(['people' => $people]);
    }

    public function update(Request $request, $id)
    {
        $people = \App\Models\People::findOrFail($id);

        $people->sensing_interval = $request->sensing_interval;
        $people->sim_interval = $request->sim_interval;
        $people->predict_interval = $request->predict_interval;

        $people->save();

        $peopele_id_list = DB::table('people') -> select('id', 'name') -> get('id');
        $start_btn_state = $request -> has('gotoready-btn');

        return view('index', compact('peopele_id_list', 'start_btn_state'));
    }
}