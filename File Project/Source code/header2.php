<?php
session_start();
require('db_class.php');
$obj = new Db_Class();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="icon/css/all.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/body.css">
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="shortcut icon" href="assets/2.png">
  <title>Kab. Karangasem</title>
</head>

<body>

  <!--============================================================================ NAVBAR ==========================================================-->
  <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/2.png" height="60px">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="nav nav-pills">
          <li class="nav-item me-2">
            <a class="nav-link  link-navbar" href="#">𝗕𝗲𝗿𝗮𝗻𝗱𝗮</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link link-navbar" href="profile.php">𝗣𝗿𝗼𝗳𝗶𝗹</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link  active bg-active link-navbar" href="show.php">𝗗𝗮𝘁𝗮 𝗱𝗮𝗻 𝗜𝗻𝗳𝗼𝗿𝗺𝗮𝘀𝗶</a>
          </li>

          <li class="nav-item me-2">
            <a class="nav-link link-navbar" href="input.php">Input Data</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link link-navbar" href="map.php">𝗣𝗲𝘁𝗮</a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link btn-custom rounded" id="btn-sign">Sign Up</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>