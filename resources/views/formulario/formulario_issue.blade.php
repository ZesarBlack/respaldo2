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
													<label for="detalle">Especificación</label>
													<textarea rows="4" cols="50" type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalles especificos" value="{{ old('comentario') }}" p required >
													</textarea>
		</div>
		<div class="form-group col-xs-8">
													<label for="editor">Editor</label>
													<input type="text" class="form-control" id="editor" name="editor" value="{{ Auth::user()->name }}" p required>
		</div>
		<div class="form-group col-xs-8">
      <label for="ID proyecto">Proyectos</label>
                          <select class="form_control" id="proy_id" name="proy_id"p required>
                             <option selected>Proyecto</option>
                            <?php foreach ($proyectos as $proyecto): ?>
                              <option value="{{ $proyecto->id }}"><td>{{ $proyecto->nombre }}</td></option>
                            <?php endforeach; ?>
                          </select>
      </div>

		<div class="form-group col-xs-5">
													<label for="fecha de entrega">fecha de entrga</label>
													<input type="date" class="form-control" id="fentrega" name="fentrega" value="{{ old('fentrega') }}"p required>
		</div>
    <div class="form-group col-xs-10">
                          <label for="Nivel de impacto">Nivel de impacto</label>
                          <select class="form_control" id="impacto" name="impacto" >
                            <option selected>Nivel</option>
                            <option value="1">Bajo</option>
                            <option value="2">Medio</option>
                            <option value="3">Alto</option>
                          </select>
    </div>
    <div class="form-group col-xs-10">
                          <label for="Nivel de urgencia">Nivel de urgencia</label>
                          <select class="form_control" id="urgencia" name="urgencia" >
                            <option selected>Nivel</option>
                            <option value="1">Bajo</option>
                            <option value="2">Medio</option>
                            <option value="3">Alto</option>
                          </select>
    </div>
<div class="box-footer col-xs-12 ">
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
