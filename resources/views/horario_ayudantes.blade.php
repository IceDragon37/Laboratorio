@extends('layout')

@section('titulo', 'Horario de ayudantes')
@section('nombreAyudante',$nombre_ayudante)

@section('contenido')
	<div class="container text-center">
		<h1>Horario de Ayudantes</h1>
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
								<td class="align-middle" id="AY_l1-2">-</td>
								<td class="align-middle" id="AY_m1-2">-</td>
								<td class="align-middle" id="AY_x1-2">-</td>
								<td class="align-middle" id="AY_j1-2">-</td>
								<td class="align-middle" id="AY_v1-2">-</td>
								<td class="align-middle" id="AY_s1-2">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">3-4</td>
								<td class="align-middle" id="AY_l3-4">-</td>
								<td class="align-middle" id="AY_m3-4">-</td>
								<td class="align-middle" id="AY_x3-4">-</td>
								<td class="align-middle" id="AY_j3-4">-</td>
								<td class="align-middle" id="AY_v3-4">-</td>
								<td class="align-middle" id="AY_s3-4">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">5-6</td>
								<td class="align-middle" id="AY_l5-6">-</td>
								<td class="align-middle" id="AY_m5-6">-</td>
								<td class="align-middle" id="AY_x5-6">-</td>
								<td class="align-middle" id="AY_j5-6">-</td>
								<td class="align-middle" id="AY_v5-6">-</td>
								<td class="align-middle" id="AY_s5-6">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">7-8</td>
								<td class="align-middle" id="AY_l7-8">-</td>
								<td class="align-middle" id="AY_m7-8">-</td>
								<td class="align-middle" id="AY_x7-8">-</td>
								<td class="align-middle" id="AY_j7-8">-</td>
								<td class="align-middle" id="AY_v7-8">-</td>
								<td class="align-middle" id="AY_s7-8">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">Almuerzo</td>
								<td class="align-middle" id="AY_lalmuerzo">-</td>
								<td class="align-middle" id="AY_malmuerzo">-</td>
								<td class="align-middle" id="AY_xalmuerzo">-</td>
								<td class="align-middle" id="AY_jalmuerzo">-</td>
								<td class="align-middle" id="AY_valmuerzo">-</td>
								<td class="align-middle" id="AY_salmuerzo">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">9-10</td>
								<td class="align-middle" id="AY_l9-10">-</td>
								<td class="align-middle" id="AY_m9-10">-</td>
								<td class="align-middle" id="AY_x9-10">-</td>
								<td class="align-middle" id="AY_j9-10">-</td>
								<td class="align-middle" id="AY_v9-10">-</td>
								<td class="align-middle" id="AY_s9-10">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">11-12</td>
								<td class="align-middle" id="AY_l11-12">-</td>
								<td class="align-middle" id="AY_m11-12">-</td>
								<td class="align-middle" id="AY_x11-12">-</td>
								<td class="align-middle" id="AY_j11-12">-</td>
								<td class="align-middle" id="AY_v11-12">-</td>
								<td class="align-middle" id="AY_s11-12">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">13-14</td>
								<td class="align-middle" id="AY_l13-14">-</td>
								<td class="align-middle" id="AY_m13-14">-</td>
								<td class="align-middle" id="AY_x13-14">-</td>
								<td class="align-middle" id="AY_j13-14">-</td>
								<td class="align-middle" id="AY_v13-14">-</td>
								<td class="align-middle" id="AY_s13-14">-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection
