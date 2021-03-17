
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Regjistrimi </title>
	<link rel="stylesheet" type="text/css" href="faqet/css/logini.css">

</head>
<body>
<div class="faqja">
	<div class="form">
		<h1>
			Regjistrohu
		</h1>

		<?php
			if(isset($_GET['error'])){
				if($_GET['error'] == "hapsiratezbrazura"){
					echo '<p style="color: red;">Ju lutem mbushini gjithe hapsirat!</p>';
				} else if ($_GET['error'] == "emailigabim"){
					echo '<p style="color: red;">Ky email nuk ekziston!</p>';
				} else if($_GET['error'] == "kontrolloFjalekalimin"){
					echo '<p style="color: red;">Fjalekalimet nuk perputhen!</p>';
				}
			}
		?>

		<form method="post" action="reg.php" name="forma">
			<input  type="text" name="perdoruesi" placeholder="Perdoruesi">
			<input type="text" name="emaili" placeholder="Emaili">		
			<input  type="password" name="pass" placeholder="Fjalekalimi">
			<input type="password" name="ppass" placeholder="Perserit Fjalekalimin">
			<button name="submit" type="submit">Regjistrohu</button>

		</form>

		<br> <br>
										
		<button><a href="index.php">Faqja e Kycjes</a></button>
					
		</div>
</div>



</body>
<!--  NGA FAZA E PARE:
<script type="text/javascript">
function validimi() {
  var emri = document.forms["forma"]["emri"].value;
  var mbiemri = document.forms["forma"]["mbiemri"].value;
  var nr = document.forms["forma"]["numripersonal"].value;
  var username = document.forms["forma"]["username"].value;
  var fjalkalimi = document.forms["forma"]["pass"].value;

  if (emri == "" || mbiemri == "" || nr == "" ||  username == "" || fjalkalimi == ""  ) {
    alert(" Ju lutem plotesoni te gjitha inputet.");
    return false;
  } else {
  	alert("U regjistruat me sukses.");
  }
}
</script> -->

</form>
</html>
