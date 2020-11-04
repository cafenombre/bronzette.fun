<?php
include('config/access_api.php');
include('config/db.php');
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Bronzett.fun</title>
  </head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light" id="nav0">
  <a class="navbar-brand" href="#">Bronzette.fun</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <button class="btn" id="button1" onclick="showhide()" style="height:40px;width:40px; display:none;">
          <i class="fas fa-caret-down"></i>
        </button>
        <button class="btn" id="button2" onclick="showhide()" style="height:40px;width:40px;">
          <i class="fas fa-caret-right"></i>
        </button>
      </li>
      <li class="nav-item active">
        <button class="btn" id="sun" onclick="togglenight()" style="height:40px;width:40px;">
          <i class="fas fa-sun"></i>
        </button>
        <button class="btn" id="moon" onclick="togglenight()" style="height:40px;width:40px;display:none;color:#C0C0C0;">
          <i class="far fa-moon"></i>
        </button>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="randbuild()" href="#">New Build</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="randchamp()" href="#">New Championg</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
