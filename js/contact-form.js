// Définition d'une fonction pour afficher un message d'erreur
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Définition d'une fonction pour valider le formulaire 
function validateForm() {
    // Récupération des valeurs des éléments de formulaire 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var message = document.contactForm.message.value;
    
    // Définition de variables d'erreur avec une valeur par défaut
    var nameErr = emailErr = messageErr= true;
    
    // Valider le nom
    if(name == "") {
        printError("nameErr", "Ce champs est obligatoire.");
    } 

    // Champs non vide
    else {
        if(name.length == 0) {
            printError("nameErr", "Veuillez renseigner un nom valide.");
        } 

        else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Valider l'adresse mail
    if(email == "") {
        printError("emailErr", "Ce champs est obligatoire.");
    } 

    else {
        // Valider uniquement des e-mails
        var regex = /^\S+@\S+\.\S+$/;

        if(regex.test(email) === false) {
            printError("emailErr", "Veuillez renseigner une adresse mail valide.");
        } 
        
        else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Valider le message
    if(message == "") {
        printError("messageErr", "Ce champs est obligatoire.");
    } 

    // Champs non vide
    else {
        if(message.length == 0) {
            printError("messageErr", "Veuillez renseigner un message valide.");
        } 

        else {
            printError("messageErr", "");
            messageErr = false;
        }
    }
    
     // Empêcher l'envoi du formulaire en cas d'erreur
    if((nameErr || emailErr || messageErr) == true) {
    return false;
    } 
    
    else {
        // Afficher les données d'entrée dans une boîte de dialogue avant de soumettre le formulaire
        alert(dataPreview);
    }
};