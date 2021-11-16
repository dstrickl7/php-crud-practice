<?php
include 'db.php';

$id = $_GET['id']; //Get id from row Delete was clicked
$sql= "DELETE FROM scores WHERE id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: index.php");
?>