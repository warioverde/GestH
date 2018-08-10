<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fecha_entrada_arriendo', 'fecha_salida_arriendo','pago','client_id','room_id'
    ];

    public function clients(){
        return $this->belongsTo('App\Client','client_id');
    }
    public function rooms(){
        return $this->belongsTo('App\Room','room_id');
    }
    

}
