<?php

namespace App\Http\Controllers;

use App\Respuestas;

use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    public function all(){
    	$list = Respuestas::all();
    	return $list;
    } 

    public function une($id){
    	$list = Respuestas::where('id',$id)->get();
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
            Respuestas::create(request(['usuario','email','push_token','categoria','cuerpo','pregunta']));
        }    
        elseif(request('actualizar')=='s'){
            $respuestas = Respuestas::find(request('id'));
            $respuestas->usuario = request('usuario');
            $respuestas->email = request('email');
            $respuestas->push_token = request('push_token');
            $respuestas->categoria = request('categoria');
            $respuestas->cuerpo = request('cuerpo');
            $respuestas->categoria = request('pregunta');
            $respuestas->save();
        }	
        elseif(request('eliminar')=='s'){
            $respuestas = Respuestas::find(request('id'));
            $respuestas->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/respuestas');
    }
}
