const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});




function verif() {
  let a = document.getElementById("name");
  let val = a.value;
  if (val.length < 3) {
    a.style.border = "2px solid red";
    a.style.color = "red";
  } else {
    a.style.border = "2px solid green";
    a.style.color = "green";
  }
}



function verif2() {
  let a = document.getElementById("email");
  let val = a.value;
  if (val.indexOf("@") < 0) {
    a.style.border = "2px solid red";
    a.style.color = "red";
  } else {
    a.style.border = "2px solid green";
    a.style.color = "green";
  }
}



function verif3() {
  let passwordInput = document.getElementById("password");
  let password = passwordInput.value;

  // Vérification des critères du mot de passe
  let hasUpperCase = /[A-Z]/.test(password);
  let hasLowerCase = /[a-z]/.test(password);
  let hasNumbers = /\d/.test(password);
  let hasSpecialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
  let isLongEnough = password.length >= 8; // Exemple: longueur minimale de 8 caractères

  let passwordError = document.getElementById("passwordError");

  if (
    !isLongEnough ||
    !hasUpperCase ||
    !hasLowerCase ||
    !hasNumbers ||
    !hasSpecialChars
  ) {
    // Si le mot de passe ne respecte pas les critères
    passwordInput.style.border = "2px solid red";
    passwordInput.style.color = "red";
    passwordError.style.display = "block"; // Afficher le message d'erreur
  } else {
    // Si le mot de passe respecte les critères
    passwordInput.style.border = "2px solid green";
    passwordInput.style.color = "green";
    passwordError.style.display = "none"; // Cacher le message d'erreur
  }
}
