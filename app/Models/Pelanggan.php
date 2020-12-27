<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table ='pelanggans';
    protected $guarded=[];
    protected $primaryKey = 'id_pelanggan';

    public function meteran(){
        return $this->belongsTo(Meteran::class,'id_pelanggan');
    }
}
