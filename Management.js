function validateForm(){
  var a = document.forms["myform"]["name"].value;
  var b = document.forms["myform"]["Username"].value;
  var c = document.forms["myform"]["Password"].value;
  var d = document.forms["myform"]["Re-TypePassword"].value;
  var e = document.forms["myform"]["gender"].value;
  var f = document.forms["myform"]["Programming skills"].value;
  var g = document.forms["myform"]["Contact number"].value;
  var h = document.forms["myform"]["Email"].value;
  var i = document.forms["myform"]["College"].value;

  if (a == ""){
    alert("Name must be filled out");
    return false;
  }
  if (b == ""){
    alert("Userame must be filled out");
    return false;
  }
  if (c <8 || c>32){
    alert("Password length is between 8-32 characters");
    return false;

  }
  if (d == ""){
    alert("Re-TypePassword must be filled out");
    return false;
  }
  if (g == ""){
    alert("contact must be filled out");
    return false;
  }
  if (h == ""){
    alert("email must be filled out");
    return false;
  }
}