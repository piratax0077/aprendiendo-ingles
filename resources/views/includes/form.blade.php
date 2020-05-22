<form class="form-white" action="{{ route('index') }}" method="post">
	@csrf
	<h3>Empieza a aprender</h3>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="nombre">Nombre</label>
					      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
					    </div>
					    
					    <div class="form-group col-md-6">
					      <label for="apellido">Apellido</label>
					      <input type="text" class="form-control" name="apellido" placeholder="Apellido">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Address 2</label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputCity">City</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">State</label>
					      <select id="inputState" class="form-control">
					        <option selected>Choose...</option>
					        <option>...</option>
					      </select>
					    </div>
					    <div class="form-group col-md-2">
					      <label for="inputZip">Zip</label>
					      <input type="text" class="form-control" id="inputZip">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					        Check me out
					      </label>
					    </div>
					  </div>
					  <div class="btn-group btn-group-justified para-quien">
					  	<button type="button" class="btn btn-default btn-primary">Para mi</button>
					  	<button type="button" class="btn btn-default btn-primary">Para mi hijo</button>
					  </div>
					  <button type="submit" class="btn boton">Comienza ahora</button>
					</form>