<?php 



	/**
	 * All Staff Management
	 */
	class Staff extends DB
	{
		
		/**
		 * Staffs add to database by staffRegistration method
		 */
		public function staffRegistration($name, $email, $cell)
		{
			$sql = "INSERT INTO staffs(name, email, cell) VALUES('$name','$email','$cell')";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Staff added successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


		/**
		 * Staff all data fetch
		 */
		public function staffAllDataShow()
		{
			$sql = "SELECT * FROM staffs";
			$data = parent::dbConnection() -> query($sql);
			return $data;
		}


		/**
		 * Staff data delete by id
		 */
		public function deleteSingleStaff($id)
		{
			$sql = "DELETE FROM staffs WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);

			if ( $data ) {
				return "<p class=\"alert alert-success\">Data deleted successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


		/**
		 * Single Staff show by id
		 */
		public function singleStaffShow($id)
		{
			$sql = "SELECT * FROM staffs WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);
			return $data;

		}


		/**
		 * Update Staff Data by id
		 */
		public function staffDataUpdate($name, $email, $cell, $id)
		{
			$sql = "UPDATE staffs SET name='$name', email='$email', cell='$cell' WHERE id='$id'";
			$data = parent::dbConnection() -> query($sql);


			if ( $data ) {
				return "<p class=\"alert alert-success\">Update data successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}


	}













 ?>