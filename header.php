<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<style type="text/css">
			div{
				  margin: auto;
  width: 60%;
  padding: 10px;
			}
	</style>
<link rel="stylesheet" type="text/css" href="faqet/css/logini.css">

	<title>Kycja </title>
</head>
<body>
	<div class="faqja">		
		<?php
		if(isset($_SESSION['idPerdoruesit'])){
			echo '	<form class="form" action="ckycu.php" method="post">
			<button type="submit" name="ckycu-submit">Ckycu</button>
		</form>';

		} else {

			echo '<form action="index.php" name="loginForma" class="form" method="post">			
			<h1>Kycu</h1>';	

			if(isset($_GET['error'])){
				if($_GET['error'] == "passiGabim"){
					echo '<p style="color: red;">Fjalekalimi juaj eshte gabim!</p>';
				} else if ($_GET['error'] == "skaPerdorues"){
					echo '<p style="color: red;">Ky perdorues nuk ekziston!</p>';
				} else if ($_GET['error'] == "fushaTeZbrazura"){
					echo '<p style="color: red;">Ju lutem mbushini te gjitha fushat!</p>';
				} 
			}			
			
					echo'<input type="text" name="perdoruesimail" placeholder="Perdoruesi/Emaili">			
					<input type="password" name="fjalekalimi" placeholder="Fjalekalimi">	

				<br><br>
				
					<input type="submit" name="kycu-submit" value="Kycu">
				
				<br> <br>					
					<button><a href="regjistrimi.php">Regjistrohu</a></button>			
		</form>	';

		}

		?>
		
	</div>
</body>
</html>
