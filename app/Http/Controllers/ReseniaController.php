<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resenia;

class ReseniaController extends Controller
{
    //listar resenias
    public function index(){
        $resenias=Resenia::get();
        return $resenias;
    }
    //ver un resenias
    public function show($id){
        $resenias = Resenia::find($id);
        if (is_null($resenias)){
            return 'La Resenia buscado no existe';
        }
        return $resenias;
    }
    //crear un resenias
    public function store(Request $request){
        
        $params = $request->all();
        $resenias = Resenia::create([
            'descripcion'=>$params['descripcion']
        ]);
        return $resenias;
    }
    # Actualizar resenias
    public function update($id, Request $request)
    {
        $params = $request->all();
        $resenias = Resenia::find($id)->update([
            'descripcion' => $params['descripcion']
        ]);

        return $resenias ? 'El Resenia fue actualizado.': 'Error al actualizar.';
    }

    # Eliminar un resenias
    public function destroy($id)
    {
        $resenias = Resenia::find($id)->delete();

        if ($resenias) {
            return 'Resenia eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}