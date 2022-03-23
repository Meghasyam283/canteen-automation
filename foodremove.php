<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Food</title>
    <script>
     function ShowFood(){
          var b= document.getElementById('cat').value;
          var xmlhttp=new XMLHttpRequest();
               xmlhttp.onreadystatechange=function(){
                   if(this.readyState == 4 && this.status == 200)
                   {
                       document.getElementById('food').innerHTML=this.responseText;
                   }
                   else{
                    document.getElementById('food').innerHTML="error occured";
                   }
               };
               xmlhttp.open("GET","Fooddb.php?state="+b,true);
               xmlhttp.send();
          }
        
</script>
    <style>
         .container{
            height:140vh;
           width:auto;
          
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
            height:500px;
            width:950px;
            margin-left:200px;
            margin-top:40px;
           

            border:2px solid black;border-radius:10px;
            
           
        }
        form{
            position:relative;
           top:-300px;
           text-align:center;
        }
        input{
            position:relative;
            top:30%;
            background-color:white;
            margin-left:20px;
            height:30px;
            border:2px solid black;
        }
        select{
            position:relative;
            top:30%;
            background-color:white;
            margin-left:20px;
            height:30px;
            width:100px;
            border:2px solid black;
        }
     </style>
</head>

<body>
<?php
session_start();
        $id=$name=$category="";
        $validate=TRUE;
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
           if(empty($_POST["name"]))
            {
                $validate=FALSE;
            }
            else{
                $name=htmlentities($_POST["name"]);
            }
            if(empty($_POST["category"]))
            {
                $validate=FALSE;
            }
            else{
                $category=htmlentities($_POST["category"]);
            }
           
            if($validate==TRUE)
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
                $sql = "Delete From `food` where Foodname='$name' AND Category='$category'";
                $result = mysqli_query($conn, $sql);
                
               # $row=mysqli_fetch_assoc($result);
               $count=mysqli_affected_rows($conn);
                if($count>0){
                   
                    
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong style="position:absolute;text-align:center;top:150px;font-size:25px;left:500px;">Success!Food has been removed successfully!</strong> 
                  <button type="button" style="position:absolute;top:155px;left:980px;color:white;background-color:red;font-size:15px;border:2px solid red;"class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>';
                     }
                else{
                    // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong style="position:absolute;text-align:center;top:170px;font-size:25px;left:500px;">Sorry!There is no such Food item available!</strong>
                  <button type="button"style="position:absolute;top:175px;left:980px;color:white;background-color:red;font-size:15px;border:2px solid red;" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>';
                }
            }
            }
            
        }

    ?>
    <div class="container">
        <div class="box">
           
            <p> CANTEEN MANAGEMENT SYSTEM</p>
        </div>
        <ul class="navbar">
         <li><a href="mangerecipe.html">Add Details</a>
            <ul >
                <li><a href="AddFood.php">Add Food</a></li>
                <li><a href="Add combo.php">Add combo</a></li>
            </ul>
        
        </li>
         <li><a href="Remove Food.php">Remove Food</a></li>
        <li><a href="Update Inventory.php">Update Inventory</a></li>
        <li><a href="Take order.php">Take order</a></li>
       <li><a href="View Feedback.php">View Feedback</a></li>
        <li><a href="#">Report</a>
            <ul>
                <li><a href="Sales per date.php">Sales per date</a></li>
                <li><a href="Sales per item.php">Sales per item</a></li>
            </ul>
        </li>
         <li><a href="canteen(Home)_Login.php">Log out</a></li>
         </ul>
         <br>
         <br><br>
         <div class="container1"></div>
           <form method="POST" action="removefood1.php">
           <b style="font-size:25px; ">Category:</b><select id="cat" name="category" onchange="ShowFood()"required><option name="category">BreakFast</option>
                <option name="category">Lunch</option>
                <option name="category">Snacks</option></select><br><br>
              <b style="font-size:25px; ">Food name:</b><select name="name" required>
              <option  id="food"value="">select a food item</option>
              
            </select><br><br>
                  
                <button type="submit" Style="height:40px;width:80px; border:2px solid chartreuse; border-radius:30px;background-color:chartreuse; font-size:20px;">Delete</button>
              </form>
              <br>
        <br>
        
    
</body>
</html>