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
            'id_karyawan' => $this->id_karyawan,
            'no_telp' => $this->no_telp,
            'level' => $this->level,
            'updated_at' => $this->updated_at,
        ];
        //parent::toArray($request);
    }
}
