<nav class='navbar navbar-expand-lg navbar-dark bg-dark shadow-lg'>


  	<a class="navbar-brand" href='/'>
        <img src="{{-- https://pbs.twimg.com/profile_images/1702655684/logo-inf_400x400.jpg --}}https://vignette.wikia.nocookie.net/memes-pedia/images/2/2c/89592b3392fee110134235e95d80dbf7.jpg/revision/latest/top-crop/width/360/height/450?cb=20200527113030&path-prefix=es" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Laboratorio Informática PUCV
  	</a>


  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contenidoNavbar" aria-controls="contenidoNavbar" aria-expanded="false" aria-label="Toggle navigation">
    	   <span class="navbar-toggler-icon"></span>
  	</button>


		<div class="collapse navbar-collapse" id="contenidoNavbar">
  			<div class="navbar-nav ml-auto mr-auto text-center">
    	    	<a class="nav-item nav-link active {{ setActive('home') }}" href="{{route('home')}}">Home </a>

    	      <li class="nav-item dropdown">

           			<a class="nav-link dropdown-toggle" href="#" id="modulosDeHorario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              		  Horarios
            		</a>

      		      <div class="dropdown-menu" aria-labelledby="modulosDeHorario">
          				  <a class="dropdown-item {{ setActive('horariolabA') }}" href="{{route('horariolabA')}}">Horario Laboratorio A</a>
                    <a class="dropdown-item {{ setActive('horariolabB') }}" href="{{route('horariolabB')}}">Horario Laboratorio B</a>
                    <a class="dropdown-item {{ setActive('horariolabC') }}" href="{{route('horariolabC')}}">Horario Laboratorio C</a>
                    <a class="dropdown-item {{ setActive('horariolabUX') }}" href="{{route('horariolabUX')}}">Horario Laboratorio Usabilidad</a>
          					<a class="dropdown-item {{ setActive('horariosalas') }}" href="{{route('horariosalas')}}">Horario de salas</a>
                    <a class="dropdown-item {{ setActive('horariorack') }}" href="{{route('horariorack')}}">Horario de rack</a>
                    <a class="dropdown-item {{ setActive('horarioayudantes') }}" href="{{route('horarioayudantes')}}">Horario de ayudantes</a>
      		      </div>

        		</li>
        </div>

    		<div class="d-flex justify-content-around">
            <a class="nav-item text-white">@yield('nombreAyudante','Invitado')</a>
    		</div>

		</div>

</nav>