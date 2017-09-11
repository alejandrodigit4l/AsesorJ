<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Categorias;
use App\Preguntas;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function all(){
    	$list = Preguntas::all();
    	return $list;
    } 

    public function une($id){
    	$list = Preguntas::where('id',$id)->get();
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
            Preguntas::create(request(['usuario','email','push_token','titulo','cuerpo','categoria','estado','cantidad']));
        }    
        elseif(request('actualizar')=='s'){
            $preguntas = Preguntas::find(request('id'));
            $preguntas->usuario = request('usuario');
            $preguntas->email = request('email');
            $preguntas->push_token = request('push_token');
            $preguntas->titulo = request('titulo');
            $preguntas->cuerpo = request('cuerpo');
            $preguntas->categoria = request('categoria');
            $preguntas->estado = "No visto";
            $preguntas->cantidad = 0;
            $preguntas->save();
        }	
        elseif(request('eliminar')=='s'){
            $preguntas = Preguntas::find(request('id'));
            $preguntas->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/preguntas');
    }

/*
|--------------------------------------------------------------------------
| APP route
|--------------------------------------------------------------------------
|
| Usuarios estan en el controlador llamadas por Route::get()
|
*/
    public function getAll(){
        $preguntas = Preguntas::all();
        $list = array();
        foreach ($preguntas as $pregunta) {
            $usuario = Usuarios::where('id',$pregunta['usuario'])->get();//traer datos del usuario
            $categoria = Categorias::where('id',$pregunta['categoria'])->get();//traer datos del catalogo 
            $pregunta['usuario'] = $usuario;  
            $pregunta['categoria'] = $categoria;  
            array_push($list, $pregunta);         
        }
        return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }

    public function getPreguntasregular($categoria){
        $preguntas = Preguntas::where('categoria',$categoria)->get();
        $list = array();
        foreach ($preguntas as $pregunta) {
            $usuario = Usuarios::where('id',$pregunta['usuario'])->get();//traer datos del usuario
            $categoria = Categorias::where('id',$pregunta['categoria'])->get();//traer datos del catalogo 
            $pregunta['usuario'] = $usuario;  
            $pregunta['categoria'] = $categoria;  
            array_push($list, $pregunta);         
        }
        return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }

    public function getPreguntasUsuario($user){
        $preguntas = Preguntas::where('usuario',$user)->get();
        $list = array();
        foreach ($preguntas as $pregunta) {
            $usuario = Usuarios::where('id',$pregunta['usuario'])->get();//traer datos del usuario
            $categoria = Categorias::where('id',$pregunta['categoria'])->get();//traer datos del catalogo 
            $pregunta['usuario'] = $usuario;  
            $pregunta['categoria'] = $categoria;  
            array_push($list, $pregunta);         
        }
        return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }
}
