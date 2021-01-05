<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table ='pelanggans';
    protected $guarded=[];
    protected $primaryKey= 'id_pelanggan';

    public function catat(){
        return $this->belongsTo(Catat::class,'id_pelanggan');
    }

}
