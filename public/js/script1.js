// Fonction de détection de la largeur de l'écran
function isMobile() {
    return window.innerWidth <= 768; // Vous pouvez ajuster la largeur limite selon vos besoins
}

// Vérifier si l'utilisateur est sur un appareil mobile
if (isMobile()) {
    // Afficher le message de redirection
    var popup = document.getElementById("popup");
    var closePopupButton = document.getElementById("closePopup");

    popup.style.display = "flex";
    const mobileWarning = document.getElementById('mobileWarning');
    mobileWarning.classList.remove('hidden');



    // Rediriger après un délai (par exemple, 5 secondes)
    setTimeout(() => {
        window.location.href = '/'; // Remplacez 'redirection.html' par l'URL de la page de redirection
    }, 10000); // 5000 millisecondes (5 secondes)
}
