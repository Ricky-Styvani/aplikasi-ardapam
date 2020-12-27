<?php

namespace App\Http\Controllers\Users;
use App\Models\Meteran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeteranController extends Controller
{
    public function index(){
        return Meteran::get();
    }

    public function store(Request $request)
    {
        sleep(1);
        request()->validate([
            'id_pelanggan' => 'required',
            'token'=> 'required'

        ]);
        

       $request=Meteran::create([
            'id_pelanggan' =>request ('id_pelanggan'),
            'token' =>request ('token'),
       ]);
       

        return response()->json([
            'massage'=>'your create pelanggan success',
            'request'=>$request,

        ]);
    }
}
