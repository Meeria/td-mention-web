<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="portfolio2022.css">
	<script src="https://kit.fontawesome.com/0f4f993d73.js" crossorigin="anonymous"></script>
	<title>Portfolio Denier d'Aprigny Mériadec</title>
	<link rel="shortcut icon" href="logo2.jpg" />
</head>
<header>
	<nav>
		<span id="index"></span>
		<h1 class="titre">C:/Users/<span id="portfolio">Mériadec_Denier_d_Aprigny</span></h1>
		<div class="menu">
			<?php
				$data=yaml_parse_file("yaml/menu.yaml");
				$i=0;
				foreach($data AS $fichier=>$nom){
					$active='';
					if($fichier=="index"){
						$active=' class="active" ';
					}
					echo '<a href="index.php#'.$fichier.'" id="section'.$i.'" '.$active.' onclick="changeClass('.$i.')">'.$nom.'</a>';
					$i++;
				}

			?>
			<!-- <a href="index.html" id="section0" class="active" onclick="changeClass0()">Accueil</a>
			<a href="#apropos1" id="section1" class="none" onclick="changeClass1()">A propos</a>
			<a href="#competences" id="section2" class="none" onclick="changeClass2()">Compétences</a>
			<a href="#experiences" id="section3" class="none" onclick="changeClass3()">Expériences</a>
			<a href="#formation" id="section4" class="none" onclick="changeClass4()">Formations</a>
			<a href="#contact" id="section5" class="none" onclick="changeClass5()">Contact</a> -->
		</div>
	</nav>
</header>

<body>
	<p class="dev">Developper Web (bientôt) Junior<span class="underscore">_</span></p>
	<p class="accroche">Hello, si tu veux en voir plus je t'invites à scroll !</p>

	<span id="apropos1"></span>
	<div id="apropos">
		<div class="photo+txt">
			<h2 class="titleapropos">C:/Presentation/<span id="moi">A propos de moi</span></h2>
			<p class="presentation">Hello, bienvenue sur mon portfolio. Je m'appelle Mériadec j'ai 22 ans et je suis
				actuellement en 1ere année de
				<span style="color:rgb(124,58,237) " ;>bts SIO </span>(Services Informatiques aux Organisations) en
				option <span style="color:rgb(124,58,237) " ;>SLAM </span> (Solutions Logicielles et Applications
				Métiers) dans l'établissement Saint-Ursule de Caen. Passioné depuis longtemps par l'informatique ce
				n'est que récemment
				que j'ai découvert le code et en particulier le dèveloppement web pour lequel j'y porte un grand
				intérêt. J'aimerais continuer mes études vers une licence en alternance pour, par
				la suite devenir developpeur web full stack. Je suis aussi un passionné de sport car cela fait
				maintenant 10 ans que je pratique
				l'athletisme dont quelques années à haut niveau.

			</p>
		</div>
		<img id="pp" src="pp.jpg">
	</div>
	<span id="competences"></span>
	<div class="competences">
		<h1 class="title">C:/Compétences/<span id="moi2">Mes_Compétences</span></h1>
		<h1 class="soustitre">Langages</h1>
		<div class="ligne">
			<div class="ht">
				<h2><i class="fa-brands fa-html5"></i>&ensp;HTML</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>

			<div class="ht">
				<h2><i class="fa-brands fa-css3-alt"></i>&ensp;CSS</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>

		</div>
		<div class="ligne">

			<div class="ht">
				<h2><i class="fa-brands fa-php"></i>&ensp;PHP</h2>
				<div class="container">
					<div class="skill" style="width: 10%">10%</div>
				</div>
			</div>

			<div class="ht">
				<h2><i class="fa-brands fa-python"></i>&ensp;PYTHON</h2>
				<div class="container">
					<div class="skill" style="width: 20%">20%</div>
				</div>
			</div>

		</div>
		<h1 class="soustitre">Langues</h1>
		<div class="ligne">

			<div class="ht">
				<h2>Espagnol</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>

			<div class="ht">
				<h2>Anglais</h2>
				<div class="container">
					<div class="skill" style="width: 70%">70%</div>
				</div>
			</div>
		</div>
		<h1 class="soustitre">Certifications</h1>
		<div class="ligne3">
			<div class="ht">
				<h2>Pix</h2>
				<div class="container">
					<div class="skill" style="width: 50%">50%</div>
				</div>
			</div>
			<div class="ht">
				<h2>Secnum</h2>
				<div class="container">
					<div class="skill" style="width: 70%">70%</div>
				</div>
			</div>
		</div>
	</div>


	<span id="experiences"></span>
	<div class="experiences">
		<h1>C:/Experiences/<span id="moi2">Mes_Expériences_Professionnelles</span></h1>
		<div id="xp1">
			<h3>Mars 2022 – Mai 2022</h3>
			<h4>Montage équipements automobile, LE CAPITAINE, SAINT-LÔ</h4>
			<p>
				- Montage d’accessoires sur des véhicules frigorifiques (caméra de recule,<br> branchement de feux…)
				dans un temps donné.
			</p>
		</div>
		<div id="xp2">
			<h3>Décembre 2021 – Janvier 2022</h3>
			<h4>Aide boulangerie / charcuterie, Intermarché, SAINT-LÔ</h4>
			<p>
				- Élaboration de pâtisseries (pains aux chocolats, croissants…), de pizzas<br>, mille-feuilles…
			</p>
		</div>
		<div id="xp1">
			<h3>Juin 2020 – Août 2020</h3>
			<h4>Réparation / livraison de commandes, Leclerc-Drive, SAINT-LÔ</h4>
			<p>
				- Préparation de commandes internet dans un temps imparti et chargement dans le<br> véhicule des
				clients.
			</p>
		</div>
		<div id="xp2">
			<h3>Décembre 2019 – Septembre 2021</h3>
			<h4>Livraison de repas à domicile, Uber-eat, CAEN </h4>
			<p>
				- Livraison de repas à domicile à vélo.
			</p>
		</div>
		<div id="xp1">
			<h3>Septembre 2019 - Novembre 2019</h3>
			<h4>Nettoyage et marquage au sol, Saint-André Plastique,<br> SAINT-ANDRÉ de l’ÉPINE</h4>
			<p>
				- Nettoyage de machines de production, marquage de sécurité au sol.
			</p>
		</div>
		<div id="xp2">
			<h3>Juillet 2018 – Juin 2019</h3>
			<h4>Armée de Terre, SAINT-AUBIN DU CORMIER</h4>
			<p>
				- Soldat réserviste : tir, surveillance, activités physiques, sécurisation.
			</p>
		</div>
		<div id="xp1">
			<h3>Janvier 2017 - Janvier 2018</h3>
			<h4>Sportif de haut niveau, SAINT-LÔ</h4>
			<p>
				- Inscrit sur la liste ministérielle de sportif de haut niveau en<br> saut en longueur. Plusieurs fois
				finaliste des championnats de France.
			</p>
		</div>
		<div>
			<a href="CV-2022 Mériadec Denier d'Aprigny1.pdf" target="_blank"
				download="CV-2022 Mériadec Denier d'Aprigny1.pdf">
				<p id="boutoncv">Télécharger mon CV <i class="fa-solid fa-download"></i></p>
			</a>
		</div>
	</div>


	<div class="formations" id="formation">
		<div class="kingformations">
			<h1>C:/Formations/<span id="moi2">Mes_Formations</span></h1>
			<div class="formations">
				<div class="line1">
					<div>
						<h3>Septembre 2020 - Juin 2021</h3>
						<h4>LICENCE STAPS, Université de CAEN, CAEN</h4>
						<p>- Obtention de la première année</p>
					</div>
					<img class="logo1" src="caen.png"></img>
				</div>
				<div class="lin"></div>
				<div class="line2">
					<img class="logo2" src="armée.png"></img>
					<div>
						<h3>Juillet 2018 - Novembre 2019</h3>
						<h4>Diplôme formation initial de reserviste, Armée de Terre,<br> SAINT-AUBIN DU CORMIER</h4>
					</div>
				</div>
				<div class="line1">
					<div>
						<h3>Septembre 2017 - Juin 2019</h3>
						<h4>BAC STI2D, Lycée CURIE - COROT, SAINT-LÔ</h4>
						<p>- Obtention du BAC STI2D mention ASSEZ BIEN</p>
					</div>
					<img class="logo1" src="curie.png"></img>
				</div>
				<div class="line2">
					<img class="logo2" src="college.png"></img>
					<div>
						<h3>Septembre 2012 - Juin 2015</h3>
						<h4>DNB, Collège du BON SAUVEUR, SAINT-LÔ</h4>
						<p>- Obtention du brevet des collèges mention BIEN</p>
					</div>
				</div>
				<a href="CV-2022 Mériadec Denier d'Aprigny1.pdf" target="_blank"
					download="CV-2022 Mériadec Denier d'Aprigny1.pdf">
					<p id="boutoncvformation">Télécharger mon CV <i class="fa-solid fa-download"></i></p>
				</a>
			</div>
		</div>
	</div>

	<hr>
	<span id="contact"></span>
	<div class="contact">
		<h1>Me contacter !</h1>
		<form method="post" action="contact.php" name="mailform">

			<div class="usermail">
				<p>
					<label for="mail">Votre Mail</label> : <input type="email" name="mail" id="mail"
						placeholder="roger@gmail.com" required />
				</p>
			</div>
			<div class="username">
				<p>
					<label for="nom">Votre Nom</label> : <input type="text" name="nom" id="nom" placeholder="Roger"
						required />
				</p>
			</div>
			<div class="usermessage">
				<p>
					<label for="message">Votre Message</label> : <textarea type="text" name="message" id="message"
						rows="5" cols="60" required placeholder="Votre message"></textarea>
				</p>
			</div>
			<div class="button">
				<input class="send" type="submit" value="Envoyer" />
			</div>


		</form>
	</div>

	<div class="scroll_to_top">
		<a href="#top"><i class="fa-solid fa-circle-arrow-up"></i></a>
	</div>

</body>
<footer>
	<div class="reseaux">
		<div><a href="https://www.linkedin.com/in/m%C3%A9riadec-denier-d-aprigny-9371951ab/" target="_blank"><i
					class="fa-brands fa-linkedin"></i></a></div>
		<div><a href="https://github.com/Meeria" target="_blank"><i class="fa-brands fa-github"></i></a></div>
		<div><a href="https://www.instagram.com/meeria._/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</div>
	<h4 class="droits">ⓒ2022. Meria. All Right Reserved \ Privacy policy</h4>
</footer>
<script src="script.js"></script>

</html>