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
                        <h3 class="box-title">Issues</h3>
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
														<th>titulo</th>
														<th>editor</th>
														<th>fecha de entrega</th>
														<th>ID de proyecto</th>
													</tr>
													</thead>
													<?php foreach ($issues as $issue): ?>
													<tbody>
														<tr>
															<td>{{ $issue->id }}</td>
															<td>{{ $issue->titulo }}</td>
															<td>{{ $issue->editor }}</td>
															<td>{{ $issue->fentrega }}</td>
															<td>{{ $issue->proy_id }}</td>
															<td>
																<td>
																	{!! Form::open(['route' => ['agregar.agregar_c', $issue], 'method' => 'GET'])!!}
																		 <button type="submit" class="btn btn-warning" >agregar comentario</button>
																	{{ Form::close() }}
																</td>
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
