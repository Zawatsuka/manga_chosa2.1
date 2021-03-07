// bouton visible mp 
// function mp() {
//     var x = document.getElementById("pass");
    
//     if (x.type === "password") {
//       x.type = "text";
//     } else {
//       x.type = "password";
//     } 
//   }
//   function rmp(){
//     var y = document.getElementById("rePass")
//     if (y.type === "password") {
//         y.type = "text";
//       } else {
//         y.type = "password";
//       }
//   }



// Declaration des variables
var numberOfCharacter=document.getElementById('numberOfCharacter');
var upperCase=document.getElementById('upperCase');
var tinyCase=document.getElementById('tinyCase');
var number=document.getElementById('number');
var specialCharacter=document.getElementById('specialCharacter');
var passwordInput= document.getElementById('pass');
var listSizeMP = document.querySelectorAll('.sizeMP');


passwordInput.addEventListener('keyup',(e)=>{
  e.preventDefault()
  var lowerCaseLetters = /[a-z]/g;
  if(passwordInput.value.match(lowerCaseLetters)) {  
    tinyCase.classList.remove("invalid");
    tinyCase.classList.add("valid");
  } else {
    tinyCase.classList.remove("valid");
    tinyCase.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(passwordInput.value.match(upperCaseLetters)) {  
    upperCase.classList.remove("invalid");
    upperCase.classList.add("valid");
  } else {
    upperCase.classList.remove("valid");
    upperCase.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(passwordInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  
  var specialCharacters = /[#?!@$ %^&*-]/g;
  if(passwordInput.value.match(specialCharacters)) {  
    specialCharacter.classList.remove("invalid");
    specialCharacter.classList.add("valid");
  } else {
    specialCharacter.classList.remove("valid");
    specialCharacter.classList.add("invalid");
  }

  
  // Validate length
  if(passwordInput.value.length >= 8) {
    numberOfCharacter.classList.remove("invalid");
    numberOfCharacter.classList.add("valid");
  } else {
    numberOfCharacter.classList.remove("valid");
    numberOfCharacter.classList.add("invalid");
  }
})