<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tipousuarios;

class TipousuariosController extends Controller
{
    public function all(){
    	$list = Tipousuarios::all();
    	return $list;
    } 

    public function une($id){
    	$list = Tipousuarios::where('id',$id)->get();
		return $list;
    }

    public function store(){
    	//dd(request()->all()); request son los datos que llegan del post
    	/*$categoria = new Categorias;
    	$categoria->nombre = request('nombre');
    	$categoria->descripcion = request('descripcion');
    	$categoria->save();*/

        //verificar si el post es para eliminar, guardar o actializar
        if(request('guardar')=='s'){
            Tipousuarios::create(request(['nombre','descripcion']));
        }    
        elseif(request('actualizar')=='s'){
            $tipoUsuario = Tipousuarios::find(request('id'));
            $tipoUsuario->nombre = request('nombre');
            $tipoUsuario->descripcion = request('descripcion');
            $tipoUsuario->save();
        }	
        elseif(request('eliminar')=='s'){
            $tipoUsuario = Tipousuarios::find(request('id'));
            $tipoUsuario->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/tipoUsuario');
    }
}
