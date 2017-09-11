<?php

namespace App\Http\Controllers;

use App\Notificaciones;

use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    public function all(){
    	$list = Notificaciones::all();
    	return $list;
    } 

    public function une($id){
    	$list = Notificaciones::where('id',$id)->get();
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
            Notificaciones::create(request(['usuario','email','mensaje','medio']));
        }    
        elseif(request('actualizar')=='s'){
            $notificacion = Notificaciones::find(request('id'));
            $notificacion->usuario = request('usuario');
            $notificacion->email = request('email');
            $notificacion->mensaje = request('mensaje');
            $notificacion->medio = request('medio');
            $notificacion->save();
        }	
        elseif(request('eliminar')=='s'){
            $notificacion = Notificaciones::find(request('id'));
            $notificacion->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/notificacion');
    }
}
