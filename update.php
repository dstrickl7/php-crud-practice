<!-- User must acknowledge they want to update something (by clicking on button)-->
<!-- Then  we must give user an area to enter new data-->
<!-- Then we need to allow user to save the data -->

<?php
include 'db.php';

$id = $_POST['id'];
$name =$_POST['name'];
$score =$_POST['score'];
$sql= "UPDATE scores SET name='$name', score='$score' WHERE id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: index.php");
?>