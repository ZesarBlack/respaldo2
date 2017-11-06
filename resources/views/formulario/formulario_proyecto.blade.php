<div class="box box-primary col-xs-12">
              <div class="box-header">
                <h3 class="box-title">Nuevo Proyecto</h3>
              </div><!-- /.box-header -->
<div id="notificacion_resul_fanu"></div>
<form   method="post"  action="{{route('lista_proyectos.store')}}" >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="box-body col-xs-12">
        <div class="form-group col-xs-6">
                              <label for="nombre">Nombres completo*</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group col-xs-6">
                              <label for="fecha de entrega">Fecha de entrega</label>
                              <input type="date" class="form-control" id="fentrega" name="fentrega" placeholder="Fecha de entrega" >
        </div>
        <div class="box-footer col-xs-12 ">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
</div>
</form>
