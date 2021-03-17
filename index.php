

<?php
if(isset($_POST['kycu-submit'])){
	require 'databaza.php';

	$perdoruesimail = $_POST['perdoruesimail'];
	$password = $_POST['fjalekalimi'];

	if(empty($perdoruesimail) || empty($password)){

		header("Location: header.php?error=fushaTeZbrazura");
		exit();

	}
	else {
		$sql = "SELECT * FROM perdoruesit WHERE perdoruesiPerdoruesit=? OR emailiPerdoruesit=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: header.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $perdoruesimail, $perdoruesimail);
			mysqli_stmt_execute($stmt);
			$rezultati = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($rezultati)){
				$kontrolloPass = password_verify($password, $row['passiPerdoruesit']);
				if($kontrolloPass == false){
					header("Location: header.php?error=passiGabim");
					exit();
				} 
				else if ($kontrolloPass == true){
					session_start();
					$_SESSION['perdoruesId'] = $row['idPerdoruesit'];
					$_SESSION['perdoruesPerdorues'] = $row['perdoruesiPerdoruesit'];

					header("Location: faqet/index.php?sukses&perdoruesimail=".$perdoruesimail);
					exit();
				}

				else {
					header("Location: header.php?error=passiGabim");
					exit();
				}
			}

			else {
				header("Location: header.php?error=skaPerdorues");
				exit();
			}
		}
	}

}
else {
	header("Location: header.php");
	exit();
}
