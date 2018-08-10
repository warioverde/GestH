<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';

    protected $fillable = [
        'cant_camas', 'estado_habitacion'
    ];
    public function rents(){
        return $this->belongsTo('App\Rent','room_id');
    }
    
}
