<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icon.jpg" type="image/x-icon">
    <title>CSGOBS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index">Sākums</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="thl">Pro Videos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="wiki">Pro spēlētāji</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="picbox">Bildes no Major</a>
      </li>

    <li class="nav-item">
        <a class="nav-link" href="form">Pro player accounts</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LV Pro Players
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://liquipedia.net/counterstrike/YEKINDAR" target="_blank">Yekindar</a>
          <a class="dropdown-item" href="https://liquipedia.net/counterstrike/Flarich" target="_blank">Flarich</a>
          <a class="dropdown-item" href="https://liquipedia.net/counterstrike/Broky" target="_blank">Broky</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<br>

<h1 class="center-title"><b>Login or register as a pro player or post something</b></h1>

<br>
<br>

<div class="light-background">
<h3 class="center-title">Login</h3>
  <div class="container">
    <form class="form-horizontal" action="form" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Epasts:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="šeit jāievada e-pasts" name="email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Parole:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="password" placeholder="Šeit jāievada parole, bet to parādīs zemāk!" name="password">
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="login_button">Iesniegt</button>
        </div>
      </div>

    </form>
  </div>

  <div class="centered">
    <?php

    // asdf@asd.lv
      if(isset($_POST['login_button'])){

        if(empty($_POST['email'])){
          echo "Epasts nav ievadīts<br/>";
        }
        if(empty($_POST['password'])){
          echo "Parole nav ievadīta<br/>";
        }

        echo "<b> jūsu epasts: </b>{$_POST['email']}<br/>";
        echo "<b> jūsu parole: </b>{$_POST['password']}";
      }else{
        echo "<br/><br/><br/><br/>";
      }

    ?>
  </div>
  <br/>
</div>

<div class="light-background2">
  <h3 class="center-title">Register</h3>
  <div class="container">
    <form class="form-horizontal" action="form" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_name">Vārds:</label>
        <div class="col-sm-10">
          <input type="reg_name" class="form-control" id="reg_name" placeholder="šeit jāievada jūsu vārds" name="reg_name">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_surname">uzvārds:</label>
        <div class="col-sm-10">
          <input type="reg_surname" class="form-control" id="reg_surname" placeholder="šeit jāievada jūsu uzvārds" name="reg_surname">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_age">vecums:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="reg_age" placeholder="šeit jāievada jūsu vecums" name="reg_age">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_surname">Valsts:</label>
        <div class="col-sm-10">
          <input type="reg_country" class="form-control" id="reg_country" placeholder="šeit jāievada jūsu valsts" name="reg_country">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_email">Epasts:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="reg_email" placeholder="šeit jāievada e-pasts" name="reg_email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="reg_password">Parole:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="reg_password" placeholder="Šeit jāievada parole, bet to parādīs zemāk!" name="reg_password">
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="reg_button">Iesniegt</button>
        </div>
      </div>

    </form>
  </div>

  <div class="centered">
    <?php

    // asdf@asd.lv
      if(isset($_POST['reg_button'])){

        if(empty($_POST['reg_name'])){
          echo "vārds nav ievadīts<br/>";
        }
        if(empty($_POST['reg_surname'])){
          echo "uzvārds nav ievadīts<br/>";
        }
        if(empty($_POST['reg_age'])){
          echo "vecums nav ievadīts<br/>";
        }
        if(empty($_POST['reg_country'])){
          echo "valsts nav ievadīta<br/>";
        }
        if(empty($_POST['reg_email'])){
          echo "Epasts nav ievadīts<br/>";
        }
        if(empty($_POST['reg_password'])){
          echo "Parole nav ievadīta<br/>";
        }

        echo "<b> jūsu vārds: </b>{$_POST['reg_name']}<br/>";
        echo "<b> jūsu uzvārds: </b>{$_POST['reg_surname']}<br/>";
        echo "<b> jūsu vecums: </b>{$_POST['reg_age']}<br/>";
        echo "<b> jūsu valsts: </b>{$_POST['reg_country']}<br/>";
        echo "<b> jūsu epasts: </b>{$_POST['reg_email']}<br/>";
        echo "<b> jūsu parole: </b>{$_POST['reg_password']}";
      }else{
        echo "<br/><br/><br/><br/><br/>";
      }

    ?>
  </div>
  <br/>

</div>

<div class="light-background3">
<h3 class="center-title">Add a post to an account</h3>
  <div class="container">
    <form class="form-horizontal" action="form" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2" for="post_email">Epasts kam pievienot:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="post_email" placeholder="šeit jāievada e-pasts" name="post_email">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="post_password">Epasta parole:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="post_password" placeholder="Šeit jāievada parole, bet to parādīs zemāk!" name="post_password">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="post_content">Post content:</label>
        <div class="col-sm-10">          
          <input type="post_content" class="form-control" id="post_content" placeholder="Šeit jāievada post saturs" name="post_content">
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="post_button">Iesniegt</button>
        </div>
      </div>

    </form>
  </div>

  <div class="centered">
    <?php


    // asdf@asd.lv
      if(isset($_POST['post_button'])){

        if(empty($_POST['post_email'])){
          echo "Epasts nav ievadīts<br/>";
        }
        if(empty($_POST['post_password'])){
          echo "Parole nav ievadīta<br/>";
        }
        if(empty($_POST['post_content'])){
          echo "post saturs nav ievadīts<br/>";
        }

        echo "<b> jūsu epasts: </b>{$_POST['post_email']}<br/>";
        echo "<b> jūsu parole: </b>{$_POST['post_password']}<br/>";
        echo "<b> jūsu post: </b>{$_POST['post_content']}";
      }else{
        echo "<br/><br/><br/><br/>";
      }

    ?>
  </div>
  <br/>
</div>

</body>
</html>