
<?php
require '../konfigurimi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM librat WHERE id = '" . $id. "'";
	$rezultati = mysqli_query($conn, $sql);
	$rowid = mysqli_fetch_array($rezultati);

if(isset($_SESSION['perdoruesId'])){

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $rowid['titulli'] ?></title>
	<link rel="stylesheet" type="text/css" href="css/stili2.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>

<?php
		require '../navbar.php';
		?>
<div class="mesi">
	<h1><?php echo $rowid['titulli'] ?></h1>
	<img width="400" height="500" src="fotot/<?php echo $rowid['foto'] ?>">
</div>

<div class="mesi">
	<h1>Pershkrimi:</h1>
	<p style="font-size: large;"><?php echo $rowid['pershkrimi']; ?></p>
</div>

	<?php
			if (isset($_GET['del'])) {
			$idDel = $_GET['del'];
			mysqli_query($conn, "DELETE FROM librat WHERE id=$idDel");
			header('location: index.php');
}
	 ?>

<?php

		if($row['roli'] == "admin"){

 ?>

	<div align="middle">
		<a href="librat.php?del=<?php echo $rowid['id']; ?>"><button style="background-color: red;">Shlyej</button></a>
	</div>

<?php } ?>



</body>
</html>


<?php
} else {

	header("Location: ../index.php");
}
?>
