<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Indice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
    <body>

      <nav class="navbar bg-light navbar-expand-lg navbar-blue">
        <a class="navbar-brand" href="">
          <h1>Módulo de llaves</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><img class="user" src="images/user.png" alt="user-image"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Perfil</a>
            </li>
          </ul>
        </div>
      </nav>

      <div>
        <button type="button"><a href="{{route('welcome')}}">Volver a otro módulo</a></button>
      </div>
      <div >
        <div>
          <button type="button"><a href="{{route('laboratorio')}}">Laboratorio</a></button>

        </div>
        <div>

          <button type="button"><a href="{{route('optimizacion')}}">Usabilidad</a></button>
          <button type="button"> <a href="{{route('formulario')}}">Formulario</a></button>

        </div>
        <div class="menu3">

          <button type="button"><a href="{{route('rack')}}">Rack</a></button>
          <button type="button"><a href="{{route('formulario')}}">Formulario</a></button>

        </div>
      </div>
    </body>
</html>
