// $(document).ready(function() {
//     // Activer le modal lorsque vous cliquez sur une image de partenaire
//     $('.partner-image').click(function() {
//         var partnerId = $(this).data('partner-id');
//         $('#partner-modal-' + partnerId).modal('show');
//     });


//         var close = document.getElementById("close");
//         close.style.display = "block";


// });



$(document).ready(function() {
    // Afficher le contenu du modal lorsque vous cliquez sur un élément
    $('.element').click(function() {
        var elementId = $(this).data('target');
        $(elementId).modal('show');
    });

    // Fermer le modal lorsque vous cliquez sur le bouton de fermeture
    $('.modal .close').click(function() {
        $(this).closest('.modal').modal('hide');
    });
});
