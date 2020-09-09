<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- boottrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<?php 

	if(isset($_GET['id'])){

		require_once("model/operaciones.php");

		$id=$_GET['id'];
		$operar= new operacionesTareas();
		$result= $operar->getTarea($id);
		$user= $result->fetch_assoc();

				$titulo= htmlentities(addslashes($user['titulo']));
				$estado= htmlentities(addslashes($user['estado']));
				$descripcion= htmlentities(addslashes($user['descripcion']));
	}

	if(isset($_POST['update'])){

		$u_id=htmlentities(addslashes($_GET['id']));
		$u_titulo= htmlentities(addslashes($_POST['title']));
		$u_estado= htmlentities(addslashes($_POST['estade']));
		$u_descripcion= htmlentities(addslashes($_POST['description']));

		require_once("model/operaciones.php");

		$u_operar= new operacionesTareas();
		$u_operar->setTarea($u_id,$u_titulo,$u_estado,$u_descripcion);

		HEADER("Location: index.php");
	}
?>

	<div class="container bg-dark">

		<div class="row">
			<div class="col-md-4 mx-auto">

				<div class="car card-body">

					<form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">

						<div class="form-group">
							<input type="text" name="title" value="<?php echo $titulo;?> "
							class="form-control" >
						</div>

						<div class="form-group">
							<input type="text" name="estade" value="<?php echo $estado;?> "
							class="form-control" >
						</div>

						<div class="form-group">
							<textarea name="description" rows="2" class="form-control" placeholder="Update Description"> <?php echo $descripcion;?> </textarea>
						</div>

						<button class="btn btn-outline-primary btn-block" name="update">
							Actualizar
						</button>
					</form>
					
				</div>
			</div>
		</div>
	</div>



<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>