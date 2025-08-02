<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Zooparc About</title>
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
  <link rel="stylesheet" href="./CSS/main.css">
  <link rel="stylesheet" href="./icons/">
</head>

<body>
  <?php
  include './components/nav.php';
  ?>

  <img src="./images/beautiful-giraffe-wild.jpg" class="d-block w-100" alt="frog" width="75%">
  <h6 class="display-4 fw-bold   text-center">About Us</h6>
  <p class="display-8 fw-bold text-success-emphasis m-3 text-center">home to about 2,000 animals of 200 different species- -including its famous giant pandas.
    This nation’szoo covers 70 hectares with habitats for lions, bald eagles, poisonous frogs,
    Asian elephants, wild deer’s, orangutan’s sloth bears, and more.</p>
  <div class="text-center rounded float-start rounded container-fluid">
    <img src="./images/1.jpg" class="m-3 p-5" alt="..." width="33%">

    <img src="./images/2 - Copy.jpg" class="m-2 p-4" alt="..." width="33%">
  </div>


  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title fw-bold m-3 text-center">A Short History Of Our Zooparc</h4>
          <p class="card-text text-center">ZooParc , located in the heart of Sri Lanka, is one of Asia's most renowned zoological parks.
            Established in 1980 by Françoise Delord, it began as a small bird park and gradually expanded to include a wide variety of animals.
            Today, it spans over 70 hectares and is home to around 2,000 animals from 200 different species, including rare and endangered species.
            The zoo is particularly famous for its giant pandas, which were loaned to Beauval by China in 2012, making it one of the few places in the world where these majestic creatures can be seen.
            The park's habitats are meticulously designed to mimic the animals' natural environments, providing spacious enclosures for species ranging from lions and Asian elephants to sloth bears and orangutans.
            Over the years, ZooParc has grown not only in size but also in its commitment to conservation and education,
            playing a vital role in various breeding programs and environmental initiatives.</p>

        </div>
      </div>
    </div>
    <!-- card -->
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="card" style="width: 18rem;">
            <img src="./images/membership.jpg" class="card-img-top" alt="visit">
            <div class="card-body">
              <h5 class="card-title">Membership</h5>
              <p class="card-text">Unlock the Wild! 🦁🌿 Become a member and explore the wonders of the animal kingdom all year round. Exclusive perks, member-only events, and endless adventures await you.</p>
              <a href="Membership.php" class="btn btn-primary">Join With Us</a>
              
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  


  <!-- Contact Us -->
  <h3 class="p-4 m-10 fw-bold text-success text-center"> Contact Us to ZooParc</h3>
  <h6 class="p-2 m-3 fw-bold">We can't wait to show you our world.</h6>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h4 class="m-3 text-info">Opening Hours</h4>
        <p class="m-2">Daily from 9:00am - 5:00pm</p>
        <p class="m-2">(including public holidays)</p>
        <p class="m-2">last entry 4:30pm</p>
      </div>
      <div class="col">
        <h4 class="m-3 text-info">Address</h4>
        <p class="m-2">No 18/B, Pinnnawala, Sri Lanka</p>
      </div>
      <div class="col">
        <h4 class="m-3 text-info">Phone Number</h4>
        <p class="m-2">+94 72 158 7703</p>

        <h4 class="m-3 text-info"> Email</h4>
        <p class="m-2">zooparc2024@gmail.com</p>

      </div>
    </div>
  </div>

  <h2 class="m-6 p-3 fw-bold text-success container-lg text-center">Follow Us</h2>
  <div class="container-fluid justify-content-between">
    <ul class="list-unstyled d-flex">
      <li class="ms-2"><a class="link-body-emphasis text-white " href="#"><img src="./icons/icons8-twitter-50.png" alt="twitter"></a></li>
      <li class="ms-2"><a class="link-body-emphasis text-white " href="#"><img src="./icons/icons8-instagram-50.png" alt="instagram"></a></li>
      <li class="ms-2"><a class="link-body-emphasis text-white" href="#"><img src="./icons/icons8-facebook-50.png" alt="facebook"></a></li>
      <li class="ms-2"><a class="link-body-emphasis text-white" href="#"><img src="./icons/icons8-tiktok-50.png" alt="tiktok"></a></li>
      <li class="ms-2"><a class="link-body-emphasis text-white" href="#"><img src="./icons/icons8-whatsapp-50 (1).png" alt="whatsapp"></a></li>
      <li class="ms-2"><a class="link-body-emphasis text-white" href="#"><img src="./icons/icons8-youtube-50 (1).png" alt="youtube"></a></li>
    </ul>
  </div>



  <?php
  include './components/footer.php';
  ?>
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>