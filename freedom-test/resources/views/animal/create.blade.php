<div class="content">
	<div class="container-fluid">
		<div class="row">
    		<div class="col-md-offset-1 col-md-10 col-md-offset-1">
        		<div class="panel panel-default">
        			<div class="panel-heading"><h3>Registrar Animal</h3></div>
  					<div class="panel-body">
            			<form class="form-horizontal" method="POST" action="">
				            
				            <!-- nombre -->
				            <div class="form-group">
				              <label class="col-md-4 control-label">Nombre</label>
				              <div class="col-md-6">
				                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
				              </div>
                            </div>
                            
                            <!-- nombre -->
				            <div class="form-group">
                                <label class="col-md-4 control-label">Edad</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" name="edad" value="{{ old('edad') }}" required>
                                </div>
                              </div>

				            
				            <div class="form-group">
				              <div class="col-md-offset-3 col-md-6 col-md-offset-3 center">
				                <button type="submit" class="btn btn-success ancho">Registrar</button>
				                <a href="{{url('estados')}}" class="btn btn-danger ancho">Regresar</a>    
				              </div>
				            </div>
          				</form>
          			</div>	
        		</div>
    		</div>
		</div>
	</div>
</div>
@endsection