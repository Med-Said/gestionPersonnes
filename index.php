<!DOCTYPE html>
<html>
<head>
	<title>gestions  personnes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width: device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./vue/css/chercher_.css">
	<style type="text/css">
		body
		{
			background: white;
		}
		table td
		{
			border: 1px solid black;
			width: 33%;
			position: relative;
			padding: 0px;
		}
		table,tr
		{
			width: 100%;
			position: relative;

		}

		#submit,#valider,#reset
		{
		display: inline-block;
		width: 100%;
		margin: 7px auto;
		position: relative;
		border: 1px solid pink;
		box-sizing: border-box;
		margin: 0px;
		padding: 14px;
		}

		#submit
		{
			display: none;
		}
		/*style lors de la selection*/


		/*on cache le formulaire de la chercher initialment*/
		#formChercher
		{
			display: none;
		}

	</style>
</head>
<body>
	<div id="divNav">
		<nav><!-- le menu principale de la page donne la posibilite de suprimer , chercher ajouter ... etc -->
		<ul>
			<li><a href="#" id="ajouter" >ajouter</a></li>
			<li><a href="#">chercher par</a>
				<ul class="sousMenu">
					<li><a href="#" id="chrParNom" >Nom</a></li>
					<li><a href="#" id="chrParPreNom">Prenom</a></li>
					<li><a href="#" id="chrParTel">Tel</a></li>
					<li><a href="#" id="chrParMail">E-mail</a></li>
				</ul>
			</li>
			<li><a href="#">suprimer par</a>
				<ul class="sousMenu">
					<li><a href="#" id="supParNom">Nom</a></li>
					<li><a href="#" id="supParPreNom">Prenom</a></li>
					<li><a href="#" id="supParTel">Tel</a></li>
					<li><a href="#" id="supParMail">E-mail</a></li>
				</ul>
			</li>
			<li><a href="#">modifier le</a>
				<ul class="sousMenu">
					<li><a href="#" id="modParNom">Nom</a></li>
					<li><a href="#" id="modParPrenom">Prenom</a></li>
					<li><a href="#" id="modParTel">Tel</a></li>
					<li><a href="#" id="modParMail">E-mail</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</div>
	
	<div id="divForm">
		<form name="sauvegardePersonne" id="sauvegardePersonne" action="controleur/gestionDePersonne.php" method="post">
		<label for="nom">Nom: </label>
		<input type="text" name="nom" id="nom" required="required">
		<br>

		<label for="prenom">Prenom: </label>
		<input type="text" name="prenom" id="prenom" required="required">
		<br>

		<label for="mail">E-mail: </label>
		<input type="email" name="mail" id="mail" required="required">
		<br>

		<label for="tel">Tel: </label>
		<input type="text" name="tel" id="tel" required="required">
		<br>

		<label for="motDePasse">Mot de passe: </label>
		<input type="password" name="motDePasse" id="motDePasse" required="required">
		<br>
		<div id="divSubmit">
			<table>
				<tr>
					<td><input type="button" name="valider" id="valider" class="valider" value="valider"></td>
					<td><input type="submit" name="submit"  value="enregestrer" id="submit" class="valider"></td>
					<td><input type="reset" name="reset" id="reset" value="reset" class="valider"></td>
				</tr>
			</table>
		</div>
	</form>
	</div>

	<!--ici on va cree un seul formulaire pour la modification du personne 
		qui se change dynamiquement selon le choix du champ a chercher
	-->



	<form class="formChercher" name="chercher" action="./controleur/menu.php" method="post" id="formChercher">
		<label for="champChercher" id="label" class="label">champChercher</label>
		<input type="text" name="champChercher" id="champChercher" class="chercherSupprimer">
		<br>

		<input type="submit" class="submitChercher" name="submitChercher" id="submitChercher" value="Chercher">
	</form>

	<!-- nos fichiers .js-->
	<script type="text/javascript" src="./vue/javascript/validation.js"></script>
	<script type="text/javascript" src="./vue/javascript/menu.js"></script>
</body>
</html>



<?php //227942801102445 ?>