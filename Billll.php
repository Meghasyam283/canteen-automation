<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
*
{
    margin:0 px;
    border:0 px; 

}
a
{
    text-decoration:none;
    color:black;
}
body 
{
  height:1800px;
  width:1600px;

  background-color:#B9D9EB;
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
.vvv
{
    position:absolute;
    top:190px;
    border-radius:10px;
    left:360px;
    height:100px;
    background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);
    width:700px;
}
.Bill
{
  height:50px;
  width:200px;
  margin-top:30px;
  margin-left:155px;
}
.Bills
{
  position:absolute;
  left:360px;
  top:300px;
  border-radius:10px;
  height:730px;
  width:700px;
  background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);

}
Table
{

border-style:solid;
border-width:2px;
background: radial-gradient(circle, rgba(231,241,238,1) -30%, rgba(35,222,198,1) 100%);
border: 2px solid black;
position:absolute;
margin-top:70px;
border-radius:10px;
margin-left:100px;

}

tablee
{
/* border-style:solid; */
/* border-width:2px; */
background: radial-gradient(circle, rgba(231,241,238,1) -30%, rgba(35,222,198,1) 100%);
/* border: 2px solid black; */
position:absolute;
top:300px;
border:none;
left:500px;

}

.GoPay
{
  height:35px; 
  width:200px;
  border-radius:7px;
  margin-top:720px;
  margin-left:50px;
  background: rgb(106,230,94);
  background: radial-gradient(circle, rgba(106,230,94,1) 0%, rgba(162,212,134,1) 100%);font-size:16px;margin-left:120px;
}
#TotalBill
{
  position:absolute;
  top:408px;
  left:1000px;
  background: radial-gradient(circle, rgba(231,241,238,1) -30%, rgba(35,222,198,1) 100%);
  width:455px;
  height:27px;
  border: 2px solid black;
  padding-left:180px;
  border-top:none;
}
</style>

<?php
$validate=TRUE;
$Bill=$sum='';
$sum1=0;
$quantity=1;
include "Connections.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if($validate==TRUE)
        {
          // $sql= "SELECT SUM(Price) AS totalsum FROM cust_order";
          // $res=mysqli_query($conn,$sql);
          // $ass=mysqli_fetch_assoc($res);
          // $sum = $ass['totalsum'];

          $sql ="SELECT * FROM  cust_order";
          $res=mysqli_query($conn,$sql);
         # $ass=mysqli_fetch_assoc($res);
          $sql1= "SELECT SUM(Price) AS totalsum FROM cust_order";
          $res1=mysqli_query($conn,$sql1);
          $ass1=mysqli_fetch_assoc($res1);
          $sum = $ass1['totalsum'];
          
          echo "<div class='Bills'>";
          echo "<table border='1'>

          <tr>

          <th>FoodName</th>

          <th>FoodCode</th>

          <th>Price</th>

          <th>Quantuty</th>

          <th>Offers</th>

          </tr>";
          
          while($row = mysqli_fetch_assoc($res))
          {
            echo "<tr>";
            echo "<td>" . " ".$row['FoodName'] . "</td>";
            echo "<td>" . " ".$row['FoodCode'] . "</td>";
            echo "<td>" ." ". $row['Price'] . "</td>";
            echo "<td>" ." ". $row['Quantity'] . "</td>";
            echo "<td>" ." ". $row['Offers'] . "</td>";
            echo "</tr>";
          }

          echo "</tablee border='0'>";
          echo "<tablee>
          <tr>
          <th border='0'></th>
          <th></th>
          <th>Total Bill</th>
          <th></th>
          <th></th>
          </tr>";
          echo "<td>" . " "."</td>";
          echo "<td>" . " " ."</td>";
          echo "<td>" . " ".$sum."</td>";
          echo "<td>" . " ". "</td>";
          echo "<td>" . " ". "</td>";


          echo "</tr>";
          echo "</table>";
          echo"</div>";
         
        }
      }
?>
<body>
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<body>

  <nav class="navbar navbar-expand-lg navbar-light " style=" width:1500px;left:30px;border-radius:5px; position:absolute;top:100px;background-color:rgb(138, 216, 240)">
    <a class="navbar-brand" href="canteen(Home).php">Home</a>
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
            <a class="dropdown-item" href="Breakfast.php">Breakfast</a>
            <a class="dropdown-item" href="Lunch.php">Lunch</a>
            <a class="dropdown-item" href="Beverages.php">Beverages</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Contactus.html" tabindex="-1" >Contact Us</a>
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


<div class="vvv">
<div id="Bill" class="Bill">
  <form method="POST" action="Billll.php">
      <button  type="submit" style=" height:35px; width:130px;border-radius:7px;background: rgb(106,230,94);background: radial-gradient(circle, rgba(106,230,94,1) 0%, rgba(162,212,134,1) 100%);font-size:16px;margin-left:120px;" value="View Bill">View Bill</button>
      <button type="button"  onClick="location.href='Payment.php'" value="Proceed to Pay"class="GoPay">Proceed to pay</button>
  </form>
</div>    
</div>
</body>
</html>
