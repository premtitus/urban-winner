<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Username, xp, email FROM example1");
    $stmt->execute();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sql = "SELECT Username, xp, email FROM example1";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Username"]. " - Name: " . $row["xp"]. " " . $row["email"]. "<br>";
    }
$conn->close();
?>