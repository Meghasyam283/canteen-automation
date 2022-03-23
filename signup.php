
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .container{
           background-color:skyblue;
           height:100vh;
           width:auto;
           background-image:url(just1.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        .box{
            position:relative;
            
            height:500px;
            width:500px;
            top:50px;
            left:500px;
            border:1px solid white;
            border-radius:10px;
            display:flex;
            justify-content:center;
            color:white;
        }
        .form{
            position:relative;
            top:50px;
        }
        input{
            position:relative;
            left:10px;
            height:30px;
            width:250px;
            border:1px solid black;
            }
            
        .btn{
          position:relative;
            height:40px;
            width:90px;
            background-color:orange;
            color:white;
            border:1px solid orange;
            left:20px;

        }
        p{
          position:relative;
            color:white;
            text-align:center;
        }
       #sign{
        top:10px;
        font-size:25px;
       }
        a{
          color:white;
          
        }
        
        .error{
              position:relative;
              color: white; 
              left:10px;
        }
        
        .error5,.error6{
          text-align:center;
          color:white;
          left:50px;
        }
    </style>

</head>
<body>
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$error1=$error2=$error3=$error4=$error5=$error6=" ";
$Validate=TRUE;


// connect to the database
$servername="127.0.0.1";
 $username="amrutha";
 $password="Amrutha@1";
 $database="mtse_db";
$conn = mysqli_connect($servername,$username,$password,$database);

// REGISTER USER
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
  $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

  
  if (empty($_POST["username"])) { 
      $error1="Username is required";
     $Validate=FALSE; }
  if (empty($email)) { $error2= "Email is required";
   
$Validate=FALSE;}
  if (empty($password1)) { $error3= "Password is required";
   
    $validate=FALSE; }
  if ($password1 != $password2) {
    $error4="The two passwords do not match";
    $Validate=FALSE;
  }

  // validation
  if($Validate==TRUE){
  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $error5= "Username already exists";
     
    }

    if ($user['email'] === $email) {
      $error6="email already exists";
      
    }
  }

  // Finally, register user if there are no errors in the form
  if(!empty($username)&&!empty($email)&&!empty($password1)&&$password!=$password2&&$user['username']!=$username) {
    $password = md5($password1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users`(username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($conn, $query);
  	

  }
  else{
    echo "error occured".mysqli_error($conn);
  }
}
}
?>
<div class="container">
        <div class="box">
        <form method="POST"class="form"action="signup.php">
        <p id="sign">Signup</p>
          Username:<input type="text" name="username" value="<?php echo $username; ?>">
          <span class="error">*<?php echo $error1;?></span>
          <br>
          <br><br>
           Email:  <input type="text" name="email" id="err" value="<?php echo $email;?>">
           <span class="error">*<?php echo $error2;?></span>
           <br><br><br>
           Password:<input type="password" name="password1">
           <span class="error">*<?php echo $error3;?></span>
           <br><br><br>
           confirm password:<input type="password" name="password2">
           <span class="error">*<?php echo $error4;?></span>
           <br><br><br>
           <button type="submit" class=btn name="reg_user">Register</button><br>
           <?php
               echo "<div class=error5>$error5</div>";
            
      echo "<div class=error6>$error6</div>";
           ?>
        </form>
        </div>
        <br><br><br>
        <p> Already a member:
       <a href="login.php">Click here to login</a>
       </p>
        


    </div>
    
</body>
</html>