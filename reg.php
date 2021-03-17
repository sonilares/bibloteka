<?php
if(isset($_POST['submit'])){
	require 'databaza.php';
	$pe = $_POST['perdoruesi'];
	$ema = $_POST['emaili'];
	$pa = $_POST['pass'];
	$ppa = $_POST['ppass'];

	if(empty($pe)  || empty($ema) || empty($pa) || empty($ppa)){
		header("Location: regjistrimi.php?error=hapsiratezbrazura&perdoruesi=".$pe."&emaili=".$ema);
		exit();
	}

	else if(!filter_var($ema, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $pe)){

		header("Location: regjistrimi.php?error=emailigabim&perdoruesi");
		exit();

	}

	else if(!filter_var($ema, FILTER_VALIDATE_EMAIL)){
		header("Location: regjistrimi.php?error=emailigabim&perdoruesi=".$pe);
		exit();
	}

	else if(!preg_match("/^[a-zA-Z0-9]*$/", $pe)){
		header("Location: regjistrimi.php?error=perdoruesigabim&emaili=".$ema);
		exit();
	}

	else if($pa !== $ppa){
		header("Location: regjistrimi.php?error=kontrolloFjalekalimin&perdoruesi=".$pe."&emaili".$ema);
		exit();
	}

	else {
		$sql = "SELECT perdoruesiPerdoruesit FROM perdoruesit WHERE perdoruesiPerdoruesit=? AND passiPerdoruesit=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: regjistrimi.php?error=sqlerror");
			exit();
		}

		else {
			mysqli_stmt_bind_param($stmt, "s", $pe);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$kontrolloRezultatin = mysqli_stmt_num_rows($stmt);
			if($kontrolloRezultatin > 0){
				header("Location: regjistrimi.php?error=perdoruesiEshteiMarrur");
				exit();
			}

			else {
				$sql = "INSERT INTO perdoruesit (perdoruesiPerdoruesit, emailiPerdoruesit, passiPerdoruesit) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: regjistrimi.php?error=sqlerror");
					exit();
				}
				else {
					$passiHashed = password_hash($pa, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $pe, $ema, $passiHashed);
					mysqli_stmt_execute($stmt);
					header("Location: regjistrimi.php?sukses");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: regjistrimi.php");
	exit();
}