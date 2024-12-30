console.log('Fichier js chargé');

console.log(jQuery.fn.carousel); // Doit afficher une fonction si Bootstrap est chargé

jQuery(document).ready(function($) {
    $('#navbarToggler').on('click', function() {
        $('#navbarNav').toggleClass('show'); // Basculer la classe "show"
    });
});