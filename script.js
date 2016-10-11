// Création d'une fonction qui permettra de vérifier la longueur du champ
function verifChamp(champ)
{
	if (champ.value.length <5 || champ.value.length > 8 )
	{
		return false;
	}
	else
	{
		return true;
	}
}

function verifForm(f)
{
  var champOk = verifChamp(f.day);

  if (champOk) {
      return true;
  }
  else {
    return false;
    alert("Veuillez entrer un jour de la semaine (compris entre 5 et 8 caractères)");
  }
}
