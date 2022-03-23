<!-- <?php
$server="127.0.0.1";
$username="Syam";
$password="0414";
$database="canteen_db";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("Sorry we are unable to connect".mysqli_connect_error());
}
else
{
    echo " Successfully Connected<br>";
}

//-----------------------------------------------
$sql = "SELECT * FROM `caanteen`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
      //  echo "<b>Name:</b>".$row['UserName'] .  ".<br><b> Email-Id</b> ". $row['Email_Id'] ."<br><b>Mobile Nummber:</b> ". $row['MobileNumber'];
        echo "<br><hr>";
       
    }
}
//-------------------------------------------------------
// Usage of WHERE Clause to Update Data
$sql = "UPDATE caanteen SET Email_Id='pavan.18mis7032@vitap.ac.in' WHERE MobileNumber='123456'";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";
if($result){
    if($aff>0)echo "We updated the record successfully<hr>";
}
else{
    echo "We could not update the record successfully<hr>";
}
//-----------------------------------------------------------------
echo "<u><b>UPDATED RECORD</b></u><br>";
$sql = "SELECT * FROM caanteen WHERE MobileNumber='123456'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
// echo $num . " records found in the DataBase<br>";

if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo "<b>Name:</b>".$row['UserName'] .  ".<br><b> Email-Id</b> ". $row['Email_Id'] ."<br><b>Mobile Nummber:</b> ". $row['MobileNumber'];
        echo "<br><hr>";
    }
}
?> -->
<?php
session_start();
$username=$_SESSION['username'];
if(($_SESSION['username']!=''))
{
    if(time()-$_SESSION['ct'] <60)
    {
        echo "Welcome $username";
        echo"<br>";
    }
    else
    {
        echo "You are logged out due to inactivity for 1 minute";
        
    }
}
else
{
    echo " No Session data";
}
?>