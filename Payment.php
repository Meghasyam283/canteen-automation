<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
*
{
    margin:0 px;
    border:0 px; 
    /* background: linear-gradient(0.25turn, #4fc3f7, #b3e5fc, #4fc3f7); */
}
a
{
    text-decoration:none;
    color:black;
}
body 
{
  height:1000px;
  width:1600px;
  background-color:#B9D9EB;
}

.modes
{
    position:absolute;
    left:370px;
    text-decoration:underline;
    font-size: 38px;
    color:black;
    top:50px;

}
    .One
    {
        height:700px;
        width:1000px;
        border: 2px solid black;
        position: absolute;
        /* background: rgb(173, 218, 206); */
        border-radius:20px;
        background-image: url("Mojitooo.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        top:200px;
        left:300px;
    }
    .Home
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
.finn
{
    position:absolute;
    margin-left:355px;
    margin-top:160px;
    width:1000px;
    height:400px;
}
.rating
{
    position: absolute;
    margin-left:300px;
    margin-top:580px;
    display: flex;
    flex-direction: row-reverse;
}
.rating input
{
    display:none;
}
.rating label img
{
   width: 50px; 
}
.rating label
{
    position: relative;
    width:0px;
    height:120px;
    cursor:pointer;
    transition:0.5s;
    filter: grayscale(1);
    text-align: center;
    opacity:0;
}
.rating:hover label
{
    width:100px;
    opacity:0.2;
}
.rating input:hover + label ,
.rating input:checked + label 
{
    opacity: 1;
    width:100px;
    filter:grayscale(0);
}
.rating label h4
{
    font-size:14px;
    font-weight: 500;
    color: black;
    white-space: nowrap;
    opacity:0;
    transform: translateY(-50px) scale(0);
    padding-top:0px;
    transition:0.5s;
    opacity:1;
}
.rating input:hover + label h4,
.rating input:checked + label h4
{
    transform: translateY(0) scale(1);
    opacity:1;
}
.Feed input[type="submit"]
{
    background-image:url("Feed.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    height:40px;
    width:100px;
    position:absolute;
    border:none;
    border-radius:5px;
    opacity:0.95;
    left:500px;
    color:white;
    font-size:17px;
    top:700px;
    left:780px;
}

</style>


<body style=" background: linear-gradient(0.25turn,  #3f87a6, #ebf8e1,#3f87a6);">
<?php
include "NavBar.php";
?>

  <div class="Home">
            <p style="color:white;font-size:46px;padding-top:-55px;padding-left:570px;">Canteen Management</p>
  </div>
  
  <div class="One">
      <div class="finn">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
       
        <!------ Include the above in your HEAD tag ---------->
        <style>
            body { margin-top:20px; }
        .panel-title {display: inline;font-weight: bold;}
        .checkbox.pull-right { margin: 0; }
        .pl-ziro { padding-left: 0px; }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Payment Details
                            </h3>
                            <div class="checkbox pull-right">
                                <label>
                                    <input type="checkbox" />
                                    Remember
                                </label>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                            <div class="form-group">
                                <label for="cardNumber">
                                    CARD NUMBER</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                        required autofocus />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth">
                                            EXPIRY DATE</label>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                        </div>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">
                                            CV CODE</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <!-- <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a> -->
                        </li>
                    </ul>
                    <br/>
                    <a href="https://paytm.com/credit-card-bill-payment" style="border:1px solid black;background-image:url('Behongo.jpg')" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
                </div>
            </div>
        </div>
        
      </div>
      <div class="modes">
          Payment Methods
      </div>
        <div class="rating">
            <input  type="radio" name="emoji" id="emoji1" checked>
            <label for="emoji1">
            <a href="https://www.americanexpress.com/en-in/account/login"><img src="American.jpg" title=""></a>
                <h4>American Express </h4>
            </label>

            <input type="radio" name="emoji" id="emoji2" checked>
            <label for="emoji2">
            <a href="https://wss.qmastercard.co.nz/wss/login"><img src="Master.png" title=""></a>
                <h4>Master </h4>
            </label>

            <input type="radio" name="emoji" id="emoji3" checked>
            <label for="emoji3">
            <a href="https://www.visa.com.au/en_au/account/login"><img src="visa.jpg" title=""></a>
                <h4>Visa </h4>
            </label>

            <input type="radio" name="emoji" id="emoji4" checked>
            <label for="emoji4">
            <a href="https://phonepe.freshdesk.com/en/support/login"><img src="PhonePe.png" title=""></a>
                <h4>Phone Pe </h4>
            </label>

            <input type="radio" onClick="https://pay.google.com/gp/w/u/0/home/paymentmethods" name="emoji" id="emoji5" checked>
            <label for="emoji5">
             <a href="https://pay.google.com/gp/w/u/0/home/paymentmethods"><img src="gpay.png" title=""></a>
                <h4>Google Pay </h4>
            </label>
      </div>
  </div>
  <div class="Feed">
  <input onClick="location.href='FeedbackForm.php'" type="submit" value="FeedBack">
  </div>
</body>
</html>