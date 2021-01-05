<?php

namespace App\Http\Controllers\catat;
use App\Models\{Pelanggan};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PelangganResource;
class CatatController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return PelangganResource::make($pelanggan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        sleep(1);
        request()->validate([
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'meter_awal'=>'required',
            'meter_akhir' =>'required',

        ]);
        $pelanggan->update([
            'id_pelanggan' => request('id_pelanggan'),
            'nama' =>request ('nama'),
            'meter_awal' =>request ('meter_awal'),
            'meter_akhir' => request('meter_akhir'),
            
        ]);

        return response()->json([
            'massage'=>'your update pelanggan success',
            'request'=>$request,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
