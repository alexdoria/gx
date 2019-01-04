<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>add row</title>
		
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
	</head>
	<body>
		<form action="regalos.php" method="post" name="register" id="registry">
			<div class="formgroup">
				<label for="usrname">Organizador</label>
				<input type="text" class="form-control" id="usrname" name="usrname">
			</div>
			<div class="formgroup">
				<label for="usremail">Organizador</label>
				<input type="text" class="form-control" id="usremail" name="usremail">
			</div>
			
			<button type="button" id="add_user_button">+ Agregar fila</button>
			<button type="submit">Continuar</button>
			
		</form>
	</body>
	
	<script src="add_row.js"></script>
	
</html>