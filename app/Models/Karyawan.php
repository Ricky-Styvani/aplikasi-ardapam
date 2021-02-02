<?php

namespace App\Models;


use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class Karyawan extends Model
{
    protected $table ='karyawans';
    protected $guarded=[];
    //use AutoNumberTrait;
    use HasApiTokens;

    
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

class Karyawan extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/
    protected $table ='karyawans';
    protected $guarded=[];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
