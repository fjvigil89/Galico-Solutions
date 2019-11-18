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
		"ERR_SIGNIN_EMAIL_NOT_FOUND" : "Your email address could not be found",
		"ERR_SIGNIN_RESET" : "Your password could not be reset. Please try again",
		
		
		"ERR_REGISTER_FIRSTNAME" : "Please provide a first name",
		"ERR_REGISTER_LASTNAME" : "Please provide a last name",
		"ERR_REGISTER_EMAIL" : "Please provide a valid email",
		"ERR_REGISTER_PASSWORD" : "Please enter a password",
		"ERR_REGISTER_REPASSWORD" : "Please confirm the password",
		"ERR_REGISTER_DONTMATCH" : "Your passwords don't match",
		"ERR_REGISTER_PHONE" : "Please enter a phone number",
		"ERR_REGISTER_COUNTRY" : "Please enter a country",
		"ERR_REGISTER_STATE" : "Please enter a state",
		"ERR_REGISTER_CITY" : "Please enter a city",	
		"ERR_REGISTER_ADDRESS" : "Please enter an address",
		"ERR_REGISTER_ZIPCODE" : "Please enter a zipCode",
	
        "ERR_UPDATEPASSWORD_PASS"     : "Please enter your current password",
        "ERR_UPDATEPASSWORD_REPASS"    : "Please enter your new password.",
        "ERR_UPDATEPASSWORD_NEWPASS" : "Please confirm your new password",
        "ERR_UPDATEPASSWORD_MATCHPASS"     : "The 2 passwords must match",
        "ERR_UPDATEPASSWORD_FAILEDPASS"    : "Your old password is incorrect. Please try again.",
        "ERR_UPDATEPASSWORD_NOTSAVEPASS" : "Your password could not be saved. Please try again.",	
  	
        "ERR_CONTACTUS_NAME"     : "Please enter your name.",
        "ERR_CONTACTUS_MAIL"    : "Please enter a valid email.",
        "ERR_CONTACTUS_MESSAGE" : "Please enter your message",
        "ERR_CONTACTUS_MESSAGENOTSENT"     : "The message could not be sent. Please try again",
        
        "ERR_DASHBOARD_LASTNAME"     : "Please provide a last name.",
        "ERR_DASHBOARD_FIRSTNAME"    : "Please provide a first name.",
        "ERR_DASHBOARD_ADDRESSVALIDE" : "Please provide a valid email address.",
        "ERR_DASHBOARD_NUMBER"     : "Please provide a phone number.",
        "ERR_DASHBOARD_COUNTRY"     : "Please provide a country.",
        "ERR_DASHBOARD_CITY"    : "Please provide a city.",
        "ERR_DASHBOARD_ADDRESS" : "Please provide an address.",
        "ERR_DASHBOARD_INF_UPDATE"     : "Your information could not be updated. Please try again.",
        "ERR_DASHBOARD_PLAN"     : "Please choose a plan.",
        "ERR_DASHBOARD_CONTACTFIRSTNAME"     : "Please enter your contact first name.",
        "ERR_DASHBOARD_CONTACTLASTNAME"    : "Please enter your contact last name.",
        "ERR_DASHBOARD_PHONENUMBER" : "Please enter at least one phone number.",
        "ERR_DASHBOARD_CHOOSECOUNTRY"     : "Please choose a country.",
        "ERR_DASHBOARD_ENTERCITY"     : "Please enter a city.",
        "ERR_DASHBOARD_ADDRESSHOUSE"    : "Please enter the address of the house.",
        "ERR_DASHBOARD_NOTADDHOUSE" : "The new house could not be added. Please try again.",


        "ERR_DASHBOARD_NAMEONCARD"     : "Please provide a valid name.",
        "ERR_DASHBOARD_CARDTYPE"    : "Please provide your card type.",
        "ERR_DASHBOARD_CARDNUMBER" : "Please provide your card number.",
        "ERR_DASHBOARD_CVV"     : "Please provide your CVV number",
        "ERR_DASHBOARD_EXPMONTH"    : "The expiration date is invalid.",
        "ERR_DASHBOARD_EXPYEAR"    : "The expiration date is invalid.",

        "ERR_HOUSE_INVALID" : "Please select a house.",
        "ERR_SERVICE_INVALID" : "Please select a service type.",
        "ERR_REQUEST_DETAILS_INVALID" : "Please provide a short details of the request.",
        "SUCCESS_DASHBOARD_INF_UPDATE":"You have successfully updated your profile.",

        "ERR_SETTING_PRICE" : "Please provide a price",
        "ERR_SETTING_TAX" : "Please provide a tax percentage"




    });

    // Adding a translation table for the Spanish language
    $translateProvider.translations('es', {
        "ERR_SIGNIN_EMAIL"     : "Por favor introduzca una dirección de correo electrónico válida",
        "ERR_SIGNIN_PASSWORD"    : "Por favor ingrese una contraseña.",
        "ERR_SIGNIN_FAILED" : "Su correo electrónico o la contraseña es incorrecta. Vuelve a intentarlo.",
		"ERR_SIGNIN_EMAIL_NOT_FOUND" : "No se ha podido encontrar su dirección de correo electrónico",
		"ERR_SIGNIN_RESET" : "Su contraseña no pudo ser reestablecida. Por favor, inténtelo de nuevo",		
		
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
      	
        "ERR_DASHBOARD_LASTNAME"     : "Por favor ingrese su apellido.",
        "ERR_DASHBOARD_FIRSTNAME"    : "Por favor, ingrese su nombre.",
        "ERR_DASHBOARD_ADDRESSVALIDE" : "Por favor ingrese una dirección de correo electrónico válida.",
        "ERR_DASHBOARD_NUMBER"     : "Por favor, ingrese un número de teléfono.",
        "ERR_DASHBOARD_COUNTRY"     : "Please provide your country.",
        "ERR_DASHBOARD_CITY"    : "Por favor ingrese un país.",
        "ERR_DASHBOARD_ADDRESS" : "Por favor ingrese su dirección.",
        "ERR_DASHBOARD_INF_UPDATE"     : "Su información no será actualizadda. Por favor intente otra vez.",
        "ERR_DASHBOARD_PLAN"     : "Por favor elija un plan.",
        "ERR_DASHBOARD_CONTACTFIRSTNAME"     : "Por favor ingrese el nombre de su contacto",
        "ERR_DASHBOARD_CONTACTLASTNAME"    : "Por favor ingrese el apellido de su contacto.",
        "ERR_DASHBOARD_PHONENUMBER" : "Por favor ingrese al menos un número de teléfono.",
        "ERR_DASHBOARD_CHOOSECOUNTRY"     : "Por favor escoja un país.",
        "ERR_DASHBOARD_ENTERCITY"     : "Por favor ingrese una ciudad.",
        "ERR_DASHBOARD_ADDRESSHOUSE"    : "Por favor ingrese la dirección de la casa.",
        "ERR_DASHBOARD_NOTADDHOUSE" : "La nueva casa no ha sido registrada. Por favor intente otra vez.",

        "ERR_DASHBOARD_NAMEONCARD"     : "Por favor ingrese un nombre valido.",
        "ERR_DASHBOARD_CARDTYPE"    : "Por favor introducir un tipo de tarjeta.",
        "ERR_DASHBOARD_CARDNUMBER" : "Por favor ingrese un número de tarjeta.",
        "ERR_DASHBOARD_CVV"     : "Por favor ingresar un código de seguridad válido.",
        "ERR_DASHBOARD_EXPMONTH"    : "La fecha de expiración no es válido.",
        "ERR_DASHBOARD_EXPYEAR"    : "La fecha de expiración no es válido.",
        "ERR_HOUSE_INVALID" : "Por favor seleccione una casa.",
        "ERR_SERVICE_INVALID" : "Por favor seleccione un servicio.",
        "ERR_REQUEST_DETAILS_INVALID" : "Por favor ingrese un resumen de la solicitud .",
        "SUCCESS_DASHBOARD_INF_UPDATE":" Usted ha actualizado correctamente su perfil.",

        "ERR_SETTING_PRICE" : "Por favor ingrese un precio valido.",
        "ERR_SETTING_TAX" : "Por favor proporcione un porcentaje de impuesto."
    });

    // Adding a translation table for the French language
    $translateProvider.translations('fr', {
        "ERR_SIGNIN_EMAIL"     : "Veuillez saisir un courriel valide.",
        "ERR_SIGNIN_PASSWORD"    : "Veuillez saisir votre mot de passe.",
        "ERR_SIGNIN_FAILED" : "Votre courriel ou votre mot de passe est incorrect. Veuillez réessayer.",
		"ERR_SIGNIN_EMAIL_NOT_FOUND" : "Votre courriel n'existe pas dans notre système ",
		"ERR_SIGNIN_RESET" : "Votre mot de passe n'a pas pu être réinitialisé. Veuillez réessayer",	
			
		"ERR_REGISTER_FIRSTNAME" : "Veuillez saisir un prénom",
		"ERR_REGISTER_LASTNAME" : "Veuillez saisir un nom de famille",
		"ERR_REGISTER_EMAIL" : "Veuillez saisir un email valide",
		"ERR_REGISTER_PASSWORD" : "Veuillez saisir un mot de passe",
		"ERR_REGISTER_REPASSWORD" : "Veuillez confirmer le mot de passe",
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
      	
        "ERR_DASHBOARD_LASTNAME"     : "Veuillez saisir votre nom de famille.",
        "ERR_DASHBOARD_FIRSTNAME"    : "Veuillez saisir votre prénom.",
        "ERR_DASHBOARD_ADDRESSVALIDE" : "Veuillez saisir un email valide.",
        "ERR_DASHBOARD_NUMBER"     : "Veuillez saisir un numéro de téléphone.",
        "ERR_DASHBOARD_COUNTRY"     : "Veuillez saisir un pays.",
        "ERR_DASHBOARD_CITY"    : "Veuillez saisir une ville",
        "ERR_DASHBOARD_ADDRESS" : "Veuillez saisir une adresse.",
        "ERR_DASHBOARD_INF_UPDATE"     : "Vos informations n'ont pas pu être mises à jour. Veuillez réessayer.",
        "ERR_DASHBOARD_PLAN"     : "Choisissez un plan.",
        "ERR_DASHBOARD_CONTACTFIRSTNAME"     : "Veuillez saisir votre prénom de contact.",
        "ERR_DASHBOARD_CONTACTLASTNAME"    : "Veuillez saisir votre nom de contact.",
        "ERR_DASHBOARD_PHONENUMBER" : "Veuillez saisir au moins un numéro de téléphone.",
        "ERR_DASHBOARD_CHOOSECOUNTRY"     : "Choisissez un pays.",
        "ERR_DASHBOARD_ENTERCITY"     : "Veuillez saisir une ville.",
        "ERR_DASHBOARD_ADDRESSHOUSE"    : "Veuillez saisir l'adresse de la maison.",
        "ERR_DASHBOARD_NOTADDHOUSE" : "La nouvelle maison ne pouvait pas être ajoutée. Veuillez réessayer.",

        "ERR_DASHBOARD_NAMEONCARD"     : "Vous devez saisir un nom.",
        "ERR_DASHBOARD_CARDTYPE"    : "Vous devez saisir un type de carte.",
        "ERR_DASHBOARD_CARDNUMBER" : "Vous devez saisir un numéro de carte.",
        "ERR_DASHBOARD_CVV"     : "Vous devez saisir un code de sécurité valide.",
        "ERR_DASHBOARD_EXPMONTH"    : "La date d'expiration n'est pas valide.",
        "ERR_DASHBOARD_EXPYEAR"    : "La date d'expiration n'est pas valide.",
        "ERR_HOUSE_INVALID" : "Veuillez sélectioner une maison.",
        "ERR_SERVICE_INVALID" : "Veuillez sélectioner un service.",
        "ERR_REQUEST_DETAILS_INVALID" : "Veuillez fournir une brève description de la requête.",
        "SUCCESS_DASHBOARD_INF_UPDATE":"Vous avez réussi à mettre à jour votre profil.",

        "ERR_SETTING_PRICE" : "Veuillez saisir un prix.",
        "ERR_SETTING_TAX" : "Veuillez indiquer un pourcentage d'impôt."
    });

    // Tell the module what language to use by default
    $translateProvider.preferredLanguage('en');

    //-- END : TRANSLATION CONFIG


})



;