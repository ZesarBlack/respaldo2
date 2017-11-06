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
                        <h3 class="box-title">Nuevo Usuario</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
											<form action="{{ url('/register') }}" method="post">
												<div class="box box-primary col-xs-12">
																						<div class="box-header">
																							<h3 class="box-title">Información de usuario</h3>
																						</div><!-- /.box-header -->
														<div id="notificacion_resul_fanu"></div>

																<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
																<div class="box-body col-xs-12">
																		<div class="form-group col-xs-6">
																													<label for="name">Nombres completo*</label>
																													<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" p required>
																		</div>
																		<div class="form-group col-xs-12">
																													<label for="email">Email*</label>
																													<input type="text" class="form-control" id="email" name="email" placeholder="email" p required>
																		</div>
																		<div class="form-group col-xs-12">
																													<label for="password">password*</label>
																													<input type="password" class="form-control" id="password" name="password" placeholder="Nueva contraseña" p required >
																		</div>
																		<div class="form-group col-xs-10">
																													<label for="Rol de usuario ">Roles</label>
																													<select class="selectpicker" id="rol_id" name="rol_id" >
																														<option selected>Tipo de usuario</option>
																														<option value="1">Administrador</option>
																														<option value="2">Capturista</option>
																													</select>
																													<!--<input type="password" class="form-control" id="password" name="password" placeholder="Nueva contraseña" p required >-->
																		</div>
																</div>
																<div class="box-footer col-xs-12 ">
																	<button type="submit" class="btn btn-primary">Guardar</button>
																</div>

												</div>
											</form>
                    </div>
                    <!-- /.box-body -->
                </div>

			</div>
		</div>
	</div>
@endsection
