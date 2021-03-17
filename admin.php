<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<?php

session_start();
require 'databaza.php';
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rezultati);
if($row['roli'] != "admin"){
	header("Location: mesazhi.php");
} else {
?>

<title>Admin Paneli</title>

<div class="header">
	<div class="logo">
		<a href="admin.php">
			<h1>ADMIN PANELI</h1>
		</a>
	<div class="logo">
		<a href="faqet/index.php">
			<h1 style="float: right;font-size: 15px; padding-top: 20px;">
			<i class="fa fa-arrow-circle-left">

			</i>KTHEHU NE HOMEPAGE</h1>
		</a>
	</div>
</div>
</div> <br> <br>


<div style=" text-transform: capitalize;" class="container dashboard">
	<h1>Mirë se Erdhe <?php echo $row['perdoruesiPerdoruesit']; ?>!</h1>
<div class="stats">
			<a style="color: #302e4d;" href="mesazhet.php" class="first">
				<span>Lexo Mesazhet</span> 
				<span>Nga Kontakt Forma</span>
			</a>

				<a style="color: #302e4d;" href="shtoliber.php">
				<span>Shto nje Liber</span> <br>
				</a>

				<a style="color: #302e4d;" href="menaxhimiPerdorueseve.php">
				<span>Menaxho Perdoruesit</span> <br>
				</a>		
		</div>

</div>
<div align="middle">

		<img height="500" width="500" src="faqet/fotot/admin.png">

</div>

<?php } ?>

