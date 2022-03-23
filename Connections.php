<?php

$server="127.0.0.1";
$username="amrutha";
$password="Amrutha@1";
$database="canteen";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
   die("Sorry we are unable to connect".mysqli_connect_error());
}
// else
// {
//    echo " Successfully Connected<br>";
// }
//--------------------------------------------------------------------------

//-------------------------Create Table in db--------------------------------
 
//Die if connection is not successful
// if(!$conn)
// {
//    die("Sorry not able to connect  ".mysqli_connect_error());
// }
// else
// {
//   echo "Connection is successful<br>";
// }
// //-------------------------Create Table in db--------------------------------
// $sql = "CREATE TABLE form (SNO int AUTO_INCREMENT PRIMARY KEY,
//                         UserName varchar(30) NOT NULL,
//                        Email_Id varchar(30),
//                        MobileNumber BIGINT(10),
//                        Password  varchar(50) NOT NULL,
//                         ConfirmPassword varchar(30) NOT NULL
// );";
// $res=mysqli_query($conn,$sql);
// if($res)
// {
//    echo "table created";
// }
// else
// {
//    echo "Not created".mysqli_error($res);
   
// }



// $sql = "CREATE TABLE signupdata (SNO int AUTO_INCREMENT PRIMARY KEY,
// //     USERNAME varchar(10) NOT NULL ,
// //     EMAIL varchar(100),
// //     PASSWORD varchar(100),
// //     CONFIRMPASSWORD varchar(100)
// // );";
//  $result=mysqli_query($conn,$sql);
//  if ($result) {
//         echo "<br>table created";
//  }
//  else{
//         echo "table not created".mysqli_error($conn);
//  }

 ?>



 
  