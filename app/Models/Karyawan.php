<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Karyawan extends Model
{
    protected $table ='karyawans';
    protected $guarded=[];
    //use AutoNumberTrait;

    
    public function level(){
        return $this->belongsTo(Level::class);
    }

    /*public function getAutoNumberOptions()
    {
        "return [
            'id_karyawan' => [
                'format' => function () {
                    return date('ym').'174'.'?';
                    // autonumber format. '?' will be replaced with the generated number.
                },
                'length' => 4 // The number of digits in the autonumber
            ],

        ];
        
    }
    */
    

}
