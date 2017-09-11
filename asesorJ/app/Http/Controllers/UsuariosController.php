<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;
use App\TipoUsuarios;
use App\Categorias;
use App\Historiales;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class UsuariosController extends Controller
{
    public function all(){
    	$list = Usuarios::all();
    	return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    } 

    public function une($id){
    	$list = Usuarios::where('id',$id)->get();
		return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }

    public function getAbogados(){
        $usuarios = Usuarios::where('tipo_usuario','3')->get();
        $list = array();
        foreach ($usuarios as $usuario) {
            $tipoUsuario = TipoUsuarios::where('id',$usuario['tipo_usuario'])->get();//traer datos del catalogo  
            $categoria = Categorias::where('id',$usuario['categoria'])->get();
            $usuario['tipo_usuario'] = $tipoUsuario;  
            $usuario['categoria'] = $categoria;
            array_push($list, $usuario);         
        }
        return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias',
                'body' => $list
            ]);
    }

    public function getUser(){
        $usuarios = Usuarios::where('tipo_usuario','1')->get();
        $list = array();
        foreach ($usuarios as $usuario) {
            $tipo_usuario = TipoUsuarios::where('id',$usuario['tipo_usuario'])->get();//traer datos del catalogo  
            $usuario['tipo_usuario'] = $tipo_usuario;  
            array_push($list, $usuario);         
        }
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
            Usuarios::create(request(['nombres','email','clave','telefono','celular','push_token','categoria','tipo_usuario','terminos','img']));
        }    
        elseif(request('actualizar')=='s'){
            $usuarios = Usuarios::find(request('id'));
            $usuarios->nombres = request('nombres');
            $usuarios->email = request('email');
            $usuarios->clave = request('clave');
            $usuarios->telefono = request('telefono');
            $usuarios->celular = request('celular');
            $usuarios->push_token = request('push_token');
            $usuarios->categoria = request('categoria');
            $usuarios->tipo_usuario = request('tipo_usuario');
            $usuarios->terminos = request('terminos');
            $usuarios->img = request('img');
            $usuarios->save();
        }	
        elseif(request('eliminar')=='s'){
            $usuarios = Usuarios::find(request('id'));
            $usuarios->delete();
        }
    	//Categorias::create(request()->all());

    	return redirect('/usuarios');
    }

    public function pruebaEmail(){
        Mail::send('emails.welcome', ['name' => 'AsesorJuridico'], function(Message $message){
            $message->to('fredymoreno@uan.edu.co', 'alejandro moreno')
                    ->from('admin@asesorjuridico.com','Asesorjuridico')
                    ->subject('Bienvenido a Asesor Juridico');
        });
    }


/*
|--------------------------------------------------------------------------
| APP route
|--------------------------------------------------------------------------
|
| Usuarios estan en el controlador llamadas por Route::..Appusuarios()
|
*/

    public function create(){
        //creacion de usuario desde app
        return Usuarios::create(request(['nombres','email','clave','telefono','celular','push_token','categoria','tipo_usuario','terminos','img']));
        //Envio por correo
        /*return Mail::send('emails.welcome', ['name' => 'AsesorJuridico'], function(Message $message){
            $message->to(request('email'), request('nombres'))
                    ->from('admin@asesorjuridico.com','Asesorjuridico')
                    ->subject('Bienvenido a Asesor Juridico');
        });*/
    }

    public function update(){
        $usuarios = Usuarios::find(request('id'));
        $usuarios->nombres = request('nombres');
        $usuarios->email = request('email');
        $usuarios->clave = request('clave');
        $usuarios->telefono = request('telefono');
        $usuarios->celular = request('celular');
        $usuarios->push_token = request('push_token');
        $usuarios->categoria = request('categoria');
        $usuarios->tipo_usuario = request('tipo_usuario');
        $usuarios->terminos = request('terminos');
        $usuarios->img = request('img');
        return $usuarios->save();  
    }

    public function delete(){
        $usuarios = Usuarios::find(request('id'));
        return $usuarios->delete();
    }

    public function getToken(){
        return ['token'=>csrf_token()];
    }

    public function login(){
        $list = Usuarios::where('email','=',request('email'))->where('clave','=',request('password'))->get();
        if(!empty($list[0])){
            //guardar el registro del login
            $historiales = new Historiales;
            $historiales->usuario = $list[0]->id;
            $historiales->sentencia = 'Login';
            $historiales->save();
            //respuesta JSON
            return response()->json([
                'Status' => 'successful',
                'Message' => 'Se encontraron coincidencias importantes',
                'body' => $list
            ]);
        }
        else{
            return response()->json([
                'Status' => 'error',
                'Message' => 'No se encuentra usuario',
                'body' => $list
            ]);
        }
    }

    public function registrar(){
        //registro sin imagen. La imagen sera subida despues del registro . El estado siempre sera 1 
        Usuarios::create(request(['nombres','email','clave','telefono','celular','push_token','categoria','tipo_usuario','terminos','img']));        
        //Envio por correo
        Mail::send('emails.welcome', ['name' => 'AsesorJuridico'], function(Message $message){
            $message->to(request('email'), request('nombres').' '.request('apellido'))
                    ->from('admin@asesorjuridico.com','Asesorjuridico')
                    ->subject('Bienvenido a Asesor Juridico');
        });
        return response()->json([
                'Status' => 'successful',
                'Message' => 'Se registro '.request('email').' correctamente',
                'body' => []
            ]);
    }    
}
