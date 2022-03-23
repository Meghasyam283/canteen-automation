<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            height:400px;
            width:500px;
            top:160px;
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
            input[name=email]
            {
                position:relative;
                left:30px;
            }
           
        .btn{
          position:relative;
            height:40px;
            width:90px;
            background-color:orange;
            color:white;
            border:1px solid orange;
            left:50px;

        }
        p{
            position:relative;
            color:white;
            text-align:center;
            top:150px;
        }
        a{
            color:white;
        }
        .error{
              position:relative;
              color: white; 
              left:30px;
        }
        .error4{
         position:relative;
          color:white;
          left:20px;
        }
        .b1{
            position:absolute;
            background-color:white;
            color:black;
            right:50px;
            height:50px;width:80px;top:30px;
        }
       a[href="logout.php"]{
           text-decoration:none;
           color:black;
           
       }
    </style>

</head>
<body>
<?php
        session_start();

        // initializing variables
        $username = "";
        $email    = "";
        $error1=$error2=$error3=$error4=$error5=$error6=$error7=$error8=" ";
        $Validate=TRUE;
        
        
        // connect to the database
        $servername="127.0.0.1";
         $username="amrutha";
         $password="Amrutha@1";
         $database="mtse_db";
        $conn = mysqli_connect($servername,$username,$password,$database);
        
        // REGISTER USER
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // receive all input values from the form
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $captcha=$_POST['Captcha'];
         
          
          if (empty($_POST["username"])) { 
              $error1="Username is required";
             $Validate=FALSE; }
          if (empty($email)) { $error2= "Email is required";
           
        $Validate=FALSE;}
          if (empty($password)) { $error3= "Password is required";
           
            $Validate=FALSE; }
            if(empty($captcha)){
                $error7="Enter Captcha";
                $Validate=FALSE;
            }
            $sessioncaptcha=$_SESSION["Captcha"];
            $formcaptcha=$_POST["Captcha"];
            if($sessioncaptcha !== $formcaptcha)
            {
                $error8="Re-enter captcha";
                $Validate=FALSE;
            }
        if($Validate==TRUE)
        {
            $password=md5($password);
            $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results=mysqli_query($conn,$query);
            $_SESSION['username']=$username;
            if(mysqli_num_rows($results) == 1)
            {
                
                header("Location:adlogindetails.php?n=".$_SESSION['username']);
            }
            else{
               
                $error1="Username or password is wrong * ";
                
            }
        }
     }
     
        

   
?>
<div class="container">

        <div class="box">
        <form method="POST"class="form"action="AdminLogin.php">
          Username:<input type="text" name="username" >
          <span class="error">*<?php echo $error1;?></span>
          <br>
          <br><br>
           Email:  <input type="text" name="email">
           <span class="error">*<?php echo $error2;?></span>
           <br><br><br>
           Password:<input type="password" name="password">
           <span class="error">*<?php echo $error3;?></span>
           <br><br>
           <span style="margin:5px; position:relative;left:120px;top:2px;"><img src='Captcha.php'></span><br><br>
           Captcha:<input type="text" name="Captcha"><span class="error">*<?php echo $error7;?></span><br><br>
            <span class="error"><?php echo $error8;?>
            <button type="submit" class=btn name="login_user">Login</button>
            <span class="error4"><?php echo $error4;?></span>
            

        </form>
        </div>
        <br><br><br>
        <p>
           New user:<a href="signup.php">Click here to sign up</a>
        </p>
    </div>
</body>
</html>