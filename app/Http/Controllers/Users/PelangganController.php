<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\{Pelanggan,Meteran};
use Illuminate\Http\Request;
use App\Http\Resources\PelangganResource;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Pelanggan::latest()->get();
        $resource =PelangganResource::collection($post);
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
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'no_telp' => 'required',
            'id_alamat' => 'required',
            'token'=> 'required'

        ]);
        
       $request=Pelanggan::create([
            'id_pelanggan' =>request ('id_pelanggan'),
            'nama' => request('nama'),
            'password' => request('password'),
            'id_alamat' => request('id_alamat'),
            'no_telp' => request('no_telp'),
            'token' =>request ('token'),
        ]);
         
       

        return response()->json([
            'massage'=>'your create pelanggan success',
            'request'=>$request,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return PelangganResource::make($pelanggan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        sleep(1);
        request()->validate([
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'no_telp' => 'required',
            'id_alamat' => 'required',
            'token'=> 'required',

        ]);
        $pelanggan->update([
            'id_pelanggan' =>request ('id_pelanggan'),
            'nama' => request('nama'),
            'password' => request('password'),
            'id_alamat' => request('id_alamat'),
            'no_telp' => request('no_telp'),
            'token' =>request ('token')
            
        ]);

        return response()->json([
            'massage'=>'your update pelanggan success',
            'request'=>$request,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        return response()->json([
            'massage'=>'your delete pelanggan success',

        ], 200);
    }
}
