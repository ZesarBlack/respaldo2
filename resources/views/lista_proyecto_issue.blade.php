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
                        <h3 class="box-title">issues</h3>
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
														<th>Titulo</th>
														<th>editor</th>
														<th>fecha de entrega</th>
														<th>nombre del proyecto</th>
													</tr>
													</thead>
													<?php foreach ($issues as $issue): ?>
													<tbody>
														<tr>
															<td>
															<a href="{{ route('listar.listar_m', [$issue->proy_id,$issue->id])}}"><i class="fa fa-wrench" ></i>&nbsp;&nbsp;<?=$issue->titulo;?></a>
															</td>
															<td>{{ $issue->editor }}</td>
															<td>{{ $issue->fentrega }}</td>
															<td>{{ $issue->id }}</td>

															<td>
																<a href="{{ route('agregar.agregar_c', $issue->id)}}" class="fa  fa-plus">&nbsp;&nbsp;agregar comentario</a>
															</td>
														</tr>
													</tbody>
													<?php endforeach; ?>
											</table>
                      <a href="{{ route('agregar.agregar_i', $issue->proy_id)}}" class="fa  fa-plus">&nbsp;&nbsp;agregar issue</a>
                    </div>
										<div class="box box-primary col-xs-12">
											<table class="table table-bordered table-inverse">
													<thead>
													<tr>
														<th>comentario</th>
													</tr>
													</thead>
													<?php foreach ($comentarios as $comentario): ?>
													<tbody>
														<tr>
															<td>{{ $comentario->comentario }}</td>
															<td>
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
