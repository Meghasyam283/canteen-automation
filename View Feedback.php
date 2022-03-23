<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Feedback</title>
    <style>
         .container{
            height:140vh;
           width:auto;
           background: linear-gradient(0.25turn,  #3f87a6, #ebf8e1,#3f87a6);
           border:2px solid black;
       }
       .box{
           position:relative;
           top:1%;
           height:60px;width:950px;
           margin-left:200px;
           background-color:rgb(31, 30, 30);color:White;
           border:2px solid black;border-radius:40px;
           
           }
       img{
           height:300px;
           width:950px;
           }
       p{
          position:absolute;
          font-size:20px;
          top:2%;
          left:30%;
        color:white;
       }
         .small{
        height:50px;width:950px;
        background-color: cornsilk;border:2px solid black; margin-left:200px;
      }
      
      ul{
          margin-top:0px;
          list-style-type: none;
         margin-left:160px;
         
      }
      .navbar{
          margin-top:20px;
      }
      ul li{
        float:left;
        height:30px;
        width:135px;
        background-color:aqua;
         text-align:center;
         line-height:21px;
         font-size:18px;
    }
    .nav{
        height:50px;
         }
     ul li a{
         text-decoration:none;
         color:black;
         display:block;
         
     }
    
     ul li a:hover{
         background-color:chartreuse;
         color:black;
     }
     ul li ul{
         margin-left:0px;
         padding-left:0px;
     }
     ul li ul li{
         display:none;
         margin:0px;
        padding:0px;
        
         }
         ul li:hover ul li{
             display:block;
             margin:0px;
             padding:0px;
            
         }
         .container1{
             position:relative;
            height:600px;
            width:950px;
            margin-left:200px;
        margin-top:30px;background: rgb(193,14,156);
            background-color:rgb(89, 247, 178);
            border:2px solid black;border-radius:10px;
            
        }
        form{
            position:relative;
           top:-400px;
           text-align:center;
           margin-left:130px;
        }
        input{
            position:relative;
          top:-180px;
            background-color:green;
            color:white;
            left:-150px;
            height:50px;
            border:2px solid black;
        }
        table{
            position:absolute;
            top:300px;left:300px;
        width:50%;
        border-collapse: collapse;
    }
    table,td,th{
        border:5px solid green;
        padding : 5px;
    }
    th{text-align: left;}
    .count{
        position:absolute;left:400px;top:500px;
        font-size:25px;color:red;
    }
        </style>
</head>
<body>
    
    
<div class="container">
        <div class="box">
           
            <p> CANTEEN MANAGEMENT SYSTEM</p>
        </div>
        <ul class="navbar">
         <li class="nav"><a href="mangerecipe.html">Add Details</a>
            <ul >
                <li><a href="AddFood.php">Add Food</a></li>
                <li><a href="Add combo.php">Add Combo</a></li>
            </ul>
        
        </li>
         <li class="nav"><a href="Remove Food.php">Remove Food</a></li>
        <li class="nav"><a href="Update inventory.php">Update Inventory</a></li>
        <li class="nav"><a href="Take order.php">Take order</a></li>
       <li class="nav"><a href="View Feedback.php">View Feedback</a></li>
        <li class="nav"><a href="#">Report</a>
            <ul>
                <li><a href="Sales per date.php">Sales per date</a></li>
                <li><a href="Sales per item.php">Sales per item</a></li>
              
           </ul>
        
        </li>
         <li class="nav"><a href="canteen(Home)_Login.php">Log out</a></li>
         </ul>
         <br>
         <br><br>
         <div class="container1"></div>
    <form method="POST" action="View Feedback.php">
        <input type="submit" value="View Feedback">
</form>
<?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            #connecting to database..
            $servername = "localhost";
            $username = "amrutha";
           $password = "Amrutha@1";
           $database = "canteen";
            // Create a connection
       $conn = mysqli_connect($servername, $username, $password, $database);
           // Die if connection was not successful
       if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
          // Submit these to a database
          // Sql query to be executed 
          $sql = "SELECT * FROM `feedback`";
          $result=mysqli_query($conn,$sql);
   
          if($result){
           // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //<strong style=" position:absolute;text-align:center;top:150px;font-size:25px;left:500px;">Success!sales are displayed!</strong>
            //<button type="button" style="position:absolute;top:155px;left:800px;color:white;background-color:red;font-size:15px;border:2px solid red;" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
             // <span aria-hidden="true">×</span>
            //</button>
         // </div>';
         // }
          //else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
           // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          //<strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
         // <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
            //<span aria-hidden="true">×</span>
          //</button>
        //</div>'.mysqli_error($conn);
        }
        $count=mysqli_num_rows($result);
        echo "<table>
<tr>
<th>Email</th><th>Username</th><th>Comments</th><th>Rating</th><th>Date</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>"  .$row['email'] ."</td>";
    echo "<td>"  .$row['name'] ."</td>";
    echo "<td>"  .$row['comments'] ."</td>";
    echo "<td>"  .$row['rating'] ."</td>";
    echo "<td>"  .$row['date'] ."</td>";
    echo "</tr>";
    
}
echo "</table>";
}
echo"<br>";
mysqli_close($conn);
}
?>
</body>
</html>