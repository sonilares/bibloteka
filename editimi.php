
<?php
require 'konfigurimi.php';
	 $idp = $_GET['idd'];
	 $sqlP = "SELECT * FROM perdoruesit WHERE idPerdoruesit = '" . $idp. "'";
	 $rezultatiP = mysqli_query($conn, $sqlP);
	 $rowidP = mysqli_fetch_array($rezultatiP);	
	 if($row['roli'] != "admin"){
	header("Location: mesazhi.php");
} else {

 ?>
<link rel="stylesheet" type="text/css" href="faqet/css/editimi.css">
<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<title>editimi</title>
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
</div> <br> <br> <br><br>
<body>
	
 	<?php

			if(isset($_GET['pu'])){
    		$editpu = $_GET['pu'];
    		mysqli_query($conn,"UPDATE perdoruesit set roli='user' WHERE idPerdoruesit =$editpu");
    		header('location: menaxhimiPerdorueseve.php');		
		} else if(isset($_GET['pa'])){
			$editpa = $_GET['pa'];
			mysqli_query($conn,"UPDATE perdoruesit set roli='admin' WHERE idPerdoruesit =$editpa");	
			header('location: menaxhimiPerdorueseve.php');
		}
		?>
				<?php if($rowidP['roli'] == "admin"){  ?>
			<a href="editimi.php?pu=<?php echo $rowidP['idPerdoruesit']; ?>"><div align="middle"><button>Bëj user</button></div></a> 
		<?php  } else { ?>
			
			<div align="middle">
				<a href="editimi.php?pa=<?php echo $rowidP['idPerdoruesit']; ?>"><div align="middle"><button>Bëj Admin</button></div></a> 
				</div> <?php } ?>
				<br><br>
				<div align="middle"><img height="500" width="500" src="faqet/fotot/admin.png"></div>
</body>
<?php } ?>