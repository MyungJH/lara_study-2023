<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\indexController;

class ModifyController extends Controller
{
    public function modify($id)
    {
        $people = \App\Models\People::findOrFail($id);

        return view('modify') -> with(['people' => $people]);
    }

    public function modify_finish(Request $request, $id)
    {
        $people = \App\Models\People::findOrFail($id);  //findOrFail : 一致するidが見つからなかった場合は、エラーを返す

        $people->name = $request->name;
        $people->sensing_interval = $request->sensing_interval;
        $people->sim_interval = $request->sim_interval;
        $people->predict_interval = $request->predict_interval;

        $people->save();

        return redirect('setting');
    }
}