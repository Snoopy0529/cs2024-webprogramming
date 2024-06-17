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

    <!-- Content -->
    
    <div class="divider reveal"></div>

    <div class="container-fluid text-justify content">

      <div class="divider reveal align-items-center"></div>

      <div class="row align-items-center main-page-cards-background reveal"> <!-- First Row -->
        <div class="col ms-5">
          <div class="card">
            <div class="card-body main-page-content-body">
              <h2>EXPERIENCE HISTORY</h2>
              <div style="color: #581845"> Welcome to The Antiques, where history comes to life through a curated collection of rare and captivating artifacts. Each piece and décor have their own adventures and stories. Some have been crafted with great purpose, while others are keepsakes and a reminder of the love and dedication upheld by their craftsmen. 
              <br><br>
              Their journeys serve not only as a window to the past, but as great wisdom and a source of empowerment for us at the present days. Our home hopes to welcome and immerse you into their worlds—to experience the lost years and relive the days of the bygone past. 
              <br><br>
              The artifacts and objects can be viewed at our physical location, but if you’d like to know more, then our website aims to inform you about some of the various pieces and the brief history of our own organization. </div>
            </div>
          </div>
        </div>
        <div class="col ms-5">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active position-relative">
                <img src="https://cdn.imgchest.com/files/pyq9cgeaw64.jpg" class="d-block w-100 content-image-blurred" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Chippendale Chair</h5>
                  <p>This Chippendale chair is a classic example of 18th-century English furniture.</p>
                  <a href="items/antique_furnitures.php" class="stretched-link"></a>
                </div>
              </div>
              <div class="carousel-item position-relative">
                <img src="https://cdn.imgchest.com/files/myd5cjr38r4.jpg" class="d-block w-100 content-image-blurred" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Louis XV Commode</h5>
                  <p>This Louis XV commode exudes elegance with its ornate ormolu mounts and beautifully curved legs.</p>
                  <a href="items/antique_furnitures.php" class="stretched-link"></a>
                </div>
              </div>
              <div class="carousel-item position-relative">
                <img src="https://cdn.imgchest.com/files/3yrgcgz5p94.jpg" class="d-block w-100 content-image-blurred" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Mid-Century Modern Ceramic Vase</h5>
                  <p>This Mid-Century Modern ceramic vase showcases the clean lines and organic forms typical of the 1950s design.</p>
                  <a href="items/vintage_decor.php" class="stretched-link"></a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <div class="divider reveal align-items-center"></div>

      <div class="row align-items-center main-page-cards-background reveal"> <!-- Second Row -->
        <div class="col ms-5">
          <img src="assets\page_images\main-img1.jpg" class="content-image" alt="Missing Image">
        </div>
        <div class="col me-5">
          <div class="card">
            <div class="card-body main-page-content-body">
              <h2>LEARN THEIR STORIES</h2>
              <div style="color: #581845"> Other than our front page, you may also peruse through our Antique Furniture, Vintage Decors, Collectibles and Curiosities pages to find some of the artifacts we’ve collected throughout our history. 
              <br><br>
              Our Antique Furniture and Vintage Decors pages specifically have items such as chairs or various architecture. The Collectibles and Curiosities pages are, however, smaller objects with valuable history or peculiarities that we still don’t know! 
              <br><br>
              They each have a photo and brief description regarding their physical details and background. You can also visit our Developer page, where you can see the various people who helped make this project come true.</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="divider reveal align-items-center"></div>

      <div class="row align-items-center main-page-cards-background reveal"> <!-- Third Row -->
        <div class="col ms-5">
          <div class="card">
              <div class="card-body main-page-content-body">
                <h2>GAZE AND WONDER</h2>
                <div style="color: #581845"> We have three main goals with our project: to make our history known to the people, to allow people the opportunity to appreciate history, and to fund our escapades and allow us to gather more artifacts. 
                <br><br>
                By creating this website for people around the world to see, we hope to reach more people in our journey and hopefully get our own opportunities to share our passion with the world. After all, websites are more accessible compared to traditional means of sharing information such as newspapers or by word. 
                <br><br>
                A website also allows us to consolidate the various data we’ve collected and organize them with ease. Finally, most things on the internet often last forever, and through this website, we can find a little space, just for us, tucked away in the confines of the wide web, to be refurnished for the future, and for our own history, as well!
              </div>  
            </div>
          </div>
        </div>
        <div class="col ms-5">
          <img src="assets\page_images\main-img2.jpg" class="content-image" alt="Missing Image">
        </div>
      </div>
    </div>

    <div class="divider reveal"></div>
    
    <!-- Footer -->
    <?php include ('footer.html'); ?>

  <!--Bootstrap JS-->
  <script src="frameworks\bootstrap\js\bootstrap.bundle.js" crossorigin="anonymous"></script>
  <!--Animation JS-->
  <script src="animations.js"></script>
  </body>
</html>