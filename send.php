<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/icon.png" type="image/png">
<head>
    <meta charset="UTF-8">
    <title>Tetris</title>
</head>
<body>

<div class="container">
<header>
    <h1 class="text-center"> Tetris </h1>
</header>
    <main>
<?php
require_once 'config.php';
$username = $_POST['username'];
$score = $_POST['score'];

$conn = mysqli_connect(SERVERNAME, USER, PASS, DBNAME);
mysqli_set_charset($conn,'utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO score (username, score, date )
 value ('".$username."' , ".$score." , ".time()." )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
    </main>
</div>


<script src="js/tetris.js">   </script>
</body>
</html>