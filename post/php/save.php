<?php
$name = $_POST["name"];
include 'connexion.php';
$sql="INSERT INTO `exemple` (`name`) VALUES ('$name');";
if ($conn->query($sql) == TRUE) {
header("location:index.php");
} else {
echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>