<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meteran extends Model
{
    protected $table ='meterans';
    protected $guarded=[];

    public function pelanggans(){
        return $this->hasMany(Pelanggan::class,'token');
    }
}
