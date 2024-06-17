<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../frameworks/bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="../stylesheet-new.css" rel="stylesheet">

  <title>Collectibles</title>
  <link rel="icon" type="image/x-icon" href="..\assets\shiny-purse.svg">

  <!-- NOTE: This website was made for educational purposes and is not intended to be used without explicit permission.-->
  <?php
  session_start();

  // Check if the item was successfully deleted
  if (isset($_SESSION['itemDeleted']) && $_SESSION['itemDeleted']) {
    echo '<div class="alert alert-success" role="alert">Item deleted successfully!</div>';

    // Reset the session variable
    unset($_SESSION['itemDeleted']);
  }
  ?>
  <?php
  echo '<script>
document.addEventListener("DOMContentLoaded", function () {
    var deleteButtons = document.querySelectorAll(".delete-button");

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            // Extract itemId from the button\'s data attribute
            var itemId = button.getAttribute("data-itemid");
            console.log("Clicked on item with itemId:", itemId);

            var result = confirm("Are you sure you want to delete this item?");

            if (result) {
                // If the user clicks "OK", redirect to process_delete.php with the item ID
                window.location.href = "process_delete.php?itemId=" + itemId;
            } else {
                // Do nothing if the user clicks "Cancel"
            }
        });
    });
});
</script>';
  ?>
</head>

<body>
  <!-- Navbar -->
  <?php include('..\navbar1.php'); ?>

  <!-- Carousel -->
  <?php $carousel_name = "Collectibles";
  include('carousel.php'); ?>

  <div class="divider reveal"></div>

  <!-- Content -->

  <div class="container">
    <div class="row text-center">
      <?php
      // Function to fetch and display antique details
      function displayAntiqueDetails($itemIds)
      {

        // Array of image urls foreach itemIds
        $imageUrls = [
          6 => ['../assets/MDCV.avif', "https://media.gettyimages.com/id/1221647949/photo/vase-in-meiping-shape-with-phoenix-ming-dynasty-wanli-mark-and-period-late-16th-early-17th.jpg?s=612x612&w=0&k=20&c=vjTVQ6iMErZg0Iagd8J4WmjyAmqgIqGmbp30JBU7FnE=", "https://media.gettyimages.com/id/1365689439/photo/bottle-shaped-vase-with-figures-in-garden-ming-dynasty-chongzhen-period-artist-unknown.jpg?s=612x612&w=0&k=20&c=y_yRsRFy85fIqeABaKWEGGxMz1j_84DwbI1UVXTseBc="],
          7 => ['../assets/VSTS.jpeg', "https://www.hemswell-antiques.com/uploads/media/default/0003/48/thumb_247084_default_zoomed.jpeg"],
          8 => ['../assets/ARC.webp'],
          // add pictures here
        ];

        $subArrayCounts = array_map('count', $imageUrls);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "theantiques_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $columnCount = 0;
        $columnMax = 3;

        foreach ($itemIds as $itemId) {
          $sql = "SELECT name, type, age, date_procured, location, description FROM antique_information_db WHERE itemId = $itemId";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // divide if column is more than max columns permitted
            if ($columnCount == $columnMax) {
              echo '</div>';
              echo '<div class="row text-center">';
              echo '<div class="card col mb-3">';
              $columnCount = 0;
            } else {
              echo '<div class="card col mb-3">';
              $columnCount++;
            }


            // CAROUSEL LOGIC
            $imageUrlsForItemId = isset($imageUrls[$itemId]) ? $imageUrls[$itemId] : [''];
            if (count($imageUrlsForItemId) > 1) {
              echo '<div id="carousel_' . $itemId . '" class="carousel slide" data-bs-ride="carousel">';
              echo '<div class="carousel-inner">';

              foreach ($imageUrlsForItemId as $index => $imageUrl) {
                $activeClass = $index === 0 ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img src="' . $imageUrl . '" class="card-img-top item-image mx-auto d-block" alt="...">';
                echo '</div>';
              }

              echo '</div>';
              echo '<button class="carousel-control-prev" type="button" data-bs-target="#carousel_' . $itemId . '" data-bs-slide="prev">';
              echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Previous</span>';
              echo '</button>';
              echo '<button class="carousel-control-next" type="button" data-bs-target="#carousel_' . $itemId . '" data-bs-slide="next">';
              echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
              echo '<span class="visually-hidden">Next</span>';
              echo '</button>';
              echo '</div>';
            } else {
              echo '<img src="' . $imageUrlsForItemId[0] . '" class="card-img-top item-image mx-auto d-block" alt="...">';
            }
            $subArrayMaxCounter = 0;

            echo '<div class="card-body">';
            echo '<div class="h3 card-title item-title">' . $row["name"] . '</div>';
            echo '<div class="card-text item-type">' . "<b>Type of Item: </b>" . $row["type"] . '</div>';
            echo '<div class="card-text item-age">' . "<b>Age: </b>" . $row["age"] . '</div>';
            echo '<div class="card-text item-date-procured">' . "<b>Date Procured: </b>" . $row["date_procured"] . '</div>';
            echo '<div class="card-text item-location-acquired">' . "<b>Location: </b>" . $row["location"] . '</div>';
            //echo '<div class="card-text item-description mt-4">' . $row["description"] . '</div>';

            echo '<div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header headingOne" id="headingOne_' . $itemId . '">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_' . $itemId . '" aria-expanded="true" aria-controls="collapseOne_' . $itemId . '">
                    Additional Info
                    </button>
                  </h2>
                    <div id="collapseOne_' . $itemId . '" class="accordion-collapse collapse show" aria-labelledby="headingOne_' . $itemId . '" data-bs-parent="#accordionExample">
                      <div class="card-text item-description mt-4">
                      ' . $row["description"] . '
                      </div>
                    </div>
                  </div>
                </div>';
            echo '<div class="mt-3 d-flex justify-content-center">
              <form action="update_antique_info.php" method="post">
              <input type="hidden" name="itemId" value="' . $itemId . '">
              <button type="submit" class="btn btn-primary">Update</button>
              </form> 
              <button class="btn btn-danger ms-2 delete-button" data-itemid="' . $itemId . '">Delete</button>

              </div>';
            echo '</div>';
            echo '</div>';
          } else {
            echo "No records found for itemId $itemId.";
          }
        }
        $conn->close();
      }
      // itemIds to fetch
      $itemIdsToFetch = [6, 7, 8];

      displayAntiqueDetails($itemIdsToFetch);
      ?>

    </div>
  </div>

  <!-- Footer -->
  <?php include('..\footer.html'); ?>

  <!--Bootstrap JS-->
  <script src="..\frameworks\bootstrap\js\bootstrap.bundle.js" crossorigin="anonymous"></script>
  <!--Animation JS-->
  <script src="..\animations.js"></script>
</body>

</html>