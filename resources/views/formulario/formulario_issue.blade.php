<div class="box box-primary col-xs-12">
                <div class="box-header">
                  <h3 class="box-title">Ingrese los datos del issue</h3>
                </div><!-- /.box-header -->
<div id="notificacion_resul_fanu"></div>

<form   method="post"  action="{{route('lista_issues.store')}}" >

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="box-body col-xs-12">
		<div class="form-group col-xs-6">
													<label for="titulo">Titulo</label>
													<input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="{{ old('titulo') }}" p required>
		</div>
		<div class="form-group col-xs-12">
													<label for="comentario">Especificación</label>
													<textarea rows="4" cols="50" type="text" class="form-control" id="comentario" name="comentario" placeholder="Detalles especificos" value="{{ old('comentario') }}" p required >
													</textarea>
		</div>
		<div class="form-group col-xs-8">
													<label for="editor">Editor</label>
													<input type="text" class="form-control" id="editor" name="editor" value="{{ Auth::user()->name }}" p required>
		</div>
		<div class="form-group col-xs-8">
													<label for="ID proyecto">Identificador del proyecto</label>
													<input type="number" class="form-control" id="proy_id" name="proy_id" placeholder="id del proyecto" value="{{ old('proy_id') }}" p required>
		</div>
		<div class="form-group col-xs-5">
													<label for="fecha de entrega">fecha de entrga</label>
													<input type="date" class="form-control" id="fentrega" name="fentrega" value="{{ old('fentrega') }}"p required>
		</div>
</div>
<div class="box-footer col-xs-12 ">
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
