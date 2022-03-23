<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Inventory</title>
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
            background: rgb(193,14,156);
    background: linear-gradient(90deg, rgb(194, 72, 119) 6%, rgba(245, 181, 206, 0.961) 41%, rgb(194, 72, 119) 98%);
            border:2px solid black;border-radius:10px;
            
            background-image:url("B14.jpg");
            opacity:0.90;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            position:relative;
           top:-400px;
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
        $id=$name=$category=$quantity="";
        $validate=TRUE;
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST["id"]))
            {
                $validate=FALSE;
            }
            else{
                $id=htmlentities($_POST["id"]);
            }
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
            if(empty($_POST["quantity"]))
            {
                $validate=FALSE;
            }
            else{
                $quantity=htmlentities($_POST["quantity"]);
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
            
                $sql = "Update `food` SET Quantity='$quantity' WHERE Foodname='$name' AND Category='$category'";
        
                $result = mysqli_query($conn, $sql);
               
         
                if($result){
                   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong style="position:absolute;text-align:center;top:150px;font-size:25px;left:500px;">Success!Fooditem has updated successfully!</strong>
                  <button type="button"style="position:absolute;top:155px;left:960px;color:white;background-color:red;font-size:15px;border:2px solid red;" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>';
                }
                else{
                    // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong style="position:absolute;text-align:center;top:150px;font-size:25px;left:500px;">Error!There is no "$name" under "category"!please check and try again.</strong>
                  <button type="button" style="position:absolute;top:155px;left:960px;color:white;background-color:red;font-size:15px;border:2px solid red;"class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>'.mysqli_error($conn);
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
        <li><a href="Update inventoty.php">Update Inventory</a></li>
        <li><a href="Take order.php">Take order</a></li>
      <li><a href="#">Report</a>
            <ul>
                <li><a href="Sales per date.php">Sales per date</a></li>
                <li><a href="Sales per item.php">Sales per item</a></li>
                
           </ul>
        
        </li>
        <li><a href="View Feedback.php">View Feedback</a></li>
         <li><a href="canteen(Home)_Login.php">Log out</a></li>
         </ul>
         <br>
         <br><br>
         <div class="container1"></div>
           <form method="POST" action="Update inventory.php">
           <b style="font-size:25px;color:white; ">Food-item no:</b><input name="id" type="text" required><br><br>
              <b style="font-size:25px; color:white;margin-left:20px; ">Food name:</b><input type="text" required name="name" style="margin-left:35px;"><br><br>
              <b style="font-size:20px; color:White;">Category:</b><select name="category" required><option name="category">BreakFast</option>
                <option name="category">Lunch</option>
                <option name="category">Snacks</option></select><br><br>
              <b style="font-size:25px; color:white;">Quantity Available:</b><input type="text" name="quantity" required style="font-size:15px; "><br><br>
            <button type="submit" Style="height:40px;width:80px; border:2px solid chartreuse; border-radius:30px;background-color:chartreuse; font-size:20px;">Update</button>
             </form>
             <script>
let itag = document.getElementsByClassName('form-control');
let valid = true;
function validateForm() {
for(i of itag)
{
  if(i.value=='')
  {
  i.classList.add("rb");
  valid = false;
  }
  else{
    i.classList.remove("rb");
  }
  
}

return valid;
}
function fun()
{
  let btn = document.getElementsByClassName('show')[0];
  btn.style.display='none';
}

      
 </script>
    <br>
        <br>

    
</body>
</html>