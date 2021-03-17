<?php
session_start();
require '../databaza.php';
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$stmt = mysqli_stmt_init($conn);
$row = mysqli_fetch_array($rezultati);
if(isset($_SESSION['perdoruesId'])){

?>
<!DOCTYPE html>
<html> 
	<head>
		<link rel="stylesheet" type="text/css" href="css/stili2.css">
		<link rel="stylesheet" type="text/css" href="css/main2.css">
	<title>Biblioteka</title>
	</head>
	<body>

<?php
		require '../navbar.php';
		?>
			<div align="middle">
				<h2>Qyteti dhe biblioteka</span></h2>
				
					<div>
						<a href="#">
							<img class="responsive"  src="fotot/pr1.jpg" >
							<h3>Prishtine</h3>
							</a>
					</div>
					<div>
						<a href="#">
							<img class="responsive" src="fotot/pr2.jpg" >
							<h3>Prishtine</h3>
							</a>
					</div>
					
					<div>
						<a href="#">
							<img class="responsive" src="fotot/pr3.jpg" >
							<h3>Prishtine</h3>
						
						</a>
					</div>
					
					<div>
						<a href="#">
							<img class="responsive" src="fotot/pr4.jpg" >
							<h3>Prishtine</h3>
						</a>
					</div>

				

					<div>
						<a href="#">
							<img class="responsive" src="fotot/pr5.jpg" >
							<h3>Prishtine</h3>
							<p>
				
						</a>
					</div>

			</div>
		

		


	</body>
</html>
<?php
} else {

	header("Location: ../index.php");
}
?>


