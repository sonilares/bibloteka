<div>
		<div id="div1">
			<nav role="navigation">
				<ul>
					<li><a href="index.php">Libra</a></li>
					<li><a href="portfolio.php">Biblioteka</a></li>
					<li><a href="about.php">Rreth nesh</a></li>
					<li><a href="contact.php">Kontaktoni</a></li>
					<?php
					if($row['roli'] == "admin"){
				
						echo '<li><a href="../admin.php">Paneli Adminit</a></li>';
					}

					?>
					<?echo'<li class="ckycja"><form action="..//ckycu.php" method="post"><button class="butonckycje" type="submit" name="ckycu-submit">Ckycu</button></form></li>
		</form></li>
				</ul>
			</nav>
</div>
</div>