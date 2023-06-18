<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../root.css" />
  <link rel="stylesheet" href="./nav-section.css">
  <link rel="stylesheet" href="./reviews.css" />
  <link rel="stylesheet" href="../footer.css" />
  <title>Reviews</title>
</head>

<body>
  <?php include "./nav-section.php"; ?>

  <article class="reviews-container-wrapper">
    <section class="reviews-container">
      <div class="reviews-title">
        <h2>Our Reviews</h2>
      </div>
      <article class="reviews-box">
        <div class="reviews-img-container">
          <img src="" alt="" id="reviews-person-img">
        </div>
        <h4 id="reviews-author"></h4>
        <p id="reviews-job"></p>
        <p id="reviews-info">
        </p>
        <div class="reviews-button-container">
          <button class="reviews-prev-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="reviews-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </article>
    </section>
  </article>


  <?php include "../footer.php"; ?>

  <!--Javascript file attachment-->
  <script src="./reviews.js"></script>
</body>

</html>