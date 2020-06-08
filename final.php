<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		


	</style>
</head>
<body>

<div class="container">
	<h3>Compra exitosa</h3>
	<div class="row" >
		
		<div class="col-md-6 col-md-offset-3">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Monto</th>
				      <th scope="col">Codigo de autorización</th>
				      <th scope="col">Codigo de respuesta</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td id="amount"></td>
				      <td id="authorizationCode"></td>
				      <td id="responseCode"></td>
				    </tr>
				  </tbody>
				</table>
				
				<a class="btn btn-primary" href="http://aprendiendo-ingles.com.devel/final">Volver al sitio</a>
			</div>
	</div>
	
</div>

	<script type="text/javascript">
		var amount = document.getElementById('amount');
		var authorizationCode = document.getElementById('authorizationCode');
		var responseCode = document.getElementById('responseCode');

		amount.innerHTML = window.localStorage.getItem('amount');
		authorizationCode.innerHTML = window.localStorage.getItem('authorizationCode');
		responseCode.innerHTML = window.localStorage.getItem('responseCode');
	</script>
</body>
</html>