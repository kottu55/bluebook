<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function __invoke(){
        return date("Y/m/d H:i:s");
    }
}
