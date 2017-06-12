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
        "ERR_SIGNIN_FAILED" : "Your email or password is incorrect. Please try again."
    });

    // Adding a translation table for the Spanish language
    $translateProvider.translations('es', {
        "ERR_SIGNIN_EMAIL"     : "Por favor introduzca una dirección de correo electrónico válida",
        "ERR_SIGNIN_PASSWORD"    : "Por favor ingrese una contraseña.",
        "ERR_SIGNIN_FAILED" : "Su correo electrónico o la contraseña es incorrecta. Vuelve a intentarlo."
    });

    // Adding a translation table for the French language
    $translateProvider.translations('fr', {
        "ERR_SIGNIN_EMAIL"     : "Veuillez saisir un courriel valide.",
        "ERR_SIGNIN_PASSWORD"    : "Veuillez saisir votre mot de passe.",
        "ERR_SIGNIN_FAILED" : "Votre courriel ou votre mot de passe est incorrect. Veuillez réessayer."
    });

    // Tell the module what language to use by default
    $translateProvider.preferredLanguage('en');

    //-- END : TRANSLATION CONFIG


});