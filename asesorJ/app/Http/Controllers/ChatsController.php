<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chats;

class ChatsController extends Controller
{
    public function all(){
    	$list = Chats::all();
    	return $list;
    } 

    public function une($id){
    	$list = Chats::where('id',$id)->get();
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
            Chats::create(request(['receptor','emisor','titulo','message','estado','send_email']));
        }    
        elseif(request('actualizar')=='s'){
            $chat = Chats::find(request('id'));
            $chat->receptor = request('receptor');
            $chat->emisor = request('emisor');
            $chat->titulo = request('titulo');
            $chat->message = request('message');
            $chat->estado = request('estado');
            $chat->send_email = request('send_email');
            $chat->save();
        }	
        elseif(request('eliminar')=='s'){
            $chat = Chats::find(request('id'));
            $chat->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/chat');
    }
}
