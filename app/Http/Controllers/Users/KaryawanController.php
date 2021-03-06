<?php

namespace App\Http\Controllers\Users;

use App\Models\{Karyawan,Level};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KaryawanResource;
use Validator;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post = Karyawan::with('level')->latest()->get();
        $resource =KaryawanResource::collection($post);
        return $resource;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       sleep(1);
        request()->validate([
            'id_karyawan' => 'required',
            'name' => 'required',
            'password' => 'required',
            'level' => 'required',
            'no_telp' => 'required',

        ]);
        

        $level= Level::findOrFail(request('level'));
       $request= Karyawan::create([
            'id_karyawan' =>request ('id_karyawan'),
            'name' => request('name'),
            'password' => request('password'),
            'level_id' => $level->id,
            'no_telp' => request('no_telp'),
            
        ]);

        return response()->json([
            'massage'=>'your create karyawan success',
            'request'=>$request,
        ]);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return KaryawanResource::make($karyawan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        sleep(1);
        request()->validate([
            'id_karyawan' => 'required',
            'name' => 'required',
            'password' => 'required',
            'level' => 'required',
            'no_telp' => 'required',

        ]);
        $level= Level::findOrFail(request('level'));
        $karyawan->update([
            'id_karyawan' =>request ('id_karyawan'),
            'name' => request('name'),
            'password' => request('password'),
            'level_id' => $level->id,
            'no_telp' => request('no_telp'),
            
        ]);

        return response()->json([
            'massage'=>'your update karyawan success',
            'request'=>$request,
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return response()->json([
            'massage'=>'your delete karyawan success',

        ], 200);
    }

    
}
