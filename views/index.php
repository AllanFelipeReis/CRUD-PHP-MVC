<?php require_once '../dao/DAO.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Read</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
	<div class="container">
		<div class="card mt-3">
		  <div class="card-header">
				<div class="bg-info">
					<h1 class="float-left">ORG</h1>
					<h1 class="float-right">Read</h2>
				</div>
		  </div>
		  <div class="card-body">

		<a href="create.php" class="btn btn-primary mb-3">New Org</a>

		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col" class="text-center">#</th>
					<th scope="col" class="text-center">NAME</th>
					<th scope="col" class="text-center">CNPJ</th>
					<th scope="col" class="text-center">IE</th>
					<th scope="col" class="text-center">JURIDICAL TYPE</th>
					<th scope="col" class="text-center">ADRESS</th>
					<th scope="col" class="text-center">OBS</th>
					<th scope="col" class="text-center">ENDED</th>
					<th scope="col" colspan="2" class="text-center">OPC</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach (OrgDAO::serch() as $value) { ?>
						<tr>
							<th scope="row"><?= $value[0] ?></th>
							<td><?= $value[1] ?></td>
							<td><?= $value[2] ?></td>
							<td><?= $value[3] ?></td>
							<td><?= $value[4] ?></td>
							<td><?= $value[5] ?></td>
							<td><?= $value[6] ?></td>
							<td><?= $value[7] ?></td>
							<td><a href="editar.php?id=<?=$value[0]?>"><i class="fas fa-pen fa-xs"></i></a></td>
							<td><a href="../controll/controlador.php?method=elim&id=<?=$value[0]?>"
								onclick="return confirm('Deseja Eliminar a org <?=$value[0]?>?')"><i class="fas fa-trash fa-xs"></a></td>
						</tr>
					<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div>
</body>
</html>
