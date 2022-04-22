<html>
  <head>
     <script src="../js/js.js"></script>
  </head>
  <body>
    <form action="welcome.php" onsubmit=" return jscheck()" method="post" >
      Name: <input type="text" id="name" name="name">
      Password: <input type="text" id="password" name="password">
      Email: <input type="text" id="email" name="email">
      <p id="errorblank"></p>
      <p id="errorname"></p>
      <p id="errorpassword"></p>
      <p id="erroremail"></p>
      <p id="msg"></p>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>     