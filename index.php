<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zooparc</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/main.css">
</head>
<body>
  <?php
  include'./components/nav.php';
  ?>
  <!-- top -->
  <div class="container-fluid">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/beautiful-zebra-wild.jpg" class="d-block w-100" alt="closeup" width="100%">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/panda - Copy.jpg" class="d-block w-100" alt="panda" width="85%">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/3.jpg" class="d-block w-100" alt="frog" width="75%">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  <!-- text -->
  <div class="container-fluid my-2">
  <div class="p-2 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis  fw-bold p-6">Welcome to ZooParc</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
    Welcome to Zooparc, your ultimate destination for experiencing the wonders of wildlife! Nestled in the heart of nature, Zooparc is more than just a zoo—it's a sanctuary where animals from around the world thrive in environments designed to mirror their natural habitats.
     Whether you're a nature enthusiast, an animal lover, or just looking for a fun and educational day out, Zooparc offers an unforgettable adventure for visitors of all ages.
      Explore our diverse exhibits, participate in interactive experiences, and join us in our mission to protect and celebrate the beauty of wildlife.
     We can't wait to share the magic of Zooparc with you!
    </p>
    <hr class="border border-black border-2 opacity-50">
   
  </div>
  </div>

  <div class="container-fluid m-2">
    <h2>Our Vision</h2>
    <div class="container-fluid m-2">
      <p>To create a thriving, inclusive, and educational environment where people and wildlife connect, fostering a deep appreciation for biodiversity and a commitment to preserving our planet’s natural heritage.</p>
    </div>

  </div>

  <div class="container-fluid m-2">
    <h2>Our Mission</h2>
    <div class="container-fluid m-2">
      <p>Our goal is to encourage conservation via community involvement, education, and immersive animal experiences. Our goals are to foster a community that cherishes and preserves nature, provide a safe haven for a variety of species, and promote sustainable behaviors."</p>
    </div>

  </div>


  <!-- images -->
  <div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="./images/-eagle-.jpg" class="img-thumbnail" alt="...">
    </div>
    <div class="col">
    <img src="./images/cola.jpg" class="img-thumbnail" alt="...">
    </div>
</div>

  <?php
  include'./components/footer.php';
  ?>
      
  <script src="./js/bootstrap.min.js"></script>
</body>
</html>