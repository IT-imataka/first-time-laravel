<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    //
    public function tasks(){
        $schedules = Schedules::all();
        return response()->json($schedules);
    }
}
