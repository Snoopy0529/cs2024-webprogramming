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
    <!-- Navbar -->
    <?php 
    session_start();
    include ('navbar1.php'); 
    ?>

    <!--Content-->
    
    <div class="container reveal">
      <div class="row">
        <div class="card col mb-3 text-center">
          <img src="https://cdn.discordapp.com/attachments/180281717372878848/1196826174173753374/download20240102193849.png?ex=65b90a3b&is=65a6953b&hm=ab0d920126379973282d6a4bf0da8644535fccc285739e376240e9aee7455b99&" class="card-img-top content-image item-image mx-auto d-block" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title">Seifer "Imogen" Pablo</h5>
            <p class="card-text">@Mojilicious -> Github</p>
            <p class="card-text">Fighting code in the dead of night. BPSU 3rd-Year Student.</p>
            <p class="card-text">Weekly improvising through fun tabletop experiences, wacky hijinks with a crazed mind, just general girlbossing and regret the following morning. My days are filled with the complete mundane and absolute cracked experiences of life.</p>
            <p class="card-text">All the Pokemon in the Pokedex can beat up a billion lions. Bite me.</p>
          </div>
        </div>
        <div class="card col mb-3 text-center">
          <img src="https://i.pinimg.com/originals/85/be/94/85be94350b6cefd78140c8c8232c75e5.gif" class="card-img-top content-image item-image mx-auto d-block" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hyndrix Rezada</h5>
            <p class="card-text">@Snoopy0529 -> Github</p>
            <p class="card-text">CODE EAT PLAY REPEAT. BPSU 3rd-Year Student.</p>
            <p class="card-text">21-years old Bachelor of Science in Computer Science major in Network and Data Communications student. </p>
            <p class="card-text">Just a guy who loves food, online games, and to stay indoors.</p>
          </div>
        </div>
      </div>
    </div>  

    <!-- Footer -->
    <?php include ('footer.html'); ?>
    
  <!--Bootstrap JS-->
  <script src="frameworks\bootstrap\js\bootstrap.bundle.js" crossorigin="anonymous"></script>
  <!--Animation JS-->
  <script src="animations.js"></script>
  </body>
</html>