// JavaScript pour détecter si le site est ouvert sur mobile
if (/Mobi|Android/i.test(navigator.userAgent)) {
    // Afficher la fenêtre contextuelle (popup)
    var popup = document.getElementById("popup");
    var closePopupButton = document.getElementById("closePopup");

    popup.style.display = "flex";

    // Fermer la fenêtre contextuelle en cliquant sur le bouton "Fermer"
    closePopupButton.addEventListener("click", function() {
        popup.style.display = "none";
    });
}
