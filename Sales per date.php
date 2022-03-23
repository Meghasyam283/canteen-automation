<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales per date</title>
    <style>
        .container {
            height: 180vh;
            width: auto;
            background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #3f87a6);
            border: 2px solid black;
        }
        
        .box {
            position: relative;
            top: 1%;
            height: 60px;
            width: 950px;
            margin-left: 200px;
            background-color: rgb(31, 30, 30);
            color: White;
            border: 2px solid black;
            border-radius: 40px;
        }
        
        img {
            height: 300px;
            width: 950px;
        }
        
        p {
            position: absolute;
            font-size: 20px;
            top: 2%;
            left: 30%;
            color: white;
        }
        
        .small {
            height: 50px;
            width: 950px;
            background-color: cornsilk;
            border: 2px solid black;
            margin-left: 200px;
        }
        
        ul {
            margin-top: 0px;
            list-style-type: none;
            margin-left: 160px;
        }
        
        .navbar {
            margin-top: 20px;
        }
        
        ul li {
            float: left;
            height: 30px;
            width: 135px;
            background-color: aqua;
            text-align: center;
            line-height: 21px;
            font-size: 18px;
        }
        
        ul li a {
            text-decoration: none;
            color: black;
            display: block;
        }
        
        ul li a:hover {
            background-color: chartreuse;
            color: black;
        }
        
        ul li ul {
            margin-left: 0px;
            padding-left: 0px;
        }
        
        ul li ul li {
            display: none;
            margin: 0px;
            padding: 0px;
        }
        
        ul li:hover ul li {
            display: block;
            margin: 0px;
            padding: 0px;
        }
        
        .container1 {
            position: relative;
            height: 800px;
            width: 950px;
            margin-left: 200px;
            margin-top: 40px;
            background: rgb(193, 14, 156);
            background: linear-gradient(90deg, rgb(194, 72, 119) 6%, rgba(245, 181, 206, 0.961) 41%, rgb(194, 72, 119) 98%);
            border: 2px solid black;
            border-radius: 10px;
            background-image: url("report\ background.jpg");
            opacity: 0.90;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        form {
            position: relative;
            top: -600px;
            text-align: center;
        }
        
        input {
            position: relative;
            top: 30%;
            background-color: white;
            margin-left: 20px;
            height: 30px;
            border: 2px solid black;
        }
        
        select {
            position: relative;
            top: 30%;
            background-color: white;
            margin-left: 20px;
            height: 30px;
            width: 100px;
            border: 2px solid black;
        }
        table{
            position:absolute;
            top:550px;left:300px;
        width:50%;
        border-collapse: collapse;
    }
    table,td,th{
        border:5px solid green;
        padding : 5px;
        background-color:white;
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
            <li><a href="mangerecipe.html">Add Details</a>
                <ul>
                    <li><a href="AddFood.php">Add Food</a></li>
                    <li><a href="Add combo.php">Add combo</a></li>
                </ul>

            </li>
            <li><a href="Remove Food.php">Remove Food</a></li>
            <li><a href="Update inventory.php">Update Inventory</a></li>
            <li><a href="Take order.php">Take order</a></li>
            <li><a href="#">Report</a>
                <ul>
                    <li><a href="sales per date.php">Sales per date</a></li>
                    <li><a href="sales per item.php">Sales per item</a></li>
                </ul>

            </li>
            <li><a href="View Feedback.php">View Feedback</a></li>
            <li><a href="canteen(Home)_Login.php">Log out</a></li>
        </ul>
        <br>
        <br><br>
        <div class="container1"></div>
        <form method="POST" action="Sales per date.php">

            <b style="font-size:25px;">From Date:</b><input type="date"name="d1" required  style="margin-left:10px; text-align:center;">
            <b style="font-size:25px;">To date:</b><input type="date" name="d2" required style="font-size:15px; margin-left:10px; "><br><br>
            <button type="submit" Style="height:40px;width:200px; border:2px solid black; border-radius:30px;background-color:chartreuse; font-size:20px;">Search per date</button>
        </form>
        <br>
        <?php
        session_start();
        $valid=TRUE;
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
        $d1=$_POST["d1"];$d2=$_POST["d2"];
         if(empty($_POST["d1"]))
         {
            $valid=FALSE;
         }
         else{
             $d1=htmlentities($_POST["d1"]);
         }
         if(empty($_POST["d2"]))
         {
             $valid=FALSE;
         }
         else{
            $d2=htmlentities($_POST["d2"]);
        }
         if($valid==TRUE)
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
          $sql = "SELECT * FROM `foodorder` WHERE Date BETWEEN '$d1' AND '$d2'";
          $result=mysqli_query($conn,$sql);
   
          if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong style=" position:absolute;text-align:center;top:150px;font-size:25px;left:500px;">Success!sales are displayed!</strong>
            <button type="button" style="position:absolute;top:155px;left:800px;color:white;background-color:red;font-size:15px;border:2px solid red;" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
          }
          else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
            <span aria-hidden="true">×</span>
          </button>
        </div>'.mysqli_error($conn);
        }
        $count=mysqli_num_rows($result);
        echo "<table>
<tr>
<th>Username</th><th>Foodname</th><th>Category</th><th>Quantity</th><th>Amount</th><th>Date</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>"  .$row['username'] ."</td>";
    echo "<td>"  .$row['foodname'] ."</td>";
    echo "<td>"  .$row['category'] ."</td>";
    echo "<td>"  .$row['quantity'] ."</td>";
    echo "<td>"  .$row['amount'] ."</td>";
    echo "<td>"  .$row['Date'] ."</td>";
    echo "</tr>";
    
}
echo "</table>";
}
echo"<br>";
$count=mysqli_num_rows($result);
if($count==0)
{
    echo "<div class='count'>Sorry!No sales found from $d1 to $d2 !</div>";
}
else{
    echo "<div class='count'>No.of sales of $food from $d1 to $d2 are:$count</div>";
}
mysqli_close($conn);
         }
     }
    ?>
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