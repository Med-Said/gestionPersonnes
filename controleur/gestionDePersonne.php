<?php

//recuperaton de l'information d'utilisateur

/*
la fonction htmlspecialcahr pour eviter la faille XSS 
(la faille XSS : injection des codes javascript dans les champs de formulaire)
*/

if( isset($_POST['nom']) and isset($_POST['prenom']) and
	isset($_POST['mail']) and isset($_POST['tel']) and
	isset($_POST['motDePasse']))
{//cette if pour etre sure que tous les champs sont bien saisie
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$tel = htmlspecialchars($_POST['tel']);
	$motDePasse = htmlspecialchars($_POST['motDePasse']);


	//insertion de donnes apres toutes les validations 

	//overture du fichier d'insertion sous le mode de l'edture et ecriture avec la posibilite de creation s'il n'exist pas  : 
	$file = fopen('../modele/fichiers/personnes.txt', 'a+');

	$personneInfo = $nom . ';' . $prenom . ';' . $mail . ';' . $tel . ';' . $motDePasse . "\n";
	fputs($file,$personneInfo);

	//fermeture du fichier d'insertion
	fclose($file);
}

function validerDonnees($value='')
{//cette fonction pour valider le nom, prenom
	
}


/*

$fichier = fopen("source.txt","r+")
pour afficher le contenu du ficher dans le navigateur : fpassthru($ficheir)
fgetss() : meme role de fgets sauf que il n'extrait pas les balises thml ni php
fread($fichier) = lire une chiane de caractere de longeur donnee fread(string pointeur , string longueur)
file_exists($fichier) : verification d'existance d'un fichier

*/