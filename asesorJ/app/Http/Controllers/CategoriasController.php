<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categorias;

class CategoriasController extends Controller
{
    public function all(){
    	$list = Categorias::all();
    	return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    } 

    public function une($id){
    	$list = Categorias::where('id',$id)->get();
		return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }

    public function store(){
    	//dd(request()->all()); request son los datos que llegan del post
    	/*$categoria = new Categorias;
    	$categoria->nombre = request('nombre');
    	$categoria->descripcion = request('descripcion');
    	$categoria->save();*/

        //verificar si el post es para eliminar, guardar o actializar
        if(request('guardar')=='s'){
            Categorias::create(request(['nombre','descripcion','administrador']));
        }    
        elseif(request('actualizar')=='s'){
            $categoria = Categorias::find(request('id'));
            $categoria->nombre = request('nombre');
            $categoria->descripcion = request('descripcion');
            $categoria->administrador = request('administrador');
            $categoria->save();
        }	
        elseif(request('eliminar')=='s'){
            $categoria = Categorias::find(request('id'));
            $categoria->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/categorias');
    }
}
