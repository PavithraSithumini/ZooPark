<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Outlet</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
</head>

<body class="bg-dark">
  <?php
  include './components/nav.php';
  ?>
  <header>
    <!-- Topic -->
    <h1 class="text-white text-center m-3 p-2">Welcome to Our Food Outlet</h1>

    <!-- Menu -->
    <section id="menu">
      <h2 class="text-white text-start text-center m-3 p-4 ">Menu</h2>

      <!-- Row-1 -->
      <div class="container text-center menu-item p-3">
        <div class="row">
          <div class="col">
            <img src="./images/garden-salad-recipe-2.jpg" alt="Salad" width="20%">
            <h3 class="text-white">Salad</h3>
            <p class="text-white">Fresh mixed greens with a variety of vegetables and dressing</p>
            <span class="text-white">Rs:200</span>
          </div>

          <div class="col">
            <img src="./images/appetizing-healthy-rice-with-vegetables-white-plate-wooden-table_2829-19773.jpg" alt="rice" width="20%">
            <h3 class="text-white">Fried Rice</h3>
            <p class="text-white">Chinese preparation of cooked rice, vegetables, protein, soy sauce, and aromatics</p>
            <span class="text-white">RS:750</span>
          </div>

          <div class="col">
            <img src="./images/top-view-delicious-noodles-concept_23-2148773775.jpg" alt="noodles" width="20%">
            <h3 class="text-white">Noodles</h3>
            <p class="text-white">Served with an accompanying sauce or in a soup</p>
            <span class="text-white">RS:600</span>
          </div>
        </div>
      </div>

      <!-- Row-2 -->
      <div class="container text-center p-3">
        <div class="row">
          <div class="col">
            <img src="./images/ice-cream-cone-cupcakes-1-of-1-3.jpg" alt="ice cream" width="25%">
            <h3 class="text-white">Ice Cream</h3>
            <p class="text-white">Chocolate Ice Cream<br> Vanilla Ice Cream<br> Strawberry Ice Cream</p>
            <span class="text-white">RS:180</span>
          </div>

          <div class="col">
            <img src="./images/hotdog.jpg" alt="hotdogs" width="20%">
            <h3 class="text-white">Hotdogs</h3>
            <p class="text-white">A hunk of meat in a bun</p>
            <span class="text-white">RS:300</span>
          </div>

          <div class="col">
            <img src="./images/frechfrise.jpg" alt="frenchfrise" width="20%">
            <h3 class="text-white">Potato Chips</h3>
            <p class="text-white">Served with ketchup</p>
            <span class="text-white">RS:350</span>
          </div>
        </div>
      </div>

      <!-- Row-3 -->
      <div class="container text-center p-3">
        <div class="row">
          <div class="col">
            <img src="./images/kottu.jpg" alt="kottu" width="20%">
            <h3 class="text-white">Kottu</h3>
            <p class="text-white">Cheese Kottu<br> Chicken Kottu</p>
            <span class="text-white">RS:900</span>
          </div>

          <div class="col">
            <img src="./images/corn.jpg" alt="corn" width="20%">
            <h3 class="text-white">Pop Corn</h3>
            <p class="text-white">Crunchy, Salty, Tasty popcorn</p>
            <span class="text-white">Rs:150</span>
          </div>

          <div class="col">
            <img src="./images/shake.jpg" alt="shake" width="20%">
            <h3 class="text-white">Chocolate Shake</h3>
            <p class="text-white">Served with Ice cream on the top</p>
            <span class="text-white">Rs:200</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Picnic -->
    <section id="picnic">
      <h2 class="text-white text-start  p-4 ">Picnic</h2>
      <div class="card" style="width: 18rem;">
        <img src="./images/shutterstock_1530590261.png" class="card-img-top" alt="">
        <div class="card-body">
          <p class="card-text">A fun outdoor experience with friends, family, and the natural world is about to begin! Come celebrate a laid-back
             "Bring Your Own Picnic" with us! Savor your favorite homemade treats and beverages while spending a relaxing day in the park.</p>
        </div>
      </div>

      <?php
      include './components/footer.php';
      ?>

      <script src="./js/bootstrap.min.js"></script>
    </header>
</body>

</html>