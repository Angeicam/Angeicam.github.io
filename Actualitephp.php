<!DOCTYPE SQL>
<html>
<head>
<title> Icam </title>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp_thermic";

// Create connection
	 {try
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM releve_temp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Ambiance interieure 1: ". $row["Amb_Int1"]. ",   Paroi_Int: ". $row["Paroi_Int"].", HR_Int: " . $row["HR_Int"] .", Amb_Int2: " . $row["Amb_Int2"] . ",Amb_Ext1: ". $row["Amb_Ext1"]. ",   Paroi_Ext: ". $row["Paroi_Ext"].", HR_Ext: " . $row["HR_Ext"] .", Amb_Ext2: " . $row["Amb_Ext2"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>



    </body>
