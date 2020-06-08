<form class="form-white" action="<?php echo $form-action ?>" method="post">
	@csrf
	
	<h3 class="titulo">Empieza a aprender</h3>
					 <input type="hidden" name="token_ws" value="<?php echo $tokenWs ?>">
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Precio total</label>
					    @if(isset($precio))
					    <input type="text" class="form-control" id="inputAddress2" value="{{$precio}}" name="valor" readonly>
					    @else
					    <input type="text" class="form-control" id="inputAddress2" disabled="true" name="valor">
					    @endif
					  </div>
					  <input type="submit" class="btn btn-success" name="" value="comprar">


			
</form>
