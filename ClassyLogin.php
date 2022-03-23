<html>
<head>
    <title>My Form</title>
</head>
<body>
<style>
#error
{
    color:red;
    position:fixed;
    margin-left:40px;
    margin-top:20px;
    background-color:rgb(159,170,170);
    }
body,html
    {
        
        background-image: url("LoginCanteen.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-size: 1550px;

     
    }
    .home
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
    .FormLogin
    {
        top:160;
        left:630;
        color:white;
        background-color:rgb(62, 63, 65);
        height:490px;
        width:300px;
        border-radius: 20px;
        font-size: 20;
        position:fixed;
        opacity: 0.7;  
        margin: 10px;
        margin-left: 200x;           
                    
    }
    .FormLogin input[type="text"], input[type="password"]
    {
        width:80%;
        border:none;
        border-bottom: 1px solid #ffffff;
        outline:none;
        background:transparent;
        font-size: 20px;
        height:40px;
        color:white;
        margin: 10px;
        margin-left: 200x;

    }
    h2
    {
        margin-left:100px;
    }
    #star
    {
        margin-left:7px;
        color:white;

    }
    .FormLogin input[type="submit"]
    {
        background:transparent;
        color:white;
        font-size:20;
        border-radius:4px;
        margin-left:10px;
        margin-top:-5px;
    }
    a
    {
        text-decoration:none;
        color:rgb(118, 204, 238);
    }
    #captcha
    {
        margin-left:170px;
        margin-top:-19px;
        position:relative;
        top:70px;
        /* style="margin:5px; position:relative;left:120px;top:2px;" */
        
    }

</style>

<?php
session_start();

include 'Connections.php';
$name=$pwd=$InpCaptcha=$NameErr=$PwdErr=$CaptchaErr='';
$validate=TRUE;

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if ($_POST['name']=='') 
        {
            $NameErr = "Name is required";
            $validate=FALSE;
        }
        
        else
        {
            $name=$_POST["name"];
           
        } 
        if($_POST['pwd']=='')
        {
            $PwdErr="Password is required";
            $validate=FALSE;
        }
        else
        {
            $pwd=$_POST["pwd"];
        }
        
    if(empty($captcha))
    {
        $CaptchaErr="Enter Captcha";
        $validate=FALSE;
    }
    $sessioncaptcha=$_SESSION["Captcha"];
    $formcaptcha=$_POST["captcha"];
    if($sessioncaptcha !== $formcaptcha)
    {
        $CaptchaErr="Re-enter captcha";
        $validate=FALSE;
    }
    else
    {
        $validate=TRUE;
    }
        
        //------------------CaptchaCode----------------------
        
       
    
  //-------------------------------------------------
        if($validate==TRUE)
        {
     
          $sql= "SELECT * FROM Form WHERE UserName='$name'";
          $res=mysqli_query($conn,$sql);
          $ass=mysqli_fetch_assoc($res);
        if($ass)
        {
            if($name==$ass['UserName'] && md5($pwd)==$ass['Password'])
            {
              session_start();
              $_SESSION['name'] = $name;
              header("Location:new12.php");
            }
            else
             {
                $NameErr="Invalid username or password";
            }
        }
        if(!$ass)
        {
            $NameErr="Not a member";
        }
    }
}
//--------------------------Cookie------------------------------------
$_SESSION['username']="$name";
$_SESSION['ct']=time();

?>


<!-- //-------------------------------------------------------------------------------- -->


<div class="FormLogin">
<form onsubmit="return validateForm()"  method="POST" action="">
        <h2 > Login</h2>
        <span id="star";>Name</span>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="Required Field *"><span id='error'><?php echo $NameErr; ?></span>
        <br><br>
        <span id="star";>Password</span>:<input type="text" name="pwd" value="<?php echo $pwd;?>" placeholder="Required Field *"><span id='error'><?php echo $PwdErr;?></span>
     
        <span id="captcha" ><img src='Captcha.php'></span>
        <span id="star";>Captcha</span>:<input  type="text" name="captcha" value="<?php echo $InpCaptcha;?>" placeholder="Required Field *"><span id='error'><?php echo $CaptchaErr;?></span>
   
        <span id='error'><?php echo $CaptchaErr;?></span>
    <br><br>
        <input type="submit" value=Login >
        <p style="margin-left:20px; margin-top:15px;">
            SignUp If ur a new user<a href="ClassyForm.php"> Signup</a>
        </p>
        <br><br>
    </form>
</div>
        <!-- <div class="home">
            <p style="color:white;font-size:46px;padding-top:-100px;padding-left:570px;">Canteen Automation</p>
        </div> -->
</body>
</html>