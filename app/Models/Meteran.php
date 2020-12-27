<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meteran extends Model
{
    protected $table ='meterans';
    protected $guarded=[];
    protected $primaryKey = 'id_pelanggan';

    public function pelanggans(){
        return $this->hasOne(Pelanggan::class);
    }
}
