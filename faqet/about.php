<?php
session_start();
require '../databaza.php';
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
		<link rel="stylesheet" type="text/css" href="css/main2.css">
	<title>Rreth Nesh</title>
	</head>
	<body>

<?php
		require '../navbar.php';
		?>

				<div class="row" align="middle">
					<div class="column">
						<h2 >Rreth Nesh<span></span></h2>
						<p>Biblioteka Kombëtare dhe Universitare e Kosovës është themeluar nga Kuvendi i Kosovës, dhe ka për qëllim kryesor mbledhjen dhe ruajtjen e trashëgimisë intelektuale të Kosovës dhe për Kosovën. Koleksionet e saja janë një thesar i çmuar të trashëgimisë kombëtare, rajonale dhe asaj botërore. Biblioteka është themeluar në nëntor të vitit 1944 dhe selia e saj ka qenë në Prizren. Pastaj është bartur në Prishtinë më 1946. Më 1952 Biblioteka është mbyllur dhe fondet e saj janë përvetësuar nga ish-Biblioteka Miladin Popoviç. Më 1956 Biblioteka prapë rithemelohet në objektin prapa objektit të tanishëm të BKUK-së, që tash është Galeria e Arteve e Kosovës. Më 1982, Biblioteka Kombëtare dhe Universitare e Kosovës (e njohur në atë kohë si Biblioteka Popullore dhe Universitare e Kosovës), e fillon veprimtarinë e vet në objektin arkitektonik të stilit të veçantë me kupola, në të cilin edhe tash vepron. Për shkak të rrethanave historike dhe politike nëpër të cilat ka kaluar Kosova, Biblioteka Kombëtare dhe Universitare e Kosovës, ka kryer funksionin nën praktikat dhe shtrëngesat e sistemit ideologjik e politik, duke u njohur me emra të ndryshëm, si: Biblioteka Krahinore, kur është themeluar më 1944 deri më 1952, Qendra Bibliotekare e KAKM-së (1956-1961), Biblioteka Popullore Krahinore (1961-1970), Biblioteka Popullore dhe Universitare e Kosovës e Metohisë (1990 - 1999). Nga viti 1999, ky institucion qendror bibliotekar i Kosovës njihet me emrin: Biblioteka Kombëtare dhe Universitare e Kosovës, duke kryer funksionin si qendër e informacionit bibliotekar në nivel kombëtar, që mbledh, përpunon dhe ruan materialet bibliotekare me vlerë dokumentare për kulturën, artin dhe shkencën.</p>
					</div>
					<div>
						<img width="100" class="responsive" src="fotot/pr1.jpg"> 
					</div>
				</div>
				


			<div>
				<h2>Emri zyrtar: Monument /Ansambël</span></h2>

				<div>
					<div>
						<img src="fotot/pr3.jpg">
	
				</div>
			</div>

		
			</div>

		</div>
	</div>


	</body>
</html>

<?php
} else {

	header("Location: ../index.php");
}
?>
