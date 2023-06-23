


let currentPart = 1;
const formParts = document.getElementsByClassName('form-part');

function nextPart(current, next) {
  document.getElementById(current).style.display = 'none';
  document.getElementById(next).style.display = 'block';
  currentPart++;
}

function prevPart(current, prev) {
    document.getElementById(current).style.display = 'none';
    document.getElementById(prev).style.display = 'block';
    currentPart--;
  }

function submitForm() {
  // Logique pour valider l'ensemble du formulaire
  // Peut inclure la récupération des valeurs des champs et leur traitement ultérieur

  // Redirection ou autre action à effectuer après validation
  // window.location.href = 'page-success.html';
  console.log('Formulaire validé !');
}


    function showForm(checked) {
        var actionnaireForm = document.getElementById('actionnaireForm');
        if (checked) {
          actionnaireForm.style.display = 'block';
        } else {
          actionnaireForm.style.display = 'none';
        }
      }


function ajouterActionnaire() {
  var container = document.getElementById('actionnairesContainer');

  var div = document.createElement('div');
  div.classList.add('form-group');

  var nomLabel = document.createElement('label');
  nomLabel.textContent = 'Actionnaire:';

  var nomInput = document.createElement('input');
  nomInput.classList.add('form-control');
  nomInput.setAttribute('type', 'text');
  nomInput.setAttribute('name', 'nomActionnaire[]');

  var nationaliteLabel = document.createElement('label');
  nationaliteLabel.textContent = 'Nationalité:';

  var nationaliteInput = document.createElement('input');
  nationaliteInput.classList.add('form-control');
  nationaliteInput.setAttribute('type', 'text');
  nationaliteInput.setAttribute('name', 'nationaliteActionnaire[]');

  var partLabel = document.createElement('label');
  partLabel.textContent = 'Pourcentage de parts (%):';

  var partInput = document.createElement('input');
  partInput.classList.add('form-control');
  partInput.setAttribute('type', 'number');
  partInput.setAttribute('name', 'pourcentagePartsActionnaire[]');

  div.appendChild(nomLabel);
  div.appendChild(nomInput);
  div.appendChild(nationaliteLabel);
  div.appendChild(nationaliteInput);
  div.appendChild(partLabel);
  div.appendChild(partInput);

  container.appendChild(div);
}

$('.scrolling-text').animate({ scrollTop: $('.scrolling-text').prop("scrollHeight") }, 3500);





function nextSection() {
  var currentSection = document.querySelector(".form-section:visible");
  var nextSection = currentSection.nextElementSibling;
  currentSection.style.display = "none";
  nextSection.style.display = "block";
}
function toggleFileInput(checkbox, documentId) {
    var fileInputContainer = document.getElementById('fileInputContainer_' + documentId);
    fileInputContainer.style.display = checkbox.checked ? 'block' : 'none';
}
