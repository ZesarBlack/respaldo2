<div class="box box-primary col-xs-12">
                <div class="box-header">
                  <h3 class="box-title">Comentarios del issue:</h3> <h1 ALIGN="center">{{($issue->titulo)}}</h1>
                </div><!-- /.box-header -->
<div id="notificacion_resul_fanu"></div>

<form   method="post"  action="{{route('comentarios.store')}}" >

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="box-body col-xs-12">
		<div class="form-group col-xs-12">
													<label for="comentario">Especificación</label>
													<textarea rows="4" cols="50" type="text" class="form-control" id="comentario" name="comentario" placeholder="Detalles especificos" value="{{ old('comentario') }}" p required >
													</textarea>
		</div>
    <div class="form-group col-xs-8">
                          <input type="hidden" class="form-control" id="issue_id" name="issue_id" placeholder="id del issue" value="{{($issue->id)}}" p required  readonly>
    </div>
</div>
<div class="box-footer col-xs-12 ">
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
