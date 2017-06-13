/**
 * Created by jrhod on 2017-05-15.
 */
var app = angular.module("gpApp",['pascalprecht.translate']);

app.config(function($interpolateProvider,$translateProvider){
    $interpolateProvider.startSymbol('{[').endSymbol(']}');

    //--TRANSLATION CONFIG

    // Adding a translation table for the English language
    $translateProvider.translations('en', {
        "ERR_SIGNIN_EMAIL"     : "Please enter a valid email",
        "ERR_SIGNIN_PASSWORD"    : "Please enter a password.",
        "ERR_SIGNIN_FAILED" : "Your email or password is incorrect. Please try again.",
		
		"ERR_REGISTER_FIRSTNAME" : "Please enter your first name",
		"ERR_REGISTER_LASTNAME" : "Please enter your last name",
		"ERR_REGISTER_EMAIL" : "Please enter a valid email",
		"ERR_REGISTER_PASSWORD" : "Please enter a password",
		"ERR_REGISTER_REPASSWORD" : "Please confirm your password",
		"ERR_REGISTER_DONTMATCH" : "Your passwords don't match",
		"ERR_REGISTER_PHONE" : "Please enter a phone number",
		"ERR_REGISTER_COUNTRY" : "Please enter a country",
		"ERR_REGISTER_STATE" : "Please enter a state",
		"ERR_REGISTER_CITY" : "Please enter a city",	
		"ERR_REGISTER_ADDRESS" : "Please enter a address",
		"ERR_REGISTER_ZIPCODE" : "Please enter a zipCode",
	
        "ERR_UPDATEPASSWORD_PASS"     : "Please enter your old password",
        "ERR_UPDATEPASSWORD_REPASS"    : "Please enter your new password.",
        "ERR_UPDATEPASSWORD_NEWPASS" : "Please confirm your new password",
        "ERR_UPDATEPASSWORD_MATCHPASS"     : "The 2 passwords must match",
        "ERR_UPDATEPASSWORD_FAILEDPASS"    : "Your old password is incorrect. Please try again.",
        "ERR_UPDATEPASSWORD_NOTSAVEPASS" : "Your password could not be saved. Please try again.",	
  	
        "ERR_CONTACTUS_NAME"     : "Please enter your name.",
        "ERR_CONTACTUS_MAIL"    : "Please enter a valid email.",
        "ERR_CONTACTUS_MESSAGE" : "Please enter your message",
        "ERR_CONTACTUS_MESSAGENOTSENT"     : "The message could not be sent. Please try again",
        
		
		
    });

    // Adding a translation table for the Spanish language
    $translateProvider.translations('es', {
        "ERR_SIGNIN_EMAIL"     : "Por favor introduzca una dirección de correo electrónico válida",
        "ERR_SIGNIN_PASSWORD"    : "Por favor ingrese una contraseña.",
        "ERR_SIGNIN_FAILED" : "Su correo electrónico o la contraseña es incorrecta. Vuelve a intentarlo.",
		
			
		"ERR_REGISTER_FIRSTNAME" : "Por favor, ingrese su nombre",
		"ERR_REGISTER_LASTNAME" : "Por favor ingrese su apellido",
		"ERR_REGISTER_EMAIL" : "Por favor ingrese una dirección de correo electrónico válida",
		"ERR_REGISTER_PASSWORD" : "Por favor ingrese una contraseña",
		"ERR_REGISTER_REPASSWORD" : "Por favor, confirme su contraseña",
		"ERR_REGISTER_DONTMATCH" : "Su contraseña no coincide",
		"ERR_REGISTER_PHONE" : "Por favor, ingrese un número de teléfono",
		"ERR_REGISTER_COUNTRY" : "Por favor ingrese un país",
		"ERR_REGISTER_STATE" : "Por favor, ingresa un estado",
		"ERR_REGISTER_CITY" : "Por favor ingrese una ciudad",		
		"ERR_REGISTER_ADDRESS" : "Por favor, introduzca una dirección",
		"ERR_REGISTER_ZIPCODE" : "Por favor ingrese un código postal",
	
        "ERR_UPDATEPASSWORD_PASS"     : "Por favor, ingrese su contraseña actual.",
        "ERR_UPDATEPASSWORD_REPASS"    : "Por favor, ingrese su nueva contraseña.",
        "ERR_UPDATEPASSWORD_NEWPASS" : "Por favor, confirme su nueva contraseña.",
        "ERR_UPDATEPASSWORD_MATCHPASS"     : "Sus contraseñas no coinciden",
        "ERR_UPDATEPASSWORD_FAILEDPASS"    : "Su contraseña Actual es incorrecta. Por favor intente otra vez",
        "ERR_UPDATEPASSWORD_NOTSAVEPASS" : "Su contraseña no será guardada. Por favor intente otra vez.",	
  	
	  	
        "ERR_CONTACTUS_NAME"     : "Por favor, ingrese su nombre.",
        "ERR_CONTACTUS_MAIL"    : "Por favor ingrese una dirección de correo electrónico válida",
        "ERR_CONTACTUS_MESSAGE" : "Por favor, ingrese su mensaje.",
        "ERR_CONTACTUS_MESSAGENOTSENT"     : "Su mensaje no será enviado. Por favor intente de nuevo.",
      	

		
    });

    // Adding a translation table for the French language
    $translateProvider.translations('fr', {
        "ERR_SIGNIN_EMAIL"     : "Veuillez saisir un courriel valide.",
        "ERR_SIGNIN_PASSWORD"    : "Veuillez saisir votre mot de passe.",
        "ERR_SIGNIN_FAILED" : "Votre courriel ou votre mot de passe est incorrect. Veuillez réessayer.",
		
			
			
		"ERR_REGISTER_FIRSTNAME" : "Veuillez saisir votre prénom",
		"ERR_REGISTER_LASTNAME" : "Veuillez saisir votre nom de famille",
		"ERR_REGISTER_EMAIL" : "Veuillez saisir un email valide",
		"ERR_REGISTER_PASSWORD" : "Veuillez saisir un mot de passe",
		"ERR_REGISTER_REPASSWORD" : "Veuillez confirmer votre mot de passe",
		"ERR_REGISTER_DONTMATCH" : "Vos mots de passe ne correspondent pas",
		"ERR_REGISTER_PHONE" : "Veuillez saisir un numéro de téléphone",
		"ERR_REGISTER_COUNTRY" : "Veuillez saisir un pays",
		"ERR_REGISTER_STATE" : "Veuillez saisir un état",
		"ERR_REGISTER_CITY" : "Veuillez saisir une ville",		
		"ERR_REGISTER_ADDRESS" : "Veuillez saisir une adresse",
		"ERR_REGISTER_ZIPCODE" : "Veuillez saisir un code postal",
			
	
        "ERR_UPDATEPASSWORD_PASS"     : "Veuillez saisir votre mot de passe actuel",
        "ERR_UPDATEPASSWORD_REPASS"    : "Veuillez saisir votre nouveau mot de passe.",
        "ERR_UPDATEPASSWORD_NEWPASS" : "Veuillez confirmer votre mot de passe",
        "ERR_UPDATEPASSWORD_MATCHPASS"     : "Vos mots de passe ne correspondent pas",
        "ERR_UPDATEPASSWORD_FAILEDPASS"    : "Votre ancien mot de passe est incorrect. Veuillez réessayer.",
        "ERR_UPDATEPASSWORD_NOTSAVEPASS" : "Votre mot de passe n'a pas pu être enregistré. Veuillez réessayer.",
  	
	  	
        "ERR_CONTACTUS_NAME"     : "Veuillez saisir votre nom complet.",
        "ERR_CONTACTUS_MAIL"    : "Veuillez saisir un email valide.",
        "ERR_CONTACTUS_MESSAGE" : "Veuillez saisir votre message",
        "ERR_CONTACTUS_MESSAGENOTSENT"     : "Le message n'a pas pu être envoyé. Veuillez réessayer",
      	
		
		
    });

    // Tell the module what language to use by default
    $translateProvider.preferredLanguage('en');

    //-- END : TRANSLATION CONFIG


});