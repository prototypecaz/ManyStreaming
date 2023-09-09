var hash = document.location.hash; // permet de localiser un hash (#)
var text; // Permettra d'afficher nos message d'erreur

switch (true) {
    case (hash === "#emailInvalide"): // Premiere cas: si hash localise '#username'
        text = "identifiant invalide"; // affectation de la valeur a la variable
        break; //arrete 
    case (hash === "#password"): // Deuxieme cas: si hash localise '#password'
        text = "Mot de passe invalide."; // affectation de la valeur a la variable
        break; // arrete 
    case (hash === "#activate"): // Deuxieme cas: si hash localise '#forget'
        text = "Merci de confirmer votre compte en cliquant sur le lien d'activation envoyé sur votre email";  // affectation de la valeur a la variable
        break; // arrete 
    case (hash === "#activate-again"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte existe déja mais n'est pas activé, un email d'activation vient de vous être renvoyer";  // affectation de la valeur a la variable
        break; // arrete   
    case (hash === "#already-existe"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte existe déja";  // affectation de la valeur a la variable
        break; // arrete   
    case (hash === "#nonactiver"): // Deuxieme cas: si hash localise '#forget'
        text = "Votre compte n'est pas activé, cliquer sur l'email d'activation, Merci";  // affectation de la valeur a la variable
        break; // arrete        
    default: // si aucune des condtions precedente est vrai alors 
        text = ""; // affectation de la valeur(vide) a la variable
       
}

document.querySelector('#erreurs').innerText = text; // affichage du message d'erreur dans la balise #erreurs

/* recupère depuis l'url les chaines de caractère à partir du # */
var email = document.location.hash.slice(1);
function b64_to_utf8( str ) {
    return decodeURIComponent(escape(window.atob( str )));
  }
 /* decode l'email depuis l'url pour l'afficher dans la div erreur */
 var emailDecode =  b64_to_utf8(email);

 /* si l'email décodé est different de vide alors rajoute moi ce text dans la div erreur */
  if (emailDecode !== ""){
    text = "Mot de pass envoyé sur email : "+emailDecode;
  /* on affiche dans a div erreurs "Mot de pass envoyé sur email : + son email */ 
   document.querySelector('#erreurs').innerText = text; 
  }

