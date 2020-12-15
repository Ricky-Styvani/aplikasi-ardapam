<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PelangganResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_pelanggan' => $this->id_pelanggan,
            'token' => $this->token,
            'nama' => $this->nama,
            'password' => $this->password,
            'no_telp' => $this->no_telp,
            'id_alamat'=> $this->id_alamat,
            'updated_at' => $this->updated_at->format('d F, Y'),
            //'deleted_at' => $this->deleted_at->format('d F, Y'),
            'link' => route('pelanggans.show',$this->nama),
           // 'link' => route('karyawans.show',$this->id_karyawan),
        ];
        //return parent::toArray($request);
    }
}
