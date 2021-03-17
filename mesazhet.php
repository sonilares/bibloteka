<?php
require 'konfigurimi.php';
$sqlKontakt = "SELECT * FROM kontakt ORDER BY id desc";
$rezultatiKontakt = mysqli_query($conn, $sqlKontakt);
if($row['roli'] != "admin"){
	header("Location: mesazhi.php");
} else {
?>
<style>
table, td, th {  
  border: 1px solid #302e4d;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>

<link rel="stylesheet" type="text/css" href="faqet/css/logini.css">
<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<table width="100%" border="1" style="border-collapse:collapse;">


<title>Mesazhet nga Kontakt Forma</title>

<div class="header">
	<div class="logo">
		<a href="admin.php">
			<h1>ADMIN PANELI</h1>
		</a>


	<div class="logo">
		<a href="faqet/index.php">
			<h1 style="float: right; font-size: 15px; padding-top: 20px;">
			<i class="fa fa-arrow-circle-left">

			</i>
			KTHEHU NE HOMEPAGE
		</h1>
		</a>
	</div>
</div>
</div>
 <br>
 <br>
<h1 style="color: #302e4d;" align="center">Mesazhet nga Kontakt forma</h1>


<thead>
<tr align="middle">
<th style="color: #302e4d;"><strong>Numerimi</strong></th>
<th style="color: #302e4d;"><strong>Emri</strong></th>
<th style="color: #302e4d;"><strong>Emaili</strong></th>
<th style="color: #302e4d;"><strong>Mesazhi</strong></th>
<th style="color: #302e4d;"><strong>Shlyej kete Mesazh</strong></th>
</tr>
</thead>
<tbody>

		<?php
			if (isset($_GET['del'])) {
			$idDelKontakt = $_GET['del'];
			mysqli_query($conn, "DELETE FROM kontakt WHERE id=$idDelKontakt");
			header('location: mesazhet.php');
		}
	 ?>


<?php
$count=1;
while($rowKontakt = mysqli_fetch_assoc($rezultatiKontakt)) { ?>

<tr style="color: black;"><td  align="center"><?php echo $count; ?></td>
<td align="center"><p ><?php echo $rowKontakt["emri"]; ?></p></td>
<td align="center"><p ><?php echo $rowKontakt["emaili"]; ?></p></td>
<td align="center"><p ><?php echo $rowKontakt["mesazhi"]; ?></p></td>
<td align="center"><div align="center"><a href="mesazhet.php?del=<?php echo $rowKontakt['id']; ?>"><button style="background-color: red;">Shlyej</button></a></div></td>
</tr>
<?php $count++; } ?>

</tbody>
</table>


<?php

} 
?>
