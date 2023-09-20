<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\User;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = ('prestamos');

    public function libro(){
        return $this->belongsTo(Libro::class, 'libro_id', 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public static function create(Request $request){
        $prestamo = new Prestamo();
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->save();

        return $prestamo->id;
    }

    public static function updatedID($id, Request $request){
        $prestamo = Prestamo::find($id);
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->save();
    }

    public static function destroy($id){
        $prestamo = Prestamo::find($id);
        $prestamo->delete();
    }

    public static function allPrestamo(){
        return prestamo::all();
    }

    public static function findPrestamosID($id){
        return prestamo::find($id);
    }
}
