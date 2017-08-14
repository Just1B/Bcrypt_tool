<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> BCRYPT </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script src="js/script.js"></script>
  </head>

  <body>
    <header>
       <h1> Quick Bcrypt Tools </h1>
    </header>

    <section id="wrapper">
      
      <h1> Encrypt </h1>
      <input type="text" name="password" placeholder="Plain text" class="input">
      <button class="submit" onclick="encrypt()"> Encrypt</button>

      <p style="display:none" id="showEncrypted"> </p>    

      </br> </br>

      <h1> Compare </h1>
      <input type="text" placeholder="Plain text" name="brut" class="input">
      <input type="text" placeholder="Hash" name="hash" class="input">
      <button class="submit" onclick="compare()" >Compare </button>

      <p style="display:none" id="showDecrypted"> </p>    

    </section>

  </body>
</html>
