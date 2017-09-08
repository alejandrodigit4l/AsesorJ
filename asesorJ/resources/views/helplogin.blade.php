@extends('layout')

@section('content')


	<h1>Api construct</h1>
	<p>Asesor juridico es una aplicación que ayudara a ....</p>
	<p>Algunos de las funciones para entrar a este login son las siguiente:
	<ul>
		<li>Debes tener el accesss token de laravel <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/getToken">http://localhost/AsesorJuridico/AsesorJuridico/public/getToken</a> <br> <pre><code>{
  "token": "XY6qsAYzsG16awMeD74lGLpTaceaDCNk1hIpgKdr"
}</code></pre></li>
		<li>Debes tener en cuenta que los post se enviaran por medio <code>x-xxx-fom-urlencoded</code></li>
	</ul>
	Para la direccion <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/login">http://localhost/AsesorJuridico/AsesorJuridico/public/login</a> debes tener el token y los siguientes datos "email", "password". Por supuesto debe ser un email registrado con un password correcto. por ejemplo.
	<code>
		email = alejandro@digit4l.co
		password = 123
		headers: 
		Content-Type = application/x-www-form-urlencoded
		X-CSRF-TOKEN = XY6qsAYzsG16awMeD74lGLpTaceaDCNk1hIpgKdr
	</code>
	<br><br>
	Para el registro debes ira la direccion <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/registrar">http://localhost/AsesorJuridico/AsesorJuridico/public/registrar</a> ubicando los datos basicos del registro por medio del <code>X-CSRF-TOKEN y el content-type </code>correcto
	<br><br>
	El modo para tomar todos los abogados es la siguiente ubicando la informacion por get a la siguiente direccion <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/getAbogados">http://localhost/AsesorJuridico/AsesorJuridico/public/getAbogados</a> y se vera la informacion de la siguiente manera:
	<pre>
{
  "Status": "successful",
  "Message": "Se encontraron coincidencias",
  "body": [
    {
      "id": 1,
      "nombre": "fredy",
      "apellido": "moreno",
      "email": "fredymoreno@uan.edu.co",
      "urlImage": "casos de uso.pdf",
      "password": "123",
      "estados": 2,
      "tipoUsuario": [
        {
          "id": 3,
          "nombre": "Abogado",
          "FechaCreado": "2017-12-31",
          "idAdmin": 1,
          "remember_token": null,
          "created_at": "2017-07-22 00:59:03",
          "updated_at": "2017-07-24 20:46:07"
        }
      ],
      "remember_token": "123",
      "created_at": "2017-07-04 00:00:00",
      "updated_at": "2017-07-24 14:29:10"
    },
    {
      "id": 5,
      "nombre": "nombre",
      "apellido": "apelldi",
      "email": "m@m",
      "urlImage": "VirtualBox-5.1.24-117012-OSX.dmg",
      "password": "123",
      "estados": 2,
      "tipoUsuario": [
        {
          "id": 3,
          "nombre": "Abogado",
          "FechaCreado": "2017-12-31",
          "idAdmin": 1,
          "remember_token": null,
          "created_at": "2017-07-22 00:59:03",
          "updated_at": "2017-07-24 20:46:07"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 20:38:53",
      "updated_at": "2017-07-24 20:38:53"
    }
  ]
}
	</pre>
	<br><br>
	El modo de tomar a todos los usuarios que no son abogados ni administradores es en la siguiente direccion <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/getUser">http://localhost/AsesorJuridico/AsesorJuridico/public/getUser</a>, si no existen coincidencias entonces veeras algo asi: 
	<pre>
{
  "Status": "successful",
  "Message": "Se encontraron coincidencias",
  "body": []
}
	</pre>
	<br><br>
	<h2>Preguntas</h2>
	Para tener toda la trazabilidad de las preguntas deberas ir a <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/getAllPreguntas">http://localhost/AsesorJuridico/AsesorJuridico/public/getAllPreguntas</a>, esta respuesta se vera como la siguiente info:
<pre>
{
  "Status": "successful",
  "Message": "Se encontraron coincidencias",
  "body": [
    {
      "id": 3,
      "titulo": "Que pasa cuando tomo agua fria?",
      "pregunta": "Necesito saber que pasa cuando tomo agua fria",
      "idUsuario": [
        {
          "id": 1,
          "nombre": "fredy",
          "apellido": "moreno",
          "email": "fredymoreno@uan.edu.co",
          "urlImage": "casos de uso.pdf",
          "password": "123",
          "estados": 2,
          "remember_token": "123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 14:29:10"
        }
      ],
      "categoria": [
        {
          "id": 1,
          "nombre": "activo",
          "descripcion": "esta activo el usuario",
          "remember_token": "1223123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-04 00:00:00"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 19:58:35",
      "updated_at": "2017-07-24 19:58:35"
    },
    {
      "id": 4,
      "titulo": "Que tengo en la espalda?",
      "pregunta": "necesito saber que pasa con mi espalda",
      "idUsuario": [
        {
          "id": 1,
          "nombre": "fredy",
          "apellido": "moreno",
          "email": "fredymoreno@uan.edu.co",
          "urlImage": "casos de uso.pdf",
          "password": "123",
          "estados": 2,
          "remember_token": "123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 14:29:10"
        }
      ],
      "categoria": [
        {
          "id": 1,
          "nombre": "activo",
          "descripcion": "esta activo el usuario",
          "remember_token": "1223123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-04 00:00:00"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 19:58:57",
      "updated_at": "2017-07-24 20:16:23"
    },
    {
      "id": 5,
      "titulo": "Tengo hambre?",
      "pregunta": "quiero que alguien me diga si tengo hambre o no",
      "idUsuario": [
        {
          "id": 1,
          "nombre": "fredy",
          "apellido": "moreno",
          "email": "fredymoreno@uan.edu.co",
          "urlImage": "casos de uso.pdf",
          "password": "123",
          "estados": 2,
          "remember_token": "123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 14:29:10"
        }
      ],
      "categoria": [
        {
          "id": 3,
          "nombre": "medicina",
          "descripcion": "Es la categoria para medicina",
          "remember_token": null,
          "created_at": "2017-07-10 22:55:18",
          "updated_at": "2017-07-24 20:00:22"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 19:59:28",
      "updated_at": "2017-07-24 19:59:28"
    }
  ]
}
</pre>
<br><br>
En el momento de tener que ir a una categoria en especifica de las preguntas deberas ir a <a href="http://localhost/AsesorJuridico/AsesorJuridico/public/getPreguntasregular/1">http://localhost/AsesorJuridico/AsesorJuridico/public/getPreguntasregular/1</a> siendo <code>1</code> el id de la categoria. 
<pre>
{
  "Status": "successful",
  "Message": "Se encontraron coincidencias",
  "body": [
    {
      "id": 3,
      "titulo": "Que pasa cuando tomo agua fria?",
      "pregunta": "Necesito saber que pasa cuando tomo agua fria",
      "idUsuario": [
        {
          "id": 1,
          "nombre": "fredy",
          "apellido": "moreno",
          "email": "fredymoreno@uan.edu.co",
          "urlImage": "casos de uso.pdf",
          "password": "123",
          "estados": 2,
          "tipoUsuario": "3",
          "remember_token": "123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 14:29:10"
        }
      ],
      "categoria": [
        {
          "id": 1,
          "nombre": "medicina",
          "descripcion": "esta activo el medicina",
          "remember_token": "1223123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 20:43:55"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 19:58:35",
      "updated_at": "2017-07-24 19:58:35"
    },
    {
      "id": 4,
      "titulo": "Que tengo en la espalda?",
      "pregunta": "necesito saber que pasa con mi espalda",
      "idUsuario": [
        {
          "id": 1,
          "nombre": "fredy",
          "apellido": "moreno",
          "email": "fredymoreno@uan.edu.co",
          "urlImage": "casos de uso.pdf",
          "password": "123",
          "estados": 2,
          "tipoUsuario": "3",
          "remember_token": "123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 14:29:10"
        }
      ],
      "categoria": [
        {
          "id": 1,
          "nombre": "medicina",
          "descripcion": "esta activo el medicina",
          "remember_token": "1223123",
          "created_at": "2017-07-04 00:00:00",
          "updated_at": "2017-07-24 20:43:55"
        }
      ],
      "remember_token": null,
      "created_at": "2017-07-24 19:58:57",
      "updated_at": "2017-07-24 20:16:23"
    }
  ]
}
</pre>
	</p>

@endsection