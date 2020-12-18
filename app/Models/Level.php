<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table ='levels';
    protected $guarded=[];
    public function karyawans(){
        return $this->hasMany(Karyawan::class,'level');
    }
}
