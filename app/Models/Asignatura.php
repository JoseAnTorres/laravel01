<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'creditos'];

    public static function array(){
        $asignatura=Asignatura::orderBy('nombre')->get();
        $array=[];
        foreach($asignatura as $item){
            $array[$item->id]=$item->nombre;
        }
        return $array;
    }

    public function profesores(){
        return $this->hasMany(Profesor::class);
    }
}
