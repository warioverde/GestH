<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut', 'nombre_cliente', 'apellido_cliente','acompanantes'
    ];

    public function rents(){
        return $this->hasMany('App\Rent','client_id');
    }
}

