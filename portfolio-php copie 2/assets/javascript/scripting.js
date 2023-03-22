function openJs(){
    document.getElementById("contacts").style.display="block"


}
function closeJs(){
    document.getElementById("contacts").style.display="none"


}


var texte = "MICKAEL                                                            ENFREIN";
var intervalID = setInterval(Animation ,100);
var position = 0;

function Animation(){
    position++
    document.getElementsByTagName("h1")[0].innerHTML =texte.substring(position, texte.length) +texte.substring(0 ,position);
    if(position ==texte.length){
        position = 0;
        
        
    }
    
}

// Récupère le bouton de suppression
var deleteButton = document.getElementById("deleteButton");

// Ajoute un écouteur d'événements sur le bouton de suppression
deleteButton.addEventListener("click", function() {
  // Affiche la boîte de dialogue modale de confirmation
  var deleteModal = document.getElementById("deleteModal");
  M.Modal.init(deleteModal).open();
});

// Récupère le bouton de confirmation de suppression dans la boîte de dialogue modale
var confirmDeleteButton = document.querySelector("#deleteModal .modal-footer .waves-red");

// Ajoute un écouteur d'événements sur le bouton de confirmation de suppression
confirmDeleteButton.addEventListener("click", function() {
  // Supprime le projet ici
});

function supprimerProjet(idProjet) {
  if (confirm("Êtes-vous sûr de vouloir supprimer ce projet ?")) {
    // Envoie une requête pour supprimer le projet correspondant à partir de la base de données
    fetch(`/api/projets/${idProjet}`, { method: "DELETE" })
      .then(response => {
        if (response.ok) {
          // Actualise l'affichage pour refléter la suppression du projet
          window.location.reload();
        } else {
          // Affiche un message d'erreur si la suppression a échoué
          alert("La suppression du projet a échoué.");
        }
      })
      .catch(error => {
        // Affiche un message d'erreur en cas d'erreur de réseau
        alert("Une erreur de réseau s'est produite.");
      });
  }
}


















 











