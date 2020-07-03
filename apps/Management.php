<?php 


	/**
	 * Management & functions
	 */
	class Management
	{
		
		public function old($info)
		{
			if ( isset($_POST[$info]) ) {
				
				echo $_POST[$info];

			}
		}
		
	}




 ?>