
<?php
session_start();
require 'databaza.php';
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rezultati);

?>