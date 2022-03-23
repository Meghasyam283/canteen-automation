<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="Feedback.css">

<body>
    <?php
    session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $email1=$_POST["email"];$name=$_POST["name"];$rating=$_POST["emoji"];$comment=$_POST["comment"];$valid=TRUE;
            if(empty($email1))
            {
                $valid=FALSE;
            }
            else{
                $email=htmlentities($_POST["email"]);
            }
            if(empty($name))
            {
                $valid=FALSE;
            }
            else{
                $name=htmlentities($_POST["name"]);
            }
            if(empty($comment))
            {
                $valid=FALSE;
            }
            else{
                $comment=htmlentities($_POST["comment"]);
            }
            if(empty($rating))
            {
                $valid=FALSE;
            }
            else{
                $rating=htmlentities($_POST["emoji"]);
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
                $sql = "INSERT INTO `feedback` (`email`, `name`, `comments`,`rating`,`date`)
                VALUES ('$email1', '$name', '$comment','$rating',current_timestamp())";
        
                $result = mysqli_query($conn, $sql);
         
                if($result){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong style="position:absolute;text-align:center;top:5px;font-size:25px;left:500px;">Thank you!Your Feedback has been submitted successfully!</strong>
                  <button type="button"style="position:absolute;top:8px;left:1150px;font-size:15px;border:2px solid red;" class="close" data-dismiss="alert" aria-label="Close" onclick="fun()">
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
        
              }
            }
        }
    
    
    
    ?>
    <div class="container">
        <form method="POST" action="FeedbackForm.php">
            <div class="form">
                <h4>Feedback</h4>
                <div class="user">
                    <input type="email" name="email"required placeholder="Enter your Email"> <br><br>
                </div>
                <div class="username">
                    <input type="text"  name="name"required placeholder="Enter your Name">
                </div><br><br>
                <div class="comment">
                    <h2 style="padding:10px;">Comments</h2>
                </div>

                <textarea name="comment" required></textarea><br><br><br><br>
                <div class="rating">
                    <input type="radio" name="emoji" value="satisfactory" id="emoji1" checked>
                    <label for="emoji1">
                         <img src="Satisfactory.png">
                         <h4>Satisfactory </h4>
                     </label>

                    <input type="radio" name="emoji" value="Happy" id="emoji2" checked>
                    <label for="emoji2">
                         <img src="happy.png">
                         <h4>Happy </h4>
                     </label>

                    <input type="radio" name="emoji" value="Good" id="emoji3" checked>
                    <label for="emoji3">
                         <img src="Good.png">
                         <h4>Good </h4>
                     </label>

                    <input type="radio" name="emoji" value="NotGood" id="emoji4" checked>
                    <label for="emoji4">
                         <img src="NotGood.png">
                         <h4>Not Good </h4>
                     </label>

                    <input type="radio" name="emoji" value="Excellent" id="emoji5" checked>
                    <label for="emoji5">
                         <img src="Excellent.png" title="">
                         <h4>Excellent </h4>
                     </label>
                </div>
                <br><br>
                <div class="sub">
                    <input type="submit" value="submit">
                </div>
            </div>
        </form>
    </div>
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