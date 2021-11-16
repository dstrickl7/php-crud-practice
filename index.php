<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/MySQL practice</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>CRUD attempt</h1>
        <p>First attempt to create a CRUD with PHP and MySQL.</p>

        <form action="create.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="score">Score</label>
            <input type="number" name="score" id="score">
            <button type="submit">Add</button>
        </form>

        <table>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
    </div>
</body>

</html>