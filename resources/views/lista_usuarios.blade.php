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
                        <h3 class="box-title">Usuarios</h3>
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
												      <th>Username</th>
															<th>email</th>
												    </tr>
												  </thead>
													<?php foreach ($users as $user): ?>
														<tbody>
													    <tr>
																<td>{{ $user->id }}</td>
													      <td>{{ $user->name }}</td>
													      <td>{{ $user->email}}</td>
																		<td>
																		{!! Form::open(['route' => ['lista_usuarios.edit', $user], 'method' => 'GET'])!!}
																			 <button type="submit" class="btn btn-info" >editar</button>
																		{{ Form::close() }}
																		{!! Form::open(['route' => ['lista_usuarios.destroy', $user], 'method' => 'DELETE'])!!}
																			 <button type="submit" class="btn btn-danger" >eliminar</button>
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
