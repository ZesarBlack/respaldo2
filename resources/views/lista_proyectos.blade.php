@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

				<div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Proyectos</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
											<table class="table table-bordered table-inverse">
													<thead>
														<tr>
															<th>id</th>
															<th>Nombre</th>
															<th>Fecha de entrega</th>
															<th>Opciones</th>
														</tr>
													</thead>
													<?php foreach ($proyectos as $proyecto): ?>
														<tbody>
															<tr>
																<td>{{ $proyecto->id }}</td>
																<td>{{ $proyecto->nombre }}</td>
																<td>{{ $proyecto->fentrega}}</td>
																	<td>
																		{!! Form::open(['route' => ['lista_proyectos.destroy', $proyecto], 'method' => 'DELETE'])!!}
																			 <button type="submit" class="btn btn-danger" >eliminar</button>
																		{{ Form::close() }}
																		{!! Form::open(['route' => ['agregar.agregar_i', $proyecto], 'method' => 'GET'])!!}
																			 <button type="submit" class="btn btn-warning" >agregar issue</button>
																		{{ Form::close() }}
																		{!! Form::open(['route' => ['seleccionar.seleccionar_i', $proyecto], 'method' => 'GET'])!!}
																			 <button type="submit" class="btn btn-info" >información</button>
																		{{ Form::close() }}
																	</td>
															</tr>
														</tbody>
													<?php endforeach; ?>
												</table>

                    </div>
                    <!-- /.box-body -->
                </div>

			</div>
		</div>
	</div>
@endsection
