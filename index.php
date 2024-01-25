<?php
require_once('./db/db-connection.php');
require_once('./db/db-login.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouvnie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 640px;
      }
    }
    .mask {
      height : 540px ;
      background-color: rgba(0, 0, 0, 0.7);
    }
    .text-white {
      margin-top: 20px;
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div id="intro-example" class="p-5 text-center bg-image"
    style="background-image: url('./assets/img/content_fashion_pria_7.jpg');">
    <div class="mask">
      <div class="d-flex justify-content-center align-items-center h-400">
        <div class="text-white">
          <h1 class="mb-3">Jouvnie</h1>
          <h5 class="mb-4">
            Cashier Management
          </h5>
          <a class="btn btn-outline-light btn-lg m-2" href="./pages/login.php"
            role="button" rel="nofollow" target="_blank">Sign In</a>
          <a class="btn btn-outline-light btn-lg m-2" href="./pages/register.php"
            target="_blank" role="button">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
</body>
</html>