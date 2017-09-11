<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/backend', function () {
    return view('layout');
});

Route::get('/laravel', function(){
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Web categorias
|--------------------------------------------------------------------------
|
| Estas categorias estan en el controllador llamadas por Route::get()
|
*/
Route::get('/categorias', function(){
	$list = App\Categorias::all();
	return view('categorias', compact('list'));
});
Route::get('/categorias/create', function(){

	return view('categorias.create');
});

//api controller
Route::get('/categorias/all', 'CategoriasController@all');
Route::get('/categorias/{categoria}', 'CategoriasController@une');
//post controller
Route::post('/categorias', 'CategoriasController@store');
Route::get('/categorias/update/{id}', function($id){
	$list = App\Categorias::where('id',$id)->get();
	return view('categorias.update', compact('list'));
});

/*
|--------------------------------------------------------------------------
| Web usuarios
|--------------------------------------------------------------------------
|
| Usuarios estan en el controlador llamadas por Route::get()
|
*/
Route::get('/usuarios', function(){
	$list = App\Usuarios::all();
	return view('usuarios', compact('list'));
});
Route::get('/usuarios/create', function(){
	return view('usuarios.create');
});
//api controller
Route::get('/usuarios/all', 'UsuariosController@all');
Route::get('/usuarios/{usuario}', 'UsuariosController@une');
Route::post('/Appusuarios', 'UsuariosController@create');
Route::put('/Appusuarios', 'UsuariosController@update');
Route::delete('/Appusuarios', 'UsuariosController@delete');
Route::post('/Applogin','UsuariosController@login');
Route::get('/getAbogados','UsuariosController@getAbogados');
//post controller
Route::post('/usuarios', 'UsuariosController@store');
Route::get('/usuarios/update/{id}', function($id){
	$list = App\Usuarios::where('id',$id)->get();
	return view('usuarios.update', compact('list'));
});
Route::get('/getToken', 'UsuariosController@getToken');

/*
|--------------------------------------------------------------------------
| Web tipousuarios
|--------------------------------------------------------------------------
|
| TiposUsuarios estan en el controlador llamadas por Route::get()
|
*/
Route::get('/tipoUsuario', function(){
	$list = App\TipoUsuarios::all();
	return view('tipoUsuario', compact('list'));
});
Route::get('/tipoUsuario/create', function(){
	return view('tipoUsuario.create');
});
//api controller
Route::get('/tipoUsuario/all', 'TipoUsuariosController@all');
Route::get('/tipoUsuario/{id}', 'TipoUsuariosController@une');
//post controller
Route::post('/tipoUsuario', 'TipoUsuariosController@store');
Route::get('/tipoUsuarios/update/{id}', function($id){
	$list = App\TipoUsuarios::where('id',$id)->get();
	return view('tipoUsuarios.update', compact('list'));
});


/*
|--------------------------------------------------------------------------
| Web chat
|--------------------------------------------------------------------------
|
| Chat estan en el controlador llamadas por Route::get()
|
*/
Route::get('/chat', function(){
	$list = App\Chats::all();
	return view('chat', compact('list'));
});
Route::get('/chat/create', function(){
	return view('chat.create');
});
//api controller
Route::get('/chat/all', 'ChatsController@all');
Route::get('/chat/{id}', 'ChatsController@une');
//post controller
Route::post('/chat', 'ChatsController@store');
Route::get('/chat/update/{id}', function($id){
	$list = App\Chats::where('id',$id)->get();
	return view('chat.update', compact('list'));
});

/*
|--------------------------------------------------------------------------
| Web notificaciones
|--------------------------------------------------------------------------
|
| Notificaciones estan en el controlador llamadas por Route::get()
|
*/
Route::get('/notificacion', function(){
	$list = App\Notificacion::all();
	return view('notificacion', compact('list'));
});
Route::get('/notificacion/create', function(){
	return view('notificacion.create');
});
//api controller
Route::get('/notificacion/all', 'NotificacionController@all');
Route::get('/notificacion/{id}', 'NotificacionController@une');
//post controller
Route::post('/notificacion', 'NotificacionController@store');
Route::get('/notificacion/update/{id}', function($id){
	$list = App\Notificacion::where('id',$id)->get();
	return view('notificacion.update', compact('list'));
});
/*
|--------------------------------------------------------------------------
| Web preguntas
|--------------------------------------------------------------------------
|
| Preguntas estan en el controlador llamadas por Route::get()
|
*/
Route::get('/preguntas', function(){
	$list = App\Preguntas::all();
	return view('preguntas', compact('list'));
});
Route::get('/preguntas/create', function(){
	return view('preguntas.create');
});
//api controller
Route::get('/preguntas/all', 'PreguntasController@all');
Route::get('/preguntas/{pregunta}', 'PreguntasController@une');
Route::get('/preguntas/getAll', 'PreguntasController@getAll');
Route::get('/preguntas/getPreguntasregular/{categoria}', 'PreguntasController@getPreguntasregular');
Route::get('/preguntas/getPreguntasUsuario/{user}', 'PreguntasController@getPreguntasUsuario');
//post controller
Route::post('/preguntas', 'PreguntasController@store');
Route::get('/preguntas/update/{id}', function($id){
	$list = App\Preguntas::where('id',$id)->get();
	return view('preguntas.update', compact('list'));
});
/*
|--------------------------------------------------------------------------
| Web respuestas
|--------------------------------------------------------------------------
|
| Respuestas estan en el controlador llamadas por Route::get()
|
*/
Route::get('/respuestas', function(){
	$list = App\Respuestas::all();
	return view('respuestas', compact('list'));
});
Route::get('/respuestas/create', function(){
	return view('respuestas.create');
});
//api controller
Route::get('/respuestas/all', 'RespuestasController@all');
Route::get('/respuestas/{respuesta}', 'RespuestasController@une');
//post controller
Route::post('/respuestas', 'RespuestasController@store');
Route::get('/respuestas/update/{id}', function($id){
	$list = App\Respuestas::where('id',$id)->get();
	return view('respuestas.update', compact('list'));
});


/*
|--------------------------------------------------------------------------
| Help 
|--------------------------------------------------------------------------
|
| Usuarios estan en el controlador llamadas por Route::get()
|
*/

Route::get('/helplogin', function () {
    return view('helplogin');
});


/*
|--------------------------------------------------------------------------
| APP route
|--------------------------------------------------------------------------
|
| Usuarios estan en el controlador llamadas por Route::get()
|
*/


Route::post('/login','UsuariosController@login');
Route::get('/getToken','UsuariosController@getToken');

Route::get('/emails/welcome','UsuariosController@pruebaEmail');


