<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    //listar autores
    public function index(){
        $autors=Autor::get();
        return $autors;
    }
    //ver un autor
    public function show($id){
        $autors = Autor::find($id);
        if (is_null($autors)){
            return 'El autor buscado no existe';
        }
        return $autors;
    }
    //crear un autor
    public function store(Request $request){
        
        $params = $request->all();
        $autors = Autor::create([
            'nombre'=>$params['nombre']
        ]);
        return $autors;
    }
    # Actualizar autor
    public function update($id, Request $request)
    {
        $params = $request->all();
        $autors = Autor::find($id)->update([
            'nombre' => $params['nombre'],
        ]);

        return $autors ? 'El Autor fue actualizado.': 'Error al actualizar.';
    }

    # Eliminar un autor
    public function destroy($id)
    {
        $autors = Autor::find($id)->delete();

        if ($autors) {
            return 'Autor eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}