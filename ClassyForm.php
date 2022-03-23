<html>
<head>
    <title>My Form</title>
</head>
<style>
    body,html
        {
                
            background-size: 400px 500px;
            background-image: url("SignUp.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
#error
{
    color:red;
    margin-left:15px;
    width:100px;
}
h2
{
    margin-left:130px;
}
#star
{
    margin-left:7px;
    color:white;

}
a
               {
                
                color:rgb(91, 184, 238);
               }
.btn

{
    background:transparent;
}

.Form
                {
                    color:white;
                    top:65;
                    left:100;
                    background-color:rgb(24, 21, 21);
                    height:750px;
                    border:3px solid white;
                    width:450px;
                    border-radius: 20px;
                    font-size: 20;
                    position:fixed;
                    margin-left:3px;
                    opacity: 0.7;
                    
                }

                .Form input[type="text"], input[type="password"] 
                {
                    width:80%;
                    border:none;
                    border-bottom: 1px solid #ffffff;
                    outline:none;
                    background:transparent;
                    font-size: 20px;
                    height:40px;
                    color:white;
                    margin: 15px;
                    margin-left: 10x;
                }
                .Form input[type="submit"]
                {
                    background:transparent;
                    color:white;
                    font-size:20;
                    margin-left:10px;
                    margin-top:-28px;
                }
</style>
<body>

<?php
    
include 'Connections.php';
    $NameErr=$EmailErr=$MobileErr=$PwdErr=$CpwdErr=$TotError=$name=$email=$mobile=$Cpwd=$Pwd='';
    $validate=TRUE;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if ($_POST['name']=='') 
        {
            $Nameerr = "Name is required";
            $validate=FALSE;
        }
        
        else
        {
            $name=$_POST["name"];
           
        } 
        if ($_POST['email']=='') 
            {
                $Emailerr = "E-mail is required";
                $validate=FALSE;
            }
        else
        {
            $email=$_POST["email"];
            
        }
        if ($_POST['mobile']=='') 
        {
            $Mobileerr = "Mobile Number is required";
            $validate=FALSE;
        }
        else
        {
            $mobile=$_POST["mobile"];
        }
        if ($_POST['pwd']=='') 
        {
            $PwdErr = "Password is required";
            $validate=FALSE;
        }
        else
        {
            $Pwd=$_POST["pwd"];
        }
        if ($_POST['cpwd']==''&& $_POST['cpwd']!=$Pwd) 
        {
            $CpwdErr = " Enter crt password";
            $validate=FALSE;
        }
        else
        {
            $Cpwd=$_POST["cpwd"];
        }
 
  //------------------------Insertion -----------------------------------------
  if($validate==TRUE)
  {
  $sql="SELECT * FROM Form WHERE UserName='$name' or Email_Id='$email'";
  $sql1="SELECT * FROM Form WHERE UserName='$name' and Email_Id='$email'";
  $res=mysqli_query($conn,$sql);
  $res1=mysqli_query($conn,$sql1);
  $ass=mysqli_fetch_assoc($res);
  $ass1=mysqli_fetch_assoc($res1);
  // Display the rows returned by the sql query
if($ass)
{
    if($ass['Email_Id']==$email && $ass['UserName']!=$name)
    {
        $EmailErr=" Email is already taken";
        $validate=FALSE;
    }
    if($ass['UserName']==$name && $ass['Email_Id']!=$email)
    {
        $NameErr=" User already Exists...";
        $validate=FALSE;
    }
    
}
if(!$ass)
{
    $Pwd=md5($Pwd);
    $a= "INSERT INTO Form (UserName,Email_Id,MobileNumber,Password,ConfirmPassword)
    VALUES ('$name','$email','$mobile','$Pwd','$Cpwd');";
   $result=mysqli_query($conn,$a);
   
   
     
    header("Location:new.php");

}  
if($ass1)
{
    if($ass1['Email_Id']==$email && $ass1['UserName']==$name)
    {
        $TotError="Already a member please ";
    
    }
}
}
}


?>

<div class="Form">
<form method="POST" action="">
        <h2 > Sign Up</h2>
        <span id="star";for="abc">Name</span>:<input type="text" id="abc" name="name" value="<?php echo $name;?>" placeholder="Required Field *"><span id='error'><?php echo $NameErr; ?></span>
        <br><br>
        <span id="star";>Email</span>:<input type="text" name="email" value="<?php echo $email;?>" placeholder="Required Field *"><span id='error'><?php echo $EmailErr;?></span>
        <br><br>
        <span id="star";>Mobile</span>:<input type="text" name="mobile" value="<?php echo $mobile;?>" placeholder="Required Field *"><span id='error'><?php echo $MobileErr;?></span>
        <br><br>
        <span id="star";>Password</span>:<input type="password" name="pwd" value="<?php echo $Pwd;?>" placeholder="Required Field *"><span id='error'><?php echo $PwdErr;?></span>
        <br><br>
        <span id="star";>Confirm Password</span>:<input type="text" name="cpwd" value="<?php echo $Cpwd;?>" placeholder="Required Field *"><span id='error'><?php echo $CpwdErr;?></span>
        <br><br>
        <input class="sub" type="submit" value=Signup ><span id='error'><?php echo $TotError;?></span>
        <span> <a href="ClassyLogin.php" target="_blank">Login</a></span>
        <br><br>       
        <br><br>
    </form>
    <div class="home">
            <p style="color:white;font-size:46px;padding-top:-55px;padding-left:570px;">Canteen Automation</p>
        </div>
</div>

<script>
function fun()
{
  let btn = document.getElementsByClassName('show')[0];
  btn.style.display='none';
}
</script>
   
</body>
</html>