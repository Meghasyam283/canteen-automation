<html>
<head>
  <link rel="stylesheet" href="Canteen(Home).css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body style=" background: linear-gradient(0.25turn,  #3f87a6, #ebf8e1,#3f87a6);">
    <nav class="navbar navbar-expand-lg navbar-light " style=" width:1500px;left:30px;border-radius:5px; position:absolute;top:100px;background-color:rgb(138, 216, 240)">
            <a class="navbar-brand" href="#">Home</a>
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
                    <a class="dropdown-item" href="Breakfast.html">Breakfast</a>
                    <a class="dropdown-item" href="Lunch.html">Lunch</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Beverages.html">Beverages</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" >Contact Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeyup="ShowSuggestion(this.value)">
                <button id="search" class="btn btn-outline-blue my-2 my-sm-0" style="border:2px solid rgb(57, 156, 223) ;color:black;background-color:rgb(68,202,243);"type="submit" >Search</button>
              </form>
            </div>
          </nav>
          <div class="sugg">
          <!-- <p> Suggestions : <span id="output" style="font-weight:bold"></p> -->
          </div>
         
        <div class="home">
            <p style="color:white;font-size:46px;padding-top:-55px;padding-left:570px;">Canteen Automation</p>
        </div>
        <div class="login">
          <input type="button" onClick="location.href='ClassyLogin.php'" value="Login">
        </div>
        <div class="signup">
          <input type="button" onClick="location.href='ClassyForm.php'" value="SignUp">
        </div>
            
            
          <div class="Box" id="box1" onClick="location.href='Idli.html'"></div>

          <div class="Box" id="box2" onClick="location.href='Chicken.html'"></div>

          <div class="Box" id="box3" onClick="location.href='Pizza.html'"></div>

          <div class="Box" id="box4" onClick="location.href='Burger.html'"></div>

          <div class="Box" id="box5" onClick="location.href='Tandoori.html'"></div>

          <div class="Box" id="box6" onClick="location.href='Pasta.html'"></div>

          <div class="Box" id="box7" onClick="location.href='Italian.html'"></div>

          <div class="Box" id="box8" onClick="location.href='Pastry.html'"></div>

          <div class="box" id="box9" onClick="location.href='cool.html'"></div>
  
          <div class="Box" id="box10" onClick="location.href='Panner.html'"></div>
          
          <div class="Box" id="box11" onClick="location.href='milkshake.html'"></div>
    </body>
    </html>