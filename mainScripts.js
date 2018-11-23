function getToday(){
  var today = new Date();
  var year = today.getFullYear();
  var month = today.getMonth()+1;
  var day = today.getDate();
  var dateString = year + "/" + month + "/" + day;
  return dateString;
}

function setTimeOfDayStyle(){
  var currTime = new Date();
  if(currTime.getHours() >= 4 && currTime.getHours() < 8){
    document.getElementById("pBody").style.backgroundImage = "url('images/sunrise.jpg')"
    document.getElementsByClassName("infoBox")[0].style.color = "white";
  }
  else if(currTime.getHours() >= 18 || currTime.getHours() < 4){

    document.getElementById("pBody").style.backgroundImage = "url('images/nightsky.jpeg')"
    document.getElementById("infoBox0").style.color = "#d3edf8";
    document.getElementById("infoBoxTitle0").style.color = "#d3edf8";
  }
}
