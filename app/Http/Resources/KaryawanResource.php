<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResource extends JsonResource
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
            'name' => $this->name,
            'password' => $this->password,
            'id_karyawan' => $this->id_karyawan,
            'no_telp' => $this->no_telp,
            'level_id'=> $this->level->id,
            'level' => $this->level->slug,
            'updated_at' => $this->updated_at->format('d F, Y'),
            'link' => route('karyawans.show',$this->name),
        ];
        //parent::toArray($request);
    }
}
