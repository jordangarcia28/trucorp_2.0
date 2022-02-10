<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td {
		    border: 1px solid black;
		}
	</style>
</head>
<body>

	<?php
		$servername = "172.19.0.3";
		$username = "root";
		$password = "trucorp123";
		$dbname = "Trucorp";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT id, nama, alamat, jabatan FROM users";
		$result = $conn->query($sql);
		
		$users = $result>num_rows;
		echo "Jumlah user: ".$users."<br>";

		if ($result->num_rows > 0) {
		    echo "<table><tr><th>ID</th><th>Name</th><th>Alamat</th><th>Jabatan</th></tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>" . $row["id"]. "</td>
			<td>" . $row["nama"]. "</td>
			<td>" . $row["alamat"]. "</td>
			<td>" . $row["jabatan"]. "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "Tidak ada data";
		}

		$conn->close();
	?> 

</body>
</html>
