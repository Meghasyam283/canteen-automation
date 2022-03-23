<?php
   session_start();
   session_unset();
   session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container{
        position:absolute;
             top:100px;
             left:500px;padding-top:5px;
             text-align:center;
             height:100px;
             width:350px;
             background-color:skyblue;
    }
       p{
            position:relative;
            background-color:rgb(255, 128, 149);
            height:40px;margin-top:20px;
            
         }
    </style>
</head>
<body>
    <div class="container">
    <p> Thank you.You have successfully logged out:)</p>
    </div>
</body>
</html>