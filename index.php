<!DOCTYPE html>
<html>
<head>
	<title>Ordenador de tareas</title>

	<!-- boottrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<!-- foont awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

	<script>

		function actualizarChat(){

			var request = new XMLHttpRequest();

			request.onreadystatechange= function(){
				if(request.readyState ==4 && request.status == 200){

					document.getElementById('chat').innerHTML= request.responseText;
				}
			}

			request.open('GET','controller/c_chat.php',true);
			request.send();
		}

		setInterval(function(){actualizarChat();}, 1000);
	</script>
</head>
<body onload="actualizarChat();">
	
	<div class="row p-2 bg-dark">

		<div class="col-md-4">

			<div class="card card-body">

				<form action="controller/c_tareaGuardar.php" method="POST">

					<div class="form-group">
						<input type="text" name="title" class="form-control"
						placeholder="Titulo de Tarea" autofocus>
					</div>

					<div class="form-group">
						<input type="text" name="estade" class="form-control"
						placeholder="Estado de Tarea" autofocus>
					</div>

					<div class="form-group">
						<textarea name="description" rows="2" class="form-control" placeholder="Descripción"></textarea>
					</div>

					<input type="submit" class="btn btn-outline-primary btn-block" name="save_task" value="Guardar">
				</form>
			</div>
		</div>

		<div class="col-md-8 overflow-auto" style="height:40vh;">
			<table class="table table-light table-bordered table-hover overflow-auto">
				<thead class="bg-primary">
					<tr>
						<th>Titulo</th>
						<th>Descripción</th>
						<th>Estado</th>
						<th>Creado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody class="">
					<?php 
						require_once("controller/c_tablaTareas.php");
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="row bg-secondary border border-primary border-100">

	<div class="col" style="height: 55vh;">

			<div class="container h-50 overflow-auto" id="chat">
			</div>

		<div class="container">
			<form class="form-group" method="POST" action="controller/c_chat_insertar.php">
				<input class="w-100 my-1 p-2" type="text" name="nombre" placeholder="ingresar tu nombre">
				<textarea class="w-100 my-1 " name="mensaje" placeholder="ingresar tu mensaje"></textarea>
				<input class="btn-block btn-outline-primary p-1" type="submit" name="enviar" value="enviar">
			</form>
		</div>
	</div>	
	
</div>



<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>