<?php
	require 'config.php';
 
	class db_class
	{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct()
			{
			$this->connect();
			}
 
		private function connect()
			{
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn)
				{
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
				}
			}

		public function fomo($fname,$lname,$phone,$email,$password)
		{
			$stmt = $this->conn->prepare("INSERT INTO user(firstname,lastname,phone,email,password) VALUES (?,?,?,?,?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $fname,$lname,$phone,$email,$password);
			if($stmt->execute())
				{
					echo" <script>window.location='index.php'; alert('Successful'); </script>";
				}
			else
				{
					echo"<script>window.location='staffpage.php'; alert('Error, check and try again'); </script>";
				}
		}
		
		public function getuser($us)
		{
			$user=$us->name;
			$get=$this->conn->query("select * from user where email='$user'");
			$come=array();
			$come=$get->fetch_all(mysqli_assoc);
			
			$jj=json_encode($come);

			
			echo $jj;
		}
	}
?>