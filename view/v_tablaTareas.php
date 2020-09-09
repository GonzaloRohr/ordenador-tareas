<?php 
	
		while($row=$tablaTarea->fetch_assoc() ) { ?>
			
			<tr>
				<td class="overflow-auto"> <?php echo $row["titulo"] ?> </td>
				<td class="overflow-auto"> <?php echo $row["estado"] ?> </td>
				<td class="overflow-auto"> <?php echo $row["descripcion"] ?> </td>
				<td> <?php echo $row["fecha"] ?> </td>
				<td>
					<a class="p-1 h4" href="editar.php?id=<?php echo $row["id"] ?> ">
						<i class="far fa-edit"></i>
					</a>

					<a class="p-1 h4" href="controller/c_borrar.php?id=<?php echo $row["id"] ?>">
						<i class="far fa-trash-alt"></i>
					</a>
				</td>
			</tr>
<?php } ?>