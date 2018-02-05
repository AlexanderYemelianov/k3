<?php

namespace App\Http\Controllers;

use App\RegistrationLogs;

class RegistrationLogsController extends Controller
{
    public function showRegistrationLog()
    {
        dd(RegistrationLogs::all());
    }
}
