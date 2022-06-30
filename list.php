
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
<a href="add.php"> ajouter un article </a>

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

$sql = "SELECT id, designation, prix,quantite FROM article";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>id</th>
    <th>designation</th>
    <th>prix</th>
    <th>quantite</th>
    <th></th>
    <th></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["designation"]. " </td>
        <td>" . $row["prix"]. "</td>
        <td>" . $row["quantite"]. "</td>
        <td><button type= 'button' onclick =''>U</button>"."</td>
        <td><button type= 'button' onclick =''>D</button>"."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>