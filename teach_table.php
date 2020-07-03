<?php include_once 'apps/autoload.php'; ?>
<?php 

	$teacher = new Teacher;


	/**
	 * GET URL DATA FROM ID
	 */
	// if ( isset($_GET['id']) ) {
	// 	$id = $_GET['id'];

	// 	$delete = $student -> deleteSingleStudent($id);

	// }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table">
		<!-- <?php 

			if ( isset($delete) ) {
				echo $delete;
			}

		 ?> -->
		<a class="btn btn-primary" href="teach.php">Add new Teacher</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
							
						<?php 

							$all_teacher = $teacher -> teacherAllDataShow();

							$id = 1;
							while($teach = $all_teacher -> fetch_assoc()):

						 ?>

						<tr>
							<td><?php echo $id; $id++ ?></td>
							<td><?php echo $teach['name']; ?></td>
							<td><?php echo $teach['email']; ?></td>
							<td><?php echo $teach['cell']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="teach_view.php?id=<?php echo $teach['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $teach['id']; ?>">Edit</a>
								<a id="delete" class="btn btn-sm btn-danger" href="?id=<?php echo $teach['id']; ?>">Delete</a>
							</td>
						</tr>
						
						<?php endwhile; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>

		$('a#delete').click(function(){
			let val = confirm("Are you sure?");

			if ( val == true ) {
				return true;
			}else {
				return false;
			}
		});

	</script>
</body>
</html>