<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="frameworks/bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="stylesheet-new.css" rel="stylesheet">

    <title>The Antiques</title>
    <link rel="icon" type="image/x-icon" href="assets\shiny-purse.svg">
    
    <!-- NOTE: This website was made for educational purposes and is not intended to be used without explicit permission.-->
  </head>
  <body>
    <div class="center red-background footer">
      <h2>Sign Up</h2>
        <form action="Sign-Up-Process.php" method="post">
          <label for="uname">Username:</label>
          <input type="text" id="uname" name="uname" required><br>

          <label for="pass">Password:</label>
          <input type="password" id="pass" name="pass" required><br>

          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" required><br>

          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" required><br>

          <label for="birthday">Birthday:</label>
          <input type="date" id="birthday" name="birthday" required><br>

          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required><br>

          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea><br>

          <label for="contactNumber">Contact Number:</label>
          <input type="tel" id="contactNumber" name="contactNumber" required><br>

          <input type="submit" value="Sign Up">
        </form>
      <a href="index.php"><button>Cancel</button></a>
    </div>
  </body>
</html>