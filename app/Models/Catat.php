<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Catat extends Model
{
    protected $table ='transaksis';
    protected $guarded=[];
    use AutoNumberTrait;
    public function pelanggans(){
        return $this->hasMany(Pelanggan::class,'id_pelanggan');
    }

    public function getAutoNumberOptions()
    {
        return [
            'id_transaksi' => [
                'format' => function () {
                    return '5'.date('ym').'?';
                    // autonumber format. '?' will be replaced with the generated number.
                },
                'length' => 4 // The number of digits in the autonumber
            ],

        ];
        
    }
}
