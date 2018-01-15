
function cacherFormPrincipal() 
{
	//premierment on cache le formulaire d'enregestrement
	var sauvegardePersonne = document.getElementById('sauvegardePersonne');
	sauvegardePersonne.style.display = 'none';
}

cacherFormPrincipal();

//ce qui ce pase lors du click sur ajouter(premier elements du menu)
//ce qu'on selectione c'est le lien 
var ajouter = document.getElementById('ajouter');
ajouter.addEventListener('click',function () {
	//on reaparaitre le formulaire d'enregestrement 
	sauvegardePersonne.style.display = 'inline-block';

	//aller vers premier input du formulaire d'enregestrement des personnes
	var inputNom = document.getElementById('nom');
	inputNom.focus();
})


/*gestion du button chercher par de notre menu  (deuxieme button)
1. on va recuperer tous les element (sous element de l'element chercher par)
2. on va associer a chaqu'un de ces elements une function onclick (addEventListener('click'))
3. ecrit dans chaqu'un de ces onclick le code convenable a la gestion 
*/


function chercher() 
{//cette fonction regroupe tous les cas de recherche (par nom par prenom ...etc)

	//on recupere le formulaire de recherche
	var formChercher = document.getElementById('formChercher');
	//et ces elementa 
	var label = document.getElementById('label');
	var champChercher = document.getElementById('champChercher');

	//1
	var chrParNom = document.getElementById('chrParNom');
	var chrParPreNom = document.getElementById('chrParPreNom');
	var chrParTel = document.getElementById('chrParTel');
	var chrParMail = document.getElementById('chrParMail');

	//2


	//on recupere l'input submit pour povoire modifier sa valeur

	var submitButton = document.getElementById('submitChercher');	

	chrParNom.addEventListener('click',function () {
		cacherFormPrincipal();
		submitButton.value = 'chercher';
		formChercher.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		label.innerHTML = chrParNom.innerHTML;
		//et on sible l'input de recherche
		champChercher.focus();
		//on change le propriete name (pour le traitement php)
		champChercher.name = 'nom';
	})


	chrParPreNom.addEventListener('click',function () {
		submitButton.value = 'chercher';
		cacherFormPrincipal();
		formChercher.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		label.innerHTML = chrParPreNom.innerHTML;
		//et on sible l'input de recherche
		champChercher.focus();
		//on change le propriete name (pour le traitement php)
		champChercher.name = 'prenom';
	})


	chrParTel.addEventListener('click',function () {
		submitButton.value = 'chercher';
		cacherFormPrincipal();
		formChercher.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		label.innerHTML = chrParTel.innerHTML;
		//et on sible l'input de recherche
		champChercher.focus();
		//on change le propriete name (pour le traitement php)
		champChercher.name = 'tel';
	})
		
	chrParMail.addEventListener('click',function () {
		submitButton.value = 'chercher';
		cacherFormPrincipal();
		formChercher.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		label.innerHTML = chrParMail.innerHTML;
		//et on sible l'input de recherche
		champChercher.focus();
		//on change le propriete name (pour le traitement php)
		champChercher.name = 'mail';
	})	
}

chercher();

//de la meme maniere du fonction chercher on va cree un fonction 
//supprimer pour l'element supprimer par de notre menu principal 
//et une troisieme fonction modifier 

//la fonction supprimer()
function supprimer() 
{//cette fonction regroupe tous les cas de suppression (par nom par prenom ...etc)

	//on recupere le formulaire de recherche precedement utiliser 
	//et on va modifier tous les attribut necessire pour qu'il soit un formulaire de suppression :)

	var formSupprimer = document.getElementById('formChercher');
	formSupprimer.id = 'formSupprimer';
	formSupprimer.style.display = 'none';//pour ne pas l'aparaitre avant la fin du traitement 
	//et ces elementa 
	var labelSup = document.getElementById('label');
	labelSup.id = 'labelSup';
	var champSupprimer = document.getElementById('champChercher');
	champSupprimer.id = 'champSupprimer';

	//1
	var supParNom = document.getElementById('supParNom');
	var supParPreNom = document.getElementById('supParPreNom');
	var supParTel = document.getElementById('supParTel');
	var supParMail = document.getElementById('supParMail');

	//2

	//on recupere l'input submit pour povoire modifier sa valeur

	var submitButton = document.getElementById('submitChercher');
	submitButton.id = 'supprimer';


	supParNom.addEventListener('click',function () {
		submitButton.value = 'supprimer';
		cacherFormPrincipal();
		formSupprimer.style.display = 'inline-block';
		//on donne comme label du champ a supprimer le nom du varible aproprie(nom , prenom .. ou)
		labelSup.innerHTML = supParNom.innerHTML;
		//et on sible l'input de recherche
		champSupprimer.focus();
		//on change le propriete name (pour le traitement php)
		champSupprimer.name = 'nom';
	})


	supParPreNom.addEventListener('click',function () {
		submitButton.value = 'supprimer';
		cacherFormPrincipal();
		formSupprimer.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelSup.innerHTML = supParPreNom.innerHTML;
		//et on sible l'input de recherche
		champSupprimer.focus();
		//on change le propriete name (pour le traitement php)
		champSupprimer.name = 'prenom';
	})


	supParTel.addEventListener('click',function () {
		submitButton.value = 'supprimer';
		cacherFormPrincipal();
		formSupprimer.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelSup.innerHTML = supParTel.innerHTML;
		//et on sible l'input de recherche
		champSupprimer.focus();
		//on change le propriete name (pour le traitement php)
		champSupprimer.name = 'tel';
	})
		
	supParMail.addEventListener('click',function () {
		submitButton.value = 'supprimer';
		cacherFormPrincipal();
		formSupprimer.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelSup.innerHTML = supParMail.innerHTML;
		//et on sible l'input de recherche
		champSupprimer.focus();
		//on change le propriete name (pour le traitement php)
		champSupprimer.name = 'mail';
	})	
}

supprimer();



function modifier() 
{//cette fonction regroupe tous les cas de recherche (par nom par prenom ...etc)

	//on recupere le formulaire de recherche
	var formModifier = document.getElementById('formChercher');
	formModifier.id = 'formModifier';
	formModifier.style.display = 'none';
	//et ces elementa 
	var labelMod = document.getElementById('label');
	labelMod.id = 'labelMod';
	var champModifier = document.getElementById('champChercher');
	champModifier.id = 'champModifier';

	//1
	var modParNom = document.getElementById('modParNom');
	var modParPreNom = document.getElementById('modParPreNom');
	var modParTel = document.getElementById('modParTel');
	var modParMail = document.getElementById('modParMail');

	//2

	modParNom.addEventListener('click',function () {
		formModifier.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelMod.innerHTML = modParNom.innerHTML;
		//et on sible l'input de recherche
		champModifier.focus();
		//on change le propriete name (pour le traitement php)
		champModifier.name = 'nom';
	})


	modParPreNom.addEventListener('click',function () {
		formModifier.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelMod.innerHTML = modParPreNom.innerHTML;
		//et on sible l'input de recherche
		champModifier.focus();
		//on change le propriete name (pour le traitement php)
		champModifier.name = 'prenom';
	})


	modParTel.addEventListener('click',function () {
		formModifier.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelMod.innerHTML = modParTel.innerHTML;
		//et on sible l'input de recherche
		champModifier.focus();
		//on change le propriete name (pour le traitement php)
		champModifier.name = 'tel';
	})
		
	modParMail.addEventListener('click',function () {
		formModifier.style.display = 'inline-block';
		//on donne comme label du champ de recher le nom du varible aproprie(nom , prenom .. ou)
		labelMod.innerHTML = modParMail.innerHTML;
		//et on sible l'input de recherche
		champModifier.focus();
		//on change le propriete name (pour le traitement php)
		champModifier.name = 'mail';
	})	
}

modifier();
alert("test");