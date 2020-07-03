<?php 



	/**
	 * All Students management
	 */
	class Student extends DB
	{
		
		/**
		 * Student add to database by studentRegistration method
		 */
		public function studentRegistration($name, $email, $cell, $uname)
		{
			$sql = "INSERT INTO students(name, email, cell, uname) VALUES('$name','$email','$cell','$uname')";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Student added successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}

		
		/**
		 * Student all data fetch
		 */
		public function studentAllDataShow()
		{
			$sql = "SELECT * FROM students";
			$data = parent::dbConnection() -> query($sql);
			return $data;
		}

		/**
		 * Student data delete by id
		 */
		public function deleteSingleStudent($id)
		{
			$sql = "DELETE FROM students WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Data deleted successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


		/**
		 * Single Student show by id
		 */
		public function singleStudentShow($id)
		{
			$sql = "SELECT * FROM students WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);
			return $data;

		}


		/**
		 * Update Student Data by id
		 */
		public function studentDataUpdate($name, $email, $cell, $uname, $id)
		{
			$sql = "UPDATE students SET name='$name', email='$email', cell='$cell', uname='$uname' WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);


			if ( $data ) {
				return "<p class=\"alert alert-success\">Update data successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


	}






 ?>