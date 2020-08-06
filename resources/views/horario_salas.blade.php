@extends('layouts.app')


@section('titulo', 'Horario de salas')
@section('nombreAyudante',$nombre_ayudante)


<<<<<<< HEAD
@section('content')
<div class="container text-center">
=======
@section('contenido')
	<div class="container text-center">
>>>>>>> origin/pablo
		<h1>Horario de Salas</h1>
		<div class="row">
			<div class="col-lg-12 my-auto">
				<div class="table-responsive-sm bg-white">
					<table id="horariolabA" class="table table-hover table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Clave</th>
								<th>Lunes</th>
								<th>Martes</th>
								<th>Miércoles</th>
								<th>Jueves</th>
								<th>Viernes</th>
								<th>Sábado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="font-weight-bold align-middle">1-2</td>
								<td class="align-middle" id="S_l1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s1-2">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">3-4</td>
								<td class="align-middle" id="S_l3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s3-4">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">5-6</td>
								<td class="align-middle" id="S_l5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s5-6">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">7-8</td>
								<td class="align-middle" id="S_l7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s7-8">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">Almuerzo</td>
								<td class="align-middle" id="S_lalmuerzo">-</td>
								<td class="align-middle" id="S_malmuerzo">-</td>
								<td class="align-middle" id="S_xalmuerzo">-</td>
								<td class="align-middle" id="S_jalmuerzo">-</td>
								<td class="align-middle" id="S_valmuerzo">-</td>
								<td class="align-middle" id="S_salmuerzo">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">9-10</td>
								<td class="align-middle" id="S_l9-10">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m9-10">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x9-10">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j9-10">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v9-10">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s9-10">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">11-12</td>
								<td class="align-middle" id="S_l11-12">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m11-12">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x11-12">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j11-12">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v11-12">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s11-12">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">13-14</td>
								<td class="align-middle" id="S_l13-14">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_m13-14">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_x13-14">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_j13-14">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_v13-14">2-1: <br>Profesor: <br><br>
																	 2-4: <br>Profesor: <br><br>
																	 2-5: <br>Profesor: <br><br>
																	 2-6: <br>Profesor: <br><br>
																	 2-11: <br>Profesor: <br><br></td>
								<td class="align-middle" id="S_s13-14">-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection
