<?php 
require 'databaza.php';
$statusi = "";
if(isset($_POST['submit'])){
	$titulli = $_POST['titulli'];
	$foto = $_FILES["foto"]['name'];
	$pershkrimi = $_POST['pershkrimi'];
	$autori = $_POST['autori'];
	$insert = mysqli_query($conn, "INSERT INTO librat (titulli, foto, pershkrimi, autori) VALUES ('" . $titulli. "', '" . $foto. "', '" . $pershkrimi. "' , '" . $autori. "')");
	$insertLiber_id = mysqli_insert_id($conn);
	$statusi = "Keni shtuar librin me sukses, Shikoni librin tuaj ne faqen kryesore.";
}
session_start();
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$stmt = mysqli_stmt_init($conn);
$row = mysqli_fetch_array($rezultati);

 if(isset($_SESSION['perdoruesId'])){
 	if($row['roli'] != "admin"){
 		header("Location: mesazhi.php");
 	} else {

?>
<!DOCTYPE html>
 <html> 
	<head>				
	<link rel="stylesheet" type="text/css" href="faqet/css/stili2.css">
	<link rel="stylesheet" type="text/css" href="faqet/css/logini.css">
	<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
	
	<title>Shto Librin</title>
	<div class="header">
	<div class="logo">
		<a href="admin.php">
			<h1>Admin Paneli</h1>
		</a>
	<div class="logo">
		<a href="faqet/index.php">
			<h1 style="float: right;font-size: 15px; padding-top: 20px;">
			<i class="fa fa-arrow-circle-left">

			</i>
			Kthehu ne Homepage</h1>
		</a>
	</div>
</div>
</div>
	
	</head>
	<body>
            <div class="faqja">
            	<form name="libriforma" enctype="multipart/form-data" onsubmit="return validoLiberFormen()" action="shtoliber.php" method="post" class="form">
            	<div class="input-row">
            		<h1>Shto Librin</h1>
            	</div>
				<p><span id="titulli-info" class="info"></span><input type="text" placeholder="Titulli i librit" id="titulli" name="titulli"></p>

				Shto Foto<input type="file" name="foto" id="foto">
				<p><span id="pershkrimi-info" class="info"></span><textarea placeholder="Pershkrimi i librit" name="pershkrimi" class="input-field" id="pershkrimi"></textarea></p>
				<p><span id="autori-info" class="info"></span><input type="text" placeholder="Autori" name="autori" class="input-field" id="autori"></input></p>
				<p><input type="submit" name="submit" value="Shto Librin"> </p>

<p style="color:green;"><?php echo $statusi; ?></p>
			</form>
</div>
</body>
</html>

<?php
}} else {

	header("Location: index.php");
}
?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validoLiberFormen() {
            var valido = true;
            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var titulli = $("#titulli").val();
            var pershkrimi = $("#pershkrimi").val();

            if (titulli == "") {
                $("#titulli-info").html("Mbusheni Hapsiren.");
                $("#titulli").css('border', '#e66262 1px solid');
                valido = false;
            }
            if (pershkrimi == "") {
                $("#pershkrimi-info").html("Mbusheni Hapsiren.");
                $("#pershkrimi").css('border', '#e66262 1px solid');
                valido = false;
            }

            return valido;
        }
</script>
