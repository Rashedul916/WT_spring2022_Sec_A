function jscheck() {

  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var email = document.getElementById("email").value;

  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  
  if (name == "" || password == "" || email == "") {
    document.getElementById("errorblank").innerHTML="Filled all the input";
        document.getElementById("msg").innerHTML="Unsuccessfull ";
    return false;

  }
  else if (name.length < 3) {
    document.getElementById("errorname").innerHTML="name < 3";
        document.getElementById("msg").innerHTML="Unsuccessfull ";
    return false;

  } 
  else if (password.length < 6) {
    document.getElementById("errorpassword").innerHTML="password < 6";
        document.getElementById("msg").innerHTML="Unsuccessfull ";
    return false;

  }
  else if(!res)
  {
    document.getElementById("erroremail").innerHTML="incorrect formate";
        document.getElementById("msg").innerHTML="Unsuccessfull ";

    return false;
  }
  else{
    document.getElementById("msg").innerHTML="Successfull ";
    // header("location:../view/welcome.php");
    return true;
  }           
}