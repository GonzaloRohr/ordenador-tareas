
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body >

	<table class="table table-striped table-dark ">
		<tbody>
<?php 

	while( $row=$resultadoChat->fetch_assoc() ){ ?>
			<div>
				<tr>
					<td>
						<span style="color: #1c62c4;"><?php echo $row['nombre']; ?>: </span>
						<span style="color: #00000;"><?php echo $row['mensaje']; ?></span>
						<span style="float: right;"><?php echo $row['fecha']; ?></span>

					</td>
				</tr>
			</div>
	<?php } ?>

		</tbody>
	</table>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>
