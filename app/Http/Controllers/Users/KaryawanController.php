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
    public function index()
    {
        $request = Karyawan::with('level')->latest()->get();
        return KaryawanResource::collection($request);
           
        /*   return response()->json(Karyawan::all()); return karyawan::latest()->get();
         $q = $request->input('q'); Request $request, Karyawan $karyawans

        $karyawans = $karyawanss-> when($q, function($query) use ($q){
                    return $query->where ('name','like','%'.$q.'%')
                                ->orWhere ('email','like','%'.$q.'%');
                })
                ->paginate(10);
        $request = $request->all();
        return view('dashboard/user/list',[
            'users'     => $users,
            'request'   => $request,
            'active'    => $active
         ]);
         */
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
       /* $validator = VALIDATOR::make($request->all(), [
            'id_karyawan' => 'required',
            'name' => 'required',
            'password' => 'required',
            'level' => 'required',
            'id_karyawan' => 'required',

        ]);
        */
       
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
        //
    }
}
