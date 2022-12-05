<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class PlasticMonitor extends Model
{
    use HasFactory;
    static function getUserData(){
        $value = DB::table('plastic_monitor')->orderBy('id','asc')->get();
        return $value;
    }
}
