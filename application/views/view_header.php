<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trainee System</title>
    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL;?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <style>
    body {
      min-height: 2000px;
      padding-top: 70px;
    }
    </style>
  <body>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="#">Trainee System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo BASE_URL; ?>companies">บริษัท</a>
            </li>
            <li>
               <a href="<?php echo BASE_URL; ?>schools">สถาบัน</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
                <a href="<?php echo BASE_URL; ?>#">Log in</span></a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>