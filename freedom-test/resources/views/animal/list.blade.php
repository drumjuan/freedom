<?php @include('layout') ?>
<div class="content">
  <div class="container-fluid">
      <div class="col-md-offset-1 col-md-10 col-md-offset-1 contenido">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Lista de Empleados</h3></div>
            <div class="panel-body">
            <div class="menu_superior col-md-12" style="margin-bottom:20px; padding:0px;">
              <!-- ADICIONAR EMPLEADOS -->
              <div>
                <a href="/create" class="btn btn-success boton_adicionar"> 
                  Adicionar Animal 
                </a>
              </div>
              <!-- ///////////////////////////////// -->
              <!-- BUSCAR EMPLEADO 
              <form class="form-inline buscador" action="" method="get">
                <input type="hidden" name="_token" value="">
                <input type="text" name="dato" class="form-control mb-2 mr-sm-2 dato_busqueda"  placeholder="Busca por: nombre o estado" autocomplete="off">
                <button type="submit" class="btn btn-primary mb-2 boton_enviar" >Enviar</button>
              </form> -->
              <!-- ///////////////////////////////// -->
            </div>
            <table class="table table-bordered">
              <tr>
                <th class="center">Nombre</th>
                <th class="center">Edad</th>
                <th class="center">Peligrosidad</th>
                <th class="center">Corral</th>
              </tr>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>   
    