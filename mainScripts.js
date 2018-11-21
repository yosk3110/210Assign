//Some reusable functions

function getToday(){
  var today = new Date();
  var year = today.getFullYear();
  var month = today.getMonth()+1;
  var day = today.getDate();
  var dateString = year + "/" + month + "/" + day;
  return dateString;
}
