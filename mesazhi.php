<style type="text/css">
	body{
		


   background: url("faqet/fotot/libri.png");
  background-repeat: repeat;
  background-size: 30px;
  background-color: #343538;

	}
	h1{

	}

</style>
<?php

require 'konfigurimi.php';
if(isset($_SESSION['perdoruesId'])){
	

?>
	<div align="middle">	<img src="faqet/fotot/sad.png"> </div>
<br><br><br><br>
<body>
	
<h1 style="color: white" align="middle">Duhet te jeni admin per te hyre aty :'( </h1><br>
<a  style="text-decoration: none; color: white;" href="faqet/index.php"><h3 align="middle">Shko ne faqen Kryesore</h3></a>
</body>

<?php 

} else {

 ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<body>
<h1 style="color: white" align="middle">Duhet te jeni te kyqur per te hyre aty :O </h1><br>
<a  style="text-decoration: none; color: white;" href="faqet/index.php"><p align="middle">shko te faqja kycjes</p></a>
<p align="middle">ERROR</p>
</body>

<?php } ?>
