<?php
require_once 'config.php';


$conn = mysqli_connect(SERVERNAME, USER, PASS, DBNAME);
mysqli_set_charset($conn,'utf8');

$sql = "SELECT  * FROM score ORDER BY score DESC LIMIT 28";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $out ='<ol>';
    while($row = $result->fetch_assoc()) {

        $out .='<li>'.$row['score'].' '.$row['username'].'</li>';
    }
    $out.= '</ol>';
    echo $out;
} else {
    echo "Ничего нет";
}
$conn->close();