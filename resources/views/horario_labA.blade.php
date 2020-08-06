@extends('layouts.app')
@section('titulo','Horario Laboratorio A')



@section('nombreAyudante',$nombre_ayudante)
@section('content')
	<div class="container text-center">
		<h1>Horario del laboratorio A</h1>
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
								<td class="align-middle" id="LA_l1-2">-</td>
								<td class="align-middle" id="LA_m1-2">-</td>
								<td class="align-middle" id="LA_x1-2">-</td>
								<td class="align-middle" id="LA_j1-2">-</td>
								<td class="align-middle" id="LA_v1-2">-</td>
								<td class="align-middle" id="LA_s1-2">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">3-4</td>
								<td class="align-middle" id="LA_l3-4">-</td>
								<td class="align-middle" id="LA_m3-4">-</td>
								<td class="align-middle" id="LA_x3-4">-</td>
								<td class="align-middle" id="LA_j3-4">-</td>
								<td class="align-middle" id="LA_v3-4">-</td>
								<td class="align-middle" id="LA_s3-4">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">5-6</td>
								<td class="align-middle" id="LA_l5-6">-</td>
								<td class="align-middle" id="LA_m5-6">-</td>
								<td class="align-middle" id="LA_x5-6">-</td>
								<td class="align-middle" id="LA_j5-6">-</td>
								<td class="align-middle" id="LA_v5-6">-</td>
								<td class="align-middle" id="LA_s5-6">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">7-8</td>
								<td class="align-middle" id="LA_l7-8">-</td>
								<td class="align-middle" id="LA_m7-8">-</td>
								<td class="align-middle" id="LA_x7-8">-</td>
								<td class="align-middle" id="LA_j7-8">-</td>
								<td class="align-middle" id="LA_v7-8">-</td>
								<td class="align-middle" id="LA_s7-8">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">Almuerzo</td>
								<td class="align-middle" id="LA_lalmuerzo">-</td>
								<td class="align-middle" id="LA_malmuerzo">-</td>
								<td class="align-middle" id="LA_xalmuerzo">-</td>
								<td class="align-middle" id="LA_jalmuerzo">-</td>
								<td class="align-middle" id="LA_valmuerzo">-</td>
								<td class="align-middle" id="LA_salmuerzo">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">9-10</td>
								<td class="align-middle" id="LA_l9-10">-</td>
								<td class="align-middle" id="LA_m9-10">-</td>
								<td class="align-middle" id="LA_x9-10">-</td>
								<td class="align-middle" id="LA_j9-10">-</td>
								<td class="align-middle" id="LA_v9-10">-</td>
								<td class="align-middle" id="LA_s9-10">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">11-12</td>
								<td class="align-middle" id="LA_l11-12">-</td>
								<td class="align-middle" id="LA_m11-12">-</td>
								<td class="align-middle" id="LA_x11-12">-</td>
								<td class="align-middle" id="LA_j11-12">-</td>
								<td class="align-middle" id="LA_v11-12">-</td>
								<td class="align-middle" id="LA_s11-12">-</td>
							</tr>
							<tr>
								<td class="font-weight-bold align-middle">13-14</td>
								<td class="align-middle" id="LA_l13-14">-</td>
								<td class="align-middle" id="LA_m13-14">-</td>
								<td class="align-middle" id="LA_x13-14">-</td>
								<td class="align-middle" id="LA_j13-14">-</td>
								<td class="align-middle" id="LA_v13-14">-</td>
								<td class="align-middle" id="LA_s13-14">-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection
