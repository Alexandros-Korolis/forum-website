<?php

	define('SERVERNAME', "localhost");
	define('USERNAME',"root");
	define('PASSWORD', "");
	define('DBNAME', "db_final_php");
	
	function connectWithDb() {
		$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		if ($conn->connect_error) {
		  die("Connection failed");
		}
		return $conn;
	}

	function getData($sql) {
		$response = [];

		$connection = connectWithDb();

		$result = $connection->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				array_push($response, $row);
			}
		}

		$connection->close();

		return $response;
	}


	function insertToDB($sql) {
		$conn = connectWithDb();

		return $conn->query($sql);
	}
	
	function updateToDb($sql) {
		$conn = connectWithDb();
		return $conn->query($sql);
	}
	
	function deletefromDb($sql) {
		$conn = connectWithDb();
		return $conn->query($sql);
	}
?>