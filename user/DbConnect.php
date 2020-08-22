 <?php 
	class DbConnect {
		private $host = 'localhost';
		private $dbName = 'education';
		private $user = 'root';
		private $pass = '';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=localhost;dbname=id14307394_mullbank', 'id14307394_multi_login', 'Z]%|C7=9us}a#cN7');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>