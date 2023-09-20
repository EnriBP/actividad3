<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Prestamo;

class Libro extends Model
{
    use HasFactory;

    public function prestamos(){
        return $this->belongsTo(Prestamo::class, 'libro_id', 'id');
    }
    
    public static function create(Request $request){
        
        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->año_publicacion = $request->año_publicacion;
        $libro->genero = $request->genero;
        $libro->disponible = $request->disponible;
        $libro->save();

        return $libro->id;
    }

    public static function updatedID($id, Request $request){
        $libro = Libro::find($id);
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->año_publicacion = $request->año_publicacion;
        $libro->genero = $request->genero;
        $libro->disponible = $request->disponible;
        $libro->save();
    }

    public static function destroy($id){
        $libro = Libro::find($id);
        $libro->delete();
    }

    public static function allBook(){
        return Libro::all();
    }

    public static function findBooksID($id){
        return Libro::find($id);
    }

    public static function findDisponible($disponible){
        return Libro::where('disponible', '=', $disponible)->get();
    }
}
