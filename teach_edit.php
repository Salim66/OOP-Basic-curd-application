<?php include_once 'apps/autoload.php' ?>
<?php 

	/**
	 * 
	 */
	$teach = new Teacher;

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];

		$data = $teach -> singleTeacherShow($id);
		$single_data = $data -> fetch_assoc();
	}


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
	

	<?php 

		/**
		 * Teacher Form Setup
		 */
		if ( isset($_POST['update']) ) {
			// get form values
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];


			/**
			 * Form Validation
			 */
			if (empty($name) || empty($email) || empty($cell)) {
				$mess = "<p class=\"alert alert-danger\">All fields are required !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}else {

				$mess = $teach -> teacherDataUpdate($name, $email, $cell, $id);

			}


		}


	 ?>
	
	

	<div class="wrap ">
		<a class="btn btn-primary" href="teach_table.php">All Teachers</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign UP</h2>
				<?php 

					if ( isset($mess) ) {
						echo $mess;
					}

				 ?>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $id; ?>" method='POST'>
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo $single_data['name']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $single_data['email']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $single_data['cell']; ?>"  type="text">
					</div>
					<div class="form-group">
						<input name="update" class="btn btn-primary" type="submit" value="Update Data">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>



	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>