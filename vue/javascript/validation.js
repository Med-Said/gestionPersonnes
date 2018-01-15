function reset() {//pour reinitialiser lous les valeurs
		var nom = document.getElementById('nom');
		var prenom = document.getElementById('prenom');
		var tel = document.getElementById('tel');
		var mail = document.getElementById('mail');
		var password = document.getElementById('motDePass');

		nom.value = "";
		prenom.value = "";
		tel.value = "";
		mail.value = "";
		password.value = "";
}


function valider() 
{
//pour decider si la button enregester peut etre clickable ou non
	//permet d'afficher la button enregester 
	if(!validerNom())
	{
		var n = document.getElementById('nom');
		n.focus();
		n.style.border = '1px solid red';
		n.value = '';
		n.placeholder = 'les caracteres (; et @) ne sont pas acceptable';
		alert('les caracteres (; et @) ne sont pas acceptable');
	}
	else if(!validerPreNom())
	{
		var p = document.getElementById('prenom');
		p.focus();
		p.style.border = '1px solid red';
		p.value = '';
		p.placeholder = 'les caracteres (; et @) ne sont pas acceptable';
	}

	else if (!validerMail()) 
	{
		var m = document.getElementById('mail');
		m.focus();
		m.style.border = '1px solid red';
	}
	else if (!validerTel()) 
	{
		var t = document.getElementById('tel');
		t.focus();
		t.style.border = '1px solid red';
	}
	else if (validerTel() && validerMail() && validerNom() && validerPreNom())
	 {
	 	var submit = document.getElementById('submit');
		submit.style.display = 'inline-block';
	 }
}


function validerNom()
{//un nom ne peut pas contenir les caracteres suivants : (; @)
	var nom = document.getElementById('nom');
	if(/;/.test(nom.value) || /@/.test(nom.value))
	{//si le nom contien ; ou @ return false 
		return false;
	}
	else
	{
		return true;
	}
}

function validerPreNom()
{//un nom ne peut pas contenir les caracteres suivants : (; @)
	var prenom = document.getElementById('prenom');
	if(/;/.test(prenom.value) || /@/.test(prenom.value))
	{//si le nom contien ; ou @ return false 
		return false;
	}
	else
	{
		return true;
	}
}

function validerMail() {//la fonction de validation pour l'e-mail
	var mail = document.getElementById('mail');
	
	if(/^[a-z0-9_.-]+@[a-z0-9_.-]+\.[a-z]{2,7}$/.test(mail.value))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validerTel() {//la fonction de validation pour telephone
	var tel = document.getElementById('tel');
	if(/^[234][0-9]{7}$/.test(tel.value) || /^\+[2]{3}[234][0-9]{7}$/.test(tel.value))
	{
		return true;
	}
	else
	{
		return false;
	}
}


//si le mail est incorrect les modification imediate du style 
//de l'input mail
var mail = document.getElementById('mail');
mail.addEventListener('blur',function (e) {
	if(!validerMail())
	{
		mail.style.border = '1px solid red';
		mail.placeholder = 'mail incorrect';
	}
})

//si le telephone est incorrect les modification imediate du style 
//de l'input telephone
var tel = document.getElementById('tel');
tel.addEventListener('blur',function (e) {
	if(!validerMail())
	{
		tel.style.border = '1px solid red';
		tel.placeholder = 'telephone incorrect';
	}
})



//appel de la fonction reset 

var reset = document.getElementById('reset'); 

reset.addEventListener('click',function () {
	reset();
})


//appel de la fonction valider
var valider2 = document.getElementById('valider'); 
valider2.addEventListener('click',function () {
	valider();
	alert('ok');
})

