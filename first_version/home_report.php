<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation in HTML | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Fontawesome CDN Link For Icons -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  </head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 10px;
  min-height: 100vh;
  background: #1BB295;
}

form {
  padding: 25px;
  background: #fff;
  max-width: 500px;
  width: 100%;
  border-radius: 7px;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
}

form h2 {
  font-size: 27px;
  text-align: center;
  margin: 0px 0 30px;
}

form .form-group {
  margin-bottom: 15px;
  position: relative;
}

form label {
  display: block;
  font-size: 15px;
  margin-bottom: 7px;
}

form input,
form select {
  height: 45px;
  padding: 10px;
  width: 100%;
  font-size: 15px;
  outline: none;
  background: #fff;
  border-radius: 3px;
  border: 1px solid #bfbfbf;
}

form input:focus,
form select:focus {
  border-color: #9a9a9a;
}

form input.error,
form select.error {
  border-color: #f91919;
  background: #f9f0f1;
}

form small {
  font-size: 14px;
  margin-top: 5px;
  display: block;
  color: #f91919;
}

form .password i {
  position: absolute;
  right: 0px;
  height: 45px;
  top: 28px;
  font-size: 13px;
  line-height: 45px;
  width: 45px;
  cursor: pointer;
  color: #939393;
  text-align: center;
}

.submit-btn {
  margin-top: 30px;
}

.submit-btn input {
  color: white;
  border: none;
  height: auto;
  font-size: 16px;
  padding: 13px 0;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 500;
  text-align: center;
  background: #1BB295;
  transition: 0.2s ease;
}

.submit-btn input:hover {
  background: #179b81;
}
  </style>
  <body>
 <form>
    <h2>Form Validation</h2>
    <div class="form-group fullname">
      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" placeholder="Enter your subject" required>
    </div>
    <div class="form-group email">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter your email address" required>
    </div>
    <div class="form-group date">
      <label for="date">Date</label>
      <input type="date" id="date" name="date" placeholder="Select your date" required>
    </div>
    <div class="form-group message">
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" cols="60" placeholder="Décrivez votre problème..." required></textarea>
    </div>
    <div class="form-group submit-btn">
      <button type="submit" id="submit-btn">Submit</button>
      <input type="submit" value="Submit">
    </div>
  </form>
  <div  id="success-message"  class="alert alert-success" role="alert">
  Votre réclamation sera bientôt traitée. Merci pour votre patience.
</div>

  <script>
  // Sélection des éléments du formulaire
  const form = document.querySelector("form");
  const fullnameInput = document.getElementById("sujet");
  const emailInput = document.getElementById("email");
  const dateInput = document.getElementById("date");
  const messageInput = document.getElementById("message");
  const successMessage = document.getElementById("success-message");

  // Fonction pour afficher les messages d'erreur
  const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".form-group").appendChild(errorElement);
  }

  // Fonction pour gérer la soumission du formulaire
  const handleFormData = (e) => {
    e.preventDefault();

    // Obtention des valeurs des champs
    const sujet = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const date = dateInput.value;
    const message = messageInput.value.trim();

    // Modèle d'expression régulière pour la validation de l'email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Effacement des messages d'erreur précédents
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Validation des champs
    if (sujet === "") {
      showError(fullnameInput, "Enter the subject");
    }
    if (!emailPattern.test(email)) {
      showError(emailInput, "Enter a valid email address");
    }
    if (date === "") {
      showError(dateInput, "Select the date");
    }
    if (message === "") {
      showError(messageInput, "Enter your message");
    }

    // Vérification des erreurs restantes avant la soumission du formulaire
    const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;

    // Affichage du message d'aperçu
    successMessage.style.display = "block";

    // Soumission du formulaire
    form.submit();
  }

  // Gestion de l'événement de soumission du formulaire
  form.addEventListener("submit", handleFormData);
</script>

  </body>
</html>