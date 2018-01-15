<?php
/*
ou lieur de repeter le meme code 4 fois on a cree un fonction
afficher qui recoit une variable et cherche ...


mais commme les variables (nom,prenom,mail) dans une table
indexe on a besion d'une variable i qui va identifier 
s'il s'agit du nom ou prenom ou ...

*/

if(isset($_POST['nom']))
{
	$variableRecu = $_POST['nom'];
	$GLOBALS['i']=0;//car premier element d'un line du ficher pesonnes.txt 
}

if(isset($_POST['prenom']))
{
	$variableRecu = $_POST['prenom'];
	$GLOBALS['i']=1;//car 2em element d'un line du ficher pesonnes.txt 
}
 
if(isset($_POST['tel']))
{
	$variableRecu = $_POST['tel'];
	$GLOBALS['i']=3;//car 4em element d'un line du ficher pesonnes.txt 
}

if(isset($_POST['mail']))
{
	$variableRecu = $_POST['mail'];
	$GLOBALS['i']=2;//car 3em element d'un line du ficher pesonnes.txt 

}


afficher($variableRecu);

function afficher($variableRecu)
{
	
if(isset($variableRecu))
{
	//$nom = htmlspecialchars($variableRecu);//ne jamais faire confiance  de sesai d'utilisateur 

	$file = new SplFileObject('../modele/fichiers/personnes.txt', "a+");//ovrire du fichier personnes

	//le recherche du $nom dans le fichier :) 


	$tableTableChampPersonne = array();
	foreach ($file as $key => $line) 
	{
		// le fichier personnes.txt comport (nom;prenom;mail;tel;motdepass)
		/*on va cree une table de deux dimentions (table de tables)
		table 1 contenat comme elements(items) : tables ont comme elements les champs du lines du ficher personnes.txt 
		
		donc ona plusieur sous table chaqu'une d'elles a 
		comme elements les champs d'un line du ficher personnes.txt :)
		*/
		//code traduisant la TEXT precetende just en bas
		array_push($tableTableChampPersonne, explode(';', $line));
	}

	//on va affihcer tous les peronnes en donnant une coleur specifique
	//aux personnes valide
	?>
	<h1>Voici la liste du personnes valide le motif :[ <?php echo $variableRecu;?>] </h1>
	<table class="tabNom" align="center">
		<tr>
			<td>Nom</td>
			<td>Prenom</td>
			<td>Tel</td>
			<td>E-mail</td>
		</tr>
		<?php
		foreach ($tableTableChampPersonne as $key => $value) 
		{
			if ($value[$GLOBALS['i']] == $variableRecu) //$value[0] contien le nom du personne
			{
			?>
			<tr class="valid">
				<td><?php echo $value[0];//nom?></td>
				<td><?php echo $value[1];//prenom?></td>
				<td><?php echo $value[3];//tel?></td>
				<td><?php echo $value[2];//email?></td>
			</tr>
			<?php
			}
			else
			{
			?>
			<tr>
				<td><?php echo $value[0];?></td>
				<td><?php echo $value[1];?></td>
				<td><?php echo $value[3];?></td>
				<td><?php echo $value[2];?></td>
			</tr>
			<?php
			}	
		}
			?>

	</table>
		<p style="text-align: center; color: red">les nomes valide sont colorees en vert (si aucun line n'est colore donc aucun nom valide !!!)</p>

<?php	
}//fin du if
}//fin de la fonction afficher



?>

<style type="text/css">
/*pour l'affichage des noms valide*/
	.valid
	{
		background-color: green;
	}

	.tabNom
	{
		border-collapse: collapse;
	}

	td
	{
		border: 1px solid black;
		width: 25%;
		position: relative;
		box-sizing: border-box;

	}

	tr
	{
		border-collapse: collapse;
		text-align: center;
	}

	h1
	{
		text-align: center;
		font-size: 40px;
		font-family: serif;
		font-weight: normal;
		font-style: italic;
	}
</style>


<?php

function supprimer($variableRecu)
{
	$fileTemporaire = new SplFileObject('../modele/fichiers/personnesTemp.txt','a+');//fichier pour contenir les lines a conserver temporairement 
	$personnes = new SplFileObject('../modele/fichiers/personnes.txt', "a+");

	$tableTableChampPersonne = array();
	foreach ($personnes as $key => $line) 
	{//ce code est deja commente dans la fonction chercher()
		array_push($tableTableChampPersonne, explode(';', $line));
	}

	if($GLOBALS['i'] == 0)//nom
	{//on cherche dans les noms
		foreach ($tableTableChampPersonne as $key => $value) 
		{
			if ($value[0] != $variableRecu)
			{//si le nom n'est egale pas le nom a supprimer on conserve la lingne dans un autre ficher 
			//qui replecera le  contenu du fichier personnes.txt
				
				$personneInfo = $value[0] . ';' . $value[1] . ';' . $value[2] . ';' . $value[3] . ';' . $value[4];
				$fileTemporaire->fwrite($personneInfo);
				//$fileTemporaire->fputcsv($value, $delimiter=';');
			}
		}
		//on vide le fichier personnes.txt
		//on ajoute copy le fichier fileTemporaire dans personnes.txt
		$personnes->ftruncate(0);
		$personnes->fwrite(file_get_contents($fileTemporaire));
		$fileTemporaire->ftruncate(0);
	}

	elseif($GLOBALS['i'] == 1)//prenom
	{
		foreach ($tableTableChampPersonne as $key => $value) 
		{
			if ($value[1] != $variableRecu)
			{
				$personneInfo = $value[0] . ';' . $value[1] . ';' . $value[2] . ';' . $value[3] . ';' . $value[4];
				$fileTemporaire->fwrite($personneInfo);
			}
		}
		$personnes->ftruncate(0);
		$personnes->fwrite(file_get_contents($fileTemporaire));
		$fileTemporaire->ftruncate(0);
	}

	elseif ($GLOBALS['i'] == 2) //mail
	{
		foreach ($tableTableChampPersonne as $key => $value) 
		{
			if ($value[3] == $variableRecu)
			{
				$personneInfo = $value[0] . ';' . $value[1] . ';' . $value[2] . ';' . $value[3] . ';' . $value[4];
				$fileTemporaire->fwrite($personneInfo);
			}
		}
		$personnes->ftruncate(0);
		$personnes->fwrite(file_get_contents($fileTemporaire));
		$fileTemporaire->ftruncate(0);
	}

	elseif ($GLOBALS['i'] == 3)//tel
	{
		foreach ($tableTableChampPersonne as $key => $value) 
		{
			if ($value[2] == $variableRecu)
			{
				$personneInfo = $value[0] . ';' . $value[1] . ';' . $value[2] . ';' . $value[3] . ';' . $value[4];
				$fileTemporaire->fwrite($personneInfo);
			}
		}
		$personnes->ftruncate(0);
		$personnes->fwrite(file_get_contents($fileTemporaire));
		$fileTemporaire->ftruncate(0);
	}
}


supprimer($variableRecu);