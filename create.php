<!-- Don't forget to sanitize/verify user data inputs -->
<?php
include 'db.php';

$name = $_POST["name"];
$score = $_POST["score"];
// MySQL command stored inside variable
// scores is name of table
$sql = "INSERT INTO scores (name, score) values ('$name','$score')";
// conn references login credentials stored in db.php
// execute sql command
$conn->query($sql);
// closes connection
$conn->close();
// returns us to index.php after button is clicked
header("location:index.php");

?>