<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catat extends Model
{
    protected $table ='transaksis';
    protected $guarded=[];
    protected $primaryKey= 'id_pelanggan';
    public function pelanggans(){
        return $this->hasOne(Pelanggan::class);
    }
}
