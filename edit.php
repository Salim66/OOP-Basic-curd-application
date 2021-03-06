<?php include_once 'apps/autoload.php' ?>
<?php 

	/**
	 * 
	 */
	$stu = new Student;

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];

		$adata = $stu -> singleStudentShow($id);
		$single_data = $adata -> fetch_assoc();
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
		 * Student Form Setup
		 */
		if ( isset($_POST['update']) ) {
			// get form values
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			$uname = $_POST['uname'];


			/**
			 * Form Validation
			 */
			if (empty($name) || empty($email) || empty($cell) || empty($uname)) {
				$mess = "<p class=\"alert alert-danger\">All fields are required !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}else {

				$mess = $stu -> studentDataUpdate($name, $email, $cell, $uname, $id);

			}


		}


	 ?>
	
	

	<div class="wrap ">
		<a class="btn btn-primary" href="table.php">All Students</a>
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
						<label for="">Username</label>
						<input name="uname" class="form-control" value="<?php echo $single_data['uname']; ?>" type="text">
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