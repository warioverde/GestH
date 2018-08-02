<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fecha_entrada_arriendo', 'hora_entrada_arriendo', 'fechaSalidaArriendo','hora_salida_arriendo','pago'
    ];

    public function clients(){
        return $this->belongsTo('App\Client','client_id');
    }
    

}
