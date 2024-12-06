<?php
use App\http\Controllers\ScheduleController;

Route::get("./schedules",[ScheduleController::class,"index"]);
