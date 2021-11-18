<?php
$phones = [
  [
    'name' => 'Samsung Galaxy Note 20 Ultra',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0001115_samsung-galaxy-note-20-ultra_220.png',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
  ],
  [
    'name' => 'INFINIX Zero 8',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0001278_infinix-zero-8_220.jpeg',
    'rate' => '1',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
  ],
  [
    'name' => 'Apple iPhone 12 Pro',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '3',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

  ],
  [
    'name' => 'ITEL A48',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0001532_itel-a48_220.jpeg',
    'rate' => '2',
    'brand' => 'iTel',
    'price' => 'JOD 66.00',
  ],
  [
    'name' => 'Samsung Galaxy S21 Ultra',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0001485_samsung-galaxy-s21-ultra_220.jpeg',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00',
  ],

  [
    'name' => 'Galaxy A52',
    'img_url' => 'https://eshop.orange.jo/app-images/thumbs/0002097_galaxy-a52_220.jpeg',
    'rate' => '2',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00',
    'is_out_of_stock' => '1'
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Phone | Orange Jordan E shop</title>
  <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="container mt-5">
    <div class="row gap-3 justify-content-center ">
      <?php foreach ($phones as $key => $value) { ?>
        <div class="col-md-3 col-sm-5 card position-relative">
          <?php if (isset($phones[$key]["is_out_of_stock"])) {
            if ($phones[$key]["is_out_of_stock"] == 1) { ?>
              <div class="out-of position-absolute">
                <span class="out-of-stock">Out of stock</span>
              </div>
          <?php   }
          } ?>
          <img class="mx-auto d-block mt-2 mb-2" height="150px" src="<?php echo $phones[$key]["img_url"] ?>" alt="">
          <p style="color: gray;"><?php echo $phones[$key]["brand"] ?></p>
          <h4><?php echo $phones[$key]["name"] ?> </h4>
          <div class="mb-2">
            <?php for ($i = 0; $i < $phones[$key]["rate"]; $i++) {
              echo '<i class="fas fa-star y-star"></i>';
            }
            for ($i = 0; $i < 5 - $phones[$key]["rate"]; $i++) {
              echo '<i class="fas fa-star"></i>';
            } ?>
          </div>
          <a class="mb-2" href="#">View Details <i class="fas fa-chevron-right"></i></a>
          <h4><?php echo $phones[$key]["price"] ?> </h4>
          <div class="row ms-1 me-1 mb-2">
            <button type="button" class="btn btn-primary col-7 me-2">Buy Now</button>
            <button type="button" class="btn btn-secondary col-4"><i class="fas fa-shopping-cart"></i></button>
          </div>
        </div>
      <?php   } ?>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>

</html>