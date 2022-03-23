<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="Beverages.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

  <body style=" background: linear-gradient(0.25turn,  #3f87a6, #ebf8e1,#3f87a6);">
    <nav class="navbar navbar-expand-lg navbar-light " style=" width:1500px;left:30px;border-radius:5px; position:absolute;top:100px;background-color:rgb(138, 216, 240)">
            <a class="navbar-brand" href="Canteen(Home).php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="AdminLogin.php">AdminLogin</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="BreakFast.php">Breakfast</a>
            <a class="dropdown-item" href="Lunch.php">Lunch</a>
            <a class="dropdown-item" href="Beverages.php">Beverages</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="ContactUs.html" tabindex="-1" >Contact Us</a>
        </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeyup="ShowSuggestion(this.value)">
                <button id="search" class="btn btn-outline-blue my-2 my-sm-0" style="border:2px solid rgb(57, 156, 223) ;color:black;background-color:rgb(68,202,243);"type="submit" >Search</button>
              </form>
            </div>
          </nav>

  <div class="home">
            <p style="color:white;font-size:46px;padding-top:-55px;padding-left:570px;">Canteen Management</p>
  </div>
  
<div class="Slide">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
          <div onClick="location.href='Cuppucino.html'" class="carousel-item active">
            <img src="Cappuccino.jpg" class="d-block w-100" alt="Idli">
            <div class="carousel-caption d-none d-md-block">
              <h5>Cuppuccino</h5>
              
            </div>
          </div>
          <div onClick="location.href='Tea.html'" class="carousel-item">
            <img src="tea.jpg" class="d-block w-100" alt="Chicken">
            <div class="carousel-caption d-none d-md-block">
              <h5>Tea</h5>
              
            </div>
          </div>
          <div onClick="location.href='Doughnut.html'" class="carousel-item">
            <img src="Doughnut.JPG" class="d-block w-100" alt="Pastry">
            <div class="carousel-caption d-none d-md-block">
              <h5>Doughnut</h5>
              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="item1" onClick="location.href='Mojito.html'"></div>
    <div class="item2" onClick="location.href='Cake.html'"></div>
</body>

</html>