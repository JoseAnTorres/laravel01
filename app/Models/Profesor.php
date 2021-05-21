<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'apellidos', 'email', 'localidad', 'asignatura_id'];

    public static function array(){
        $profesor=Asignatura::orderBy('nombre')->get();
        $array=[];
        foreach($profesor as $item){
            $array[$item->id]=$item->nombre;
        }
        return $array;
    }

    public function asignatura(){
        return $this->belongsTo(Asignatura::class);
    }
}
