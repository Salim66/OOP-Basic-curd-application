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


		/**
		 * Teacher all data fetch
		 */
		public function teacherAllDataShow()
		{
			$sql = "SELECT * FROM teachers";
			$data = parent::dbConnection() -> query($sql);
			return $data;
		}


		// /**
		//  * Teacher data delete by id
		//  */
		public function deleteSingleTeacher($id)
		{
			$sql = "DELETE FROM teachers WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Data deleted successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}



		/**
		 * Single Teacher show by id
		 */
		public function singleTeacherShow($id)
		{
			$sql = "SELECT * FROM teachers WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);
			return $data;

		}


		/**
		 * Update Teacher Data by id
		 */
		public function teacherDataUpdate($name, $email, $cell, $id)
		{
			$sql = "UPDATE teachers SET name='$name', email='$email', cell='$cell' WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);


			if ( $data ) {
				return "<p class=\"alert alert-success\">Update data successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}




	}












 ?>