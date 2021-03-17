 
<?php
require '../databaza.php';
$message = "";
if(!empty($_POST["submit"])) {
	$emri = $_POST["emri"];
	$emaili = $_POST["emaili"];
	$mesazhi = $_POST["permbajtja"];

	mysqli_query($conn, "INSERT INTO kontakt (emri, emaili, mesazhi) VALUES ('" . $emri. "', '" . $emaili. "','"  . $mesazhi. "')");
	$insert_id = mysqli_insert_id($conn);
	$message = "Mesazhi juaj u dergua me sukses.";
}
session_start();
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
	<link rel="stylesheet" type="text/css" href="css/logini.css">
	
	
	<title>Kontaktimi</title>
	
	</head>
	<body>
<?php
		require '../navbar.php';
		?>	
            <div class="faqja">
            	<form name="kontaktforma" frmContact"" enctype="multipart/form-data" onsubmit="return validoKontaktFormen()" action="" method="post" class="form">
            	<div class="input-row">
            		<h1>Na Kontaktoni</h1>
            	</div>

				<p><span id="userName-info" class="info"></span><input type="text" placeholder="Emri dhe Mbiemri" id="emri" name="emri"></p>


				<p><span id="userEmail-info" class="info"></span><input class="input-field" type="text" id="emaili" placeholder="Email" name="emaili"></p>


				<p><span id="userMessage-info" class="info"></span><textarea placeholder="Mesazh" name="permbajtja" class="input-field" id="permbajtja"></textarea></p>


				<p><input type="submit" name="submit" value="Dergo Mesazh"> </p>

<p style="color:green;"><?php echo $message; ?></p>
			</form>
</div>
</body>
</html>

<?php
} else {

	header("Location: ../index.php");
}
?>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validoKontaktFormen() {
            var valido = true;
            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var emri = $("#emri").val();
            var emaili = $("#emaili").val();
            var mesazhi = $("#permbajtja").val();
            
            if (emri == "") {
                $("#userName-info").html("Mbusheni Hapsiren.");
                $("#emri").css('border', '#e66262 1px solid');
                valido = false;
            }
            if (emaili == "") {
                $("#userEmail-info").html("Mbusheni Hapsiren.");
                $("#emaili").css('border', '#e66262 1px solid');
                valido = false;
            }
            if (!emaili.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Ky Email nuk ekziston");
                $("#emaili").css('border', '#e66262 1px solid');
                valido = false;
            }

            if (mesazhi == "") {
                $("#userMessage-info").html("Mbusheni Hapsiren.");
                $("#permbajtja").css('border', '#e66262 1px solid');
                valido = false;
            }
            return valido;
        }
</script>
