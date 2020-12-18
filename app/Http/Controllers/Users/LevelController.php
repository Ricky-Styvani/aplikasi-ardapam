<?php

namespace App\Http\Controllers\Users;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    public function index(){
        return Level::get();
    }
}
