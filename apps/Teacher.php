<?php 


	/**
	 * All Teacher Management
	 */
	class Teacher extends DB
	{
		
		/**
		 * Teachers add to database by teacherRegistration method
		 */
		public function teacherRegistration($name, $email, $cell)
		{
			$sql = "INSERT INTO teachers(name, email, cell) VALUES('$name','$email','$cell')";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Teacher added successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


	}












 ?>