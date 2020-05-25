<form class="form-white" action="{{ route('index') }}" method="post">
	@csrf
	<h3>Empieza a aprender</h3>
		<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="nombre">Nombre</label>
					      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
					    </div>

					    <div class="form-group col-md-6">
					      <label for="apellido">Apellido</label>
					      <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" name="email" placeholder="Email" required>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Precio total</label>
					    @if(isset($precio))
					    <input type="text" class="form-control" id="inputAddress2" value="{{$precio}}" name="valor" readonly>
					    @else
					    <input type="text" class="form-control" id="inputAddress2" disabled="true" name="valor">
					    @endif
					  </div>
					  <div class="form-row">
					    
					    <!--Parte importante -->
					    <div class="form-group col-md-6">
					      <label for="inputState">Region</label>
					      <select id="regiones" class="form-control" name="region" required>
					        
					      </select>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputState">Ciudad</label>
					      <select id="comunas" class="form-control" name="comuna" required>
					        
					      </select>
					    </div>
						<!-- Fin parte importante -->

					  </div>
					  

					  <button type="submit" class="btn boton" id="btn-de-pago">Continuar con el pago</button>
					</form>
