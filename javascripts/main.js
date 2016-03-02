function setFocusToTextBox(id){
  console.log(id);
    document.getElementById(id).focus();
}

function popUpExplication(fieldName){
  if(fieldName == 'Password'){
    var r = confirm("hide password");
    if (r == true) {
        document.getElementById('passwordField').type='password';
    } else {
        document.getElementById('passwordField').type='text';
    }
  }else{
    alert(fieldName);
  }

}

/*
- Choisir au moins une lettre minuscule
- Saisir au moins une lettre majuscule
- Saisir au moins un chiffre
- Longueur de mot de passe entre 8 et 12 caractères
*/

function isCorrect(password){
  var regMinus = /[a-z]/;
  var matchMinus = password.match(regMinus);
  var regMajus = /[A-Z]/;
  var matchMajus = password.match(regMajus);
  var regNum = /[0-9]/;
  var matchNum = password.match(regNum);

  if(password.length < 8 || password.length > 12){
    return false;
  }else if (matchMinus < 1) {
    return false;
  }else if (matchMajus < 1) {
    return false;
  }else if (matchNum < 1) {
    return false;
  }else {
    return true;  //  :)
  }
}

function generatePassword() {
    var length = 9,
        charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}

function getCorrectPassword(){
  var i = 0
  do {
    i++;
    if(i == 100) return;
    var password = generatePassword();
  } while (!isCorrect(password));
  return password;
}

console.log(getCorrectPassword());
