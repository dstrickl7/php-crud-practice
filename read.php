<?php
// Include credentials
include 'db.php';
// MySQL command that gets all items from scores table
$sql = "SELECT * FROM scores";
// results of previous command being stored in seperate variable
$result = $conn->query($sql);
// For each row in table, dynamically generate the below HTML
while($row = $result->fetch_assoc()){
    // Two cases:
    echo "<tr>";
    // Case 2: Show row as editable form
    // if current row is the same row as the one recieved from GET parameter display a form
    /*
    $_SERVER['REQUEST_METHOD'] == 'POST' checks if 'update' was clicked first. This stops an error due to asking for $row[id] before it exists
    */
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $row['id'] == $_GET['id']) {
        echo '<form action="update.php" method="POST">';
        echo '<td><input type="text"  name="name" value="'.$row['name'].'"></td>';
        echo '<td><input type="number"  name="score" value="'.$row['score'].'"></td>';
        echo '<td><button type="submit">Save</button></td>';
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '</form>';
        // Case 1: Show row as is
      } else {
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
         // link of type button that takes user to index.php with a GET parameter(GET REQUEST)

        echo '<td><a href="index.php?id=' . $row['id'] . '" role="button" class="change-btn btn">Update</a></td>';
      }
    //   Delete button
      echo '<td><a href="delete.php?id=' . $row['id'] . '" role="button" class="delete-btn btn">Delete</a></td>';
         echo "</tr>";
}
$conn->close();
?>