//HTML has the pattern attribute which can also check for RegExp
function validate(theForm){
  // you can pass through the form object as an argument too
  var myForm = document.getElementById(form1);	//can get form object by id
  var formReg = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i
  var message = "";
  //forms is the array of forms on a page
  if(!formReg.test(theForm.postal.value)){
    //alert("Postal Code incorrect");
    message += "Invalid Postal Code format: Should be X9X 9X9<br>";
    console.log(message);
    theForm.postal.focus();
    theForm.postal.style.backgroundColor = "pink";
    document.getElementById("warning").innerHTML = message;
  }
  if(message)
  {
    return false;
  }

  return confirm("Do you want to submit your form?");
}
//if a text box was recolored reset color
function resetColor(){
  if(confirm('Are you sure you want to reset form?')){
    var formList = document.getElementsByTagName("input");
    for (var i = 0; i < formList.length; i++) {
      formList[i].style.backgroundColor = "white";
      console.log((formList[i]));
    }
  }
  else{
    return false;
  }
}

function getConfirmation(){
  return confirm("Do you want to submit your form?");
}

function tipsUpdate(tips, section){
  switch (section.id) {
    case 'fname':
      tips.innerHTML = "Enter your first name"
      tips.style.top = "0%"
      break;
    case 'lname':
        tips.style.top = "7%"
        tips.innerHTML = "Enter your last name"
        break;
    case 'phone':
        tips.style.top = "14%"
        tips.innerHTML = "Enter your Home phone number<br>###-###-####"
        break;
    case 'bphone':
      tips.style.top = "21%"
      tips.innerHTML = "Enter your Buisness number<br>###-###-####"
      break;
      case 'address':
        tips.innerHTML = "Enter your home address"
        tips.style.top = "28%"
        break;
      case 'city':
          tips.style.top = "35%"
          tips.innerHTML = "Enter your city name"
          break;
      case 'postal':
        tips.style.top = "49%"
        tips.innerHTML = "Enter your postal code"
        break;
        case 'email':
            tips.style.top = "56%"
            tips.innerHTML = "Enter your email address"
            break;
        case 'user':
            tips.style.top = "63%"
            tips.innerHTML = "Enter a user name"
            break;
        case 'pass':
          tips.style.top = "70%"
          tips.innerHTML = "Enter a password"
          break;
    default:

  }


  tips.style.visibility = 'visible';
}
