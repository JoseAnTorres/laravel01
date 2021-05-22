<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'apellidos', 'email', 'localidad'];

    public static function array(){
        $profesor=Profesor::orderBy('email')->get();
        $array=[];
        foreach($profesor as $item){
            $array[$item->id]=$item->email;
        }
        return $array;
    }

    public function asignaturas(){
        return $this->hasMany(Asignatura::class);
    }
}
