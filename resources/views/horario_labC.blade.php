@extends('layouts.app')

@section('titulo','Horario Laboratorio C')
@section('nombreAyudante',$nombre_ayudante)

<<<<<<< HEAD
@section('content')
=======
@section('contenido')
	<div class="container text-center">
		<h1>Horario del laboratorio C</h1>
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
								<td class="align-middle" id="LC_l1-2">-</td>
								<td class="align-middle" id="LC_m1-2">-</td>
								<td class="align-middle" id="LC_x1-2">-</td>
								<td class="align-middle" id="LC_j1-2">-</td>
								<td class="align-middle" id="LC_v1-2">-</td>
								<td class="align-middle" id="LC_s1-2">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">3-4</td>
								<td class="align-middle" id="LC_l3-4">-</td>
								<td class="align-middle" id="LC_m3-4">-</td>
								<td class="align-middle" id="LC_x3-4">-</td>
								<td class="align-middle" id="LC_j3-4">-</td>
								<td class="align-middle" id="LC_v3-4">-</td>
								<td class="align-middle" id="LC_s3-4">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">5-6</td>
								<td class="align-middle" id="LC_l5-6">-</td>
								<td class="align-middle" id="LC_m5-6">-</td>
								<td class="align-middle" id="LC_x5-6">-</td>
								<td class="align-middle" id="LC_j5-6">-</td>
								<td class="align-middle" id="LC_v5-6">-</td>
								<td class="align-middle" id="LC_s5-6">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">7-8</td>
								<td class="align-middle" id="LC_l7-8">-</td>
								<td class="align-middle" id="LC_m7-8">-</td>
								<td class="align-middle" id="LC_x7-8">-</td>
								<td class="align-middle" id="LC_j7-8">-</td>
								<td class="align-middle" id="LC_v7-8">-</td>
								<td class="align-middle" id="LC_s7-8">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">Almuerzo</td>
								<td class="align-middle" id="LC_lalmuerzo">-</td>
								<td class="align-middle" id="LC_malmuerzo">-</td>
								<td class="align-middle" id="LC_xalmuerzo">-</td>
								<td class="align-middle" id="LC_jalmuerzo">-</td>
								<td class="align-middle" id="LC_valmuerzo">-</td>
								<td class="align-middle" id="LC_salmuerzo">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">9-10</td>
								<td class="align-middle" id="LC_l9-10">-</td>
								<td class="align-middle" id="LC_m9-10">-</td>
								<td class="align-middle" id="LC_x9-10">-</td>
								<td class="align-middle" id="LC_j9-10">-</td>
								<td class="align-middle" id="LC_v9-10">-</td>
								<td class="align-middle" id="LC_s9-10">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">11-12</td>
								<td class="align-middle" id="LC_l11-12">-</td>
								<td class="align-middle" id="LC_m11-12">-</td>
								<td class="align-middle" id="LC_x11-12">-</td>
								<td class="align-middle" id="LC_j11-12">-</td>
								<td class="align-middle" id="LC_v11-12">-</td>
								<td class="align-middle" id="LC_s11-12">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">13-14</td>
								<td class="align-middle" id="LC_l13-14">-</td>
								<td class="align-middle" id="LC_m13-14">-</td>
								<td class="align-middle" id="LC_x13-14">-</td>
								<td class="align-middle" id="LC_j13-14">-</td>
								<td class="align-middle" id="LC_v13-14">-</td>
								<td class="align-middle" id="LC_s13-14">-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
>>>>>>> origin/pablo


@endsection
