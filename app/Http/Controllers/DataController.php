<?php

namespace App\Http\Controllers;


use App\Models\PlasticMonitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DataController extends Controller
{
    public function selectLastPlastic(){
        //return DB::table('plastic_monitor')->orderBy('log_id', 'desc')->limit(1)->pluck('total_weight_in_kg');
        //$result = DB::table('plastic_monitor')->orderBy('log_id', 'desc')->limit(1)->pluck('total_weight_in_kg');

        $result = PlasticMonitor::latest()->first();    
        $compute = $result * 0.1;

        return view("radial-test",compact('compute'));

    }
}
