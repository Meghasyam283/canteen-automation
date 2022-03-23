<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
*
{
    margin:0 px;
    border:0 px; 
    /* background: linear-gradient(0.25turn, #4fc3f7, #b3e5fc, #4fc3f7); */
}
a
{
    text-decoration:none;
    color:black;
}
body 
{
  height:1000px;
  width:1600px;
  /* background-image:url("BI01.jpg"); */
  background-color:#B9D9EB;
}


    .idli
    {
        height:500px;
        width:1000px;
        border: 2px solid black;
        position: absolute;
        background: rgb(174,238,221);
        border-radius:20px;
        color:white;
        background: rgb(58,180,131);
background: radial-gradient(circle, rgba(58,180,131,1) 0%, rgba(29,252,253,1) 50%, rgba(69,137,252,1) 100%);
        top:200px;
        left:300px;
    }
    .Home
{
            top:10px;
            left:20px;
            background-color:rgb(31, 30, 30);
            height:80px;
            width:1480px;
            border-radius: 20px;
            font-size: 16;
            position:absolute;
            opacity: 0.9;
            
}
.part1
{
  position: absolute;
  top:50px;
  left:100px;
  border: 2px solid black;
  height:350px;
  width:350px;
  background-image: url("Cereals(Small).jpg");
  border-bottom-left-radius: 200px 50px;
  background-color:white;
  border-bottom-right-radius: 200px 50px;
  background-repeat: no-repeat;
  background-size:cover;
}
.Bill
{
  position: absolute;
  top:50px;
  left:300px;
  background-color: #537895;
background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);
  border: 2px solid black;
  border-radius:20px;
  height:400px;
  width:400px;
}
.gpay
{
    height: 50px;
    width:50px;
    background-image: url(gpay.png);
    background-repeat: no-repeat;
    background-size:cover;
    border-radius:50px;
    position: absolute;
    top:270px;
    left:40px;

}

</style>
<?php
include "Connections.php";
$validate=TRUE;
$FoodName=$Price=$Quantity=$Offers=$FoodCode='';
$FoodName='Fish Curry';
$FoodCode='FISH';
$Price='230';
$Quantity='1';
$Offers='10% off for students';
$validate=TRUE;
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if($validate==TRUE)
        {
            $sql = "INSERT INTO cust_order(FoodName,FoodCode,Price,Quantity,Offers) VALUES ('$FoodName','$FoodCode', '$Price','$Quantity','$Offers')";
            $result = mysqli_query($conn, $sql);
            header("Location:Billll.php");
        }
    }
        
        
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body>

  <nav class="navbar navbar-expand-lg navbar-light " style=" width:1500px;left:30px;border-radius:5px; position:absolute;top:100px;background-color:rgb(138, 216, 240)">
    <a class="navbar-brand" href="canteen(Home)_Logout.php">Home</a>
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
            Dropdown
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

  <div class="Home">
            <p style="color:white;font-size:46px;padding-top:-55px;padding-left:570px;">Canteen Management</p>
  </div>
  
  <div class="idli">
    <div class="Bill">
        <h3 style="margin-left:140px; text-decoration:underline;background:transparent;">INVOICE</h3><br><br>
        <h5 style="margin-left:35px;background:transparent;">Items Ordered: Fish Curry</h5><br>
        <h5 style="margin-top:-55px;margin-left:300px;background:transparent;">225/-</h5><br>
        <!-- <h5 style="margin-left:35px;background:transparent;">No of pieces:1</h5> -->
        <div style="margin-left:5px;height:0.5px;width:385px;border:1px solid black"class="div1"></div><br>
        <h5 style="margin-left:35px;background:transparent;">Item Total:</h5>
        <h5 style="margin-left:35px;background:transparent;">GST: </h5>
        <h5 style="margin-top:-30px;margin-left:300px;background:transparent;">5/-</h5>
        <div style="margin-left:5px;height:0.5px;width:385px;border:1px solid black"class="div1"></div><br>
        <h5 style="margin-left:35px;background:transparent;">Total Bill:  </h5>
        <h5 style="margin-top:-30px;margin-left:300px;background:transparent;">230/-</h5><br>
        <form method="POST" action="Non-Veg.php">
          <input type="submit" style=" height:35px; width:130px;border-radius:7px;background: rgb(106,230,94);
          background: radial-gradient(circle, rgba(106,230,94,1) 0%, rgba(162,212,134,1) 100%);font-size:16px;margin-left:120px;" name="FRYCHICKEN" value="Confirm Order">
        </form>
    </div>
  </div>
</body>
</html>