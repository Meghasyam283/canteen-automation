<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Details</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        .container {
            height: 140vh;
            width: auto;
            background-color: chartreuse;
            border: 2px solid black;
            background-image: url(canteen.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .box {
            height: 300px;
            width: 1200px;
            margin-left: 200px;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
        }
        
        img {
            height: 300px;
            width: 1200px;
        }
        
        p {
            position: absolute;
            font-size: 40px;
            top: 18%;
            left: 30%;
            color: black;
        }
        
        .small {
            height: 50px;
            width: 1200px;
            background-color: cornsilk;
            border: 2px solid black;
            margin-left: 200px;
        }
        
        a {
            display: block;
            color: black;
            margin: 10px;
            padding-left: 160px;
            font-size: 22px;
            /* width:70px;*/
            text-decoration: none;
            text-align: center;
            float: left;
        }
        
        a:hover {
            display: block;
            background-color: skyblue;
            color: white;
        }
        
        .container1 {
            height: 500px;
            width: 1200px;
            margin-left: 200px;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            background-image: url("background4.jpg");
            /* opacity:0.90;*/
            background-repeat: no-repeat;
            background-size: cover;
        }
        #wel{
            top: 63%;
            left: 42%;
        }
        
        #recipe {
            top: 73%;
            left: 42%;
        }
        
        #click {
            top: 83%;
            left: 42%;
        }
        
        button {
            position: absolute;
            top: 93%;
            left: 47%;
            height: 50px;
            width: 150px;
            font-size: 25px;
            background-color: skyblue;
            border: 2px solid black;
        }
    </style>
</head>

<body>
<?php 
session_start();
if(isset($_SESSION['username'])){
            $p=$_SESSION['username'];
            
                } ?>
    <div class="container">
        <div class="box">
            <img src="Food back1.jpg">
            <p> CANTEEN MANAGEMENT SYSTEM</p>
        </div>
        <br>
        <div class="small">
            <a href="canteen(Home)_Login.php">HOME</a>
            <a href="canteen(Home)_Login.php">Customerlogin</a><a href="#">ContactUs</a>
            <a href="canteen(Home)_Login.php">LogOut</a>
        </div>
        <br>
        <form method="POST" action="AddFood.php">
        <div class="container1">
                        <p id="wel"> Welcome! <?php  echo $_SESSION['username']; ?></p>
                    <p id="recipe">Let's Manage Recipes</p>
                    <p id="click"> click to Manage!!</p>
                    <br>
                    <button type="submit" onclick="location.href='AddFood.php'">Manage...</button>
            </form>
        </div>

</body>

</html>