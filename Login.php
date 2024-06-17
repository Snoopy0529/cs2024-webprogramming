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
      <h2>Login</h2>
          <form  action="Login-validation.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login">
          </form>
        <a href="index.php"><button>Cancel</button></a>
      </div>
  </body>
</html>