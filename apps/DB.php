<?php 

	

	/**
	 * Database Setup & Managements
	 */
	class DB
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db = "oop395";

		private $conn;


		/**
		 * Database Connection Setup
		 */
		protected final function dbConnection()
		{
			$this -> conn = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
			return $this -> conn;
		}
		
	}








 ?>