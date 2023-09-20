<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Libro;

class PrestamosController extends Controller
{
    public function showFormAddPrestamo(){
        $titulo = 'Hacer préstamo';
        return view('libreria/addPrestamo_Form', compact('titulo'));
    }

    public function addPrestamoForm(Request $request){
        $id_prestamo = Prestamo::create($request);
        return view('libreria/addPrestamoOk_Form', ['id' => $id_prestamo]);
    }

    public function showAllPrestamos(){
        $prestamos = Prestamo::allPrestamo();
        return view('libreria/showPrestamo')->with('prestamos', $prestamos);
    }

    public function updatePrestamoForm($id){
        $prestamo = Libro::findBooksID($id);
        Session::flash('id', $id);
        return view('libreria/addPrestamo_Form', compact('prestamo'));
    }

    public function updatePrestamo(Request $request){
        $id = Session::get('id');
        Prestamo::updatedID($id, $request);
        return Redirect::to('/showPrestamo');
    }

    public function updateDevolucionForm($id){
        $prestamo = Prestamo::findPrestamosID($id);
        Session::flash('id', $id);
        return view('libreria/addDevolucion_Form', compact('prestamo'));
    }

    public function addDevolucion(Request $request){
        $id_prestamo = Prestamo::create($request);
        return view('libreria/addDevolucion_Form', ['id' => $id_prestamo]);
    }
    
}
