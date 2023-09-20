<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LibrosController extends Controller
{
    public function showFormAddBook(){
        $titulo = 'Añadir libro';
        return view('libreria/addBook_Form', compact('titulo'));
    }

    public function addBookForm(Request $request){
        $id_libro = Libro::create($request);
        return view('libreria/addBookOk_Form', ['id' => $id_libro]);
    }

    public function showAllBooks(){
        $libros = Libro::allBook();
        return view('libreria/showBooks')->with('libros', $libros);
    }

    public function deleteBook($id){
        Libro::destroy($id);
        return Redirect::to('/showBooks');
    }

    public function updateBookForm($id){
        $libro = Libro::findBooksID($id);
        Session::flash('id', $id);
        return view('libreria/showBookForm', compact('libro'));
    }

    public function updateBook(Request $request){
        $id = Session::get('id');
        Libro::updatedID($id, $request);
        return Redirect::to('/showBooks');
    }
}
