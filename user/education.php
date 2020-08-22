<?php 
	
	class education	{
		
		private $id;
		private $name;
		private $address;
		private $type;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "locations";

		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }
		function setName($name) { $this->name = $name; }
		function getName() { return $this->name; }
		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }
		function setType($type) { $this->type = $type; }
		function getType() { return $this->type; }
		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }
		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }

		public function __construct() {
			$serv = "localhost";
			$unm = "root";
			$pwd = "";
			$db_name = "id14307394_mullbank";
			$mysql = new mysqli($serv, $unm, $pwd, $db_name);
			if ($mysql->connect_error) {
			die("Connection failed: " . $mysql->connect_error);
			}
			$this->conn = $mysql;
		}

		public function getCollegesBlankLatLng() {
			
			// require_once('assets/db.php');
			// echo var_dump($this->conn);
			$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
			$stmt = mysqli_query($this->conn, $sql);
			// $stmt->execute();
			return $stmt->fetch_all(MYSQLI_ASSOC);
		}

		public function getAllColleges() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = mysqli_query($this->conn,$sql);
			return $stmt->fetch_all(MYSQLI_ASSOC);
		}

		public function updateCollegesWithLatLng() {
			$sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':lat', $this->lat);
			$stmt->bindParam(':lng', $this->lng);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>