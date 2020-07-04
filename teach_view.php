<?php include_once "apps/autoload.php"; ?>
<?php 

	$show = new Teacher;

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];

		$data = $show -> singleTeacherShow($id);
		$single_data = $data -> fetch_assoc();
	}

	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $single_data['name']; ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	
	
	<div style="width: 450px;" class="wrap-table shadow">
		<a class="btn btn-info" href="teach_table.php">Back</a>
		<div class="card">
			<div class="card-body"> 
				<table class="table">
					<tr>
						<td>Name</td>
						<td><?php echo $single_data['name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $single_data['email']; ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $single_data['cell']; ?></td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>


	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>