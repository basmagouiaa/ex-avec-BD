<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$des=$_POST['designation'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$sql = "INSERT INTO article (designation, prix, quantite) VALUES ('$des','$prix','$quantite')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>