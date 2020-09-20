<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card m-3">
		  <div class="card-header">
				<div class="bg-info">
					<h1 class="float-left"><a href="index.php">ORG</a></h1>
					<h1 class="float-right">Create</h2>
				</div>
		  </div>
		  <div class="card-body">
				<form action="../controll/controlador.php?method=create" method="POST">
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="Name" required>
					</div>

					<div class="form-group">
						<label for="">CNPJ:</label>
						<input type="text" class="form-control" name="cnpj" placeholder="42.145.1455/0001-78" required>
					</div>

					<div class="form-group">
						<label for="">IE:</label>
						<input type="text" class="form-control" name="ie" placeholder="16.145.145-98">
					</div>

					<div class="form-group">
						<label for="">Juridical Type:</label>
						<input type="text" class="form-control" name="juridicalType" placeholder="Juridical Type">
					</div>

					<div class="form-group">
						<label for="">Observação:</label>
						<textarea type="text" class="form-control" name="obs" placeholder="Observacao" rows="3"></textarea>
					</div>

					<div class="form-group">
						<label for="">Adress:</label>
						<input type="text" class="form-control" name="adress" placeholder="adress">
					</div>

					<div class="form-group">
						<label for="">Ended:</label>
						<input type="text" class="form-control" name="ended" placeholder="ended">
					</div>

					<input type="submit" class="btn btn-primary btn-block" value="Create" />
				</form>
			</div>
		</div>
</body>
</html>
