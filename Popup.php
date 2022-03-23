<!-- <script> 
  function ShowPopup() 
{
  var x = document.getElementById("popup");
  if (x.style.display === "none")
  {
    x.style.display = "block";
  } 
  else 
  {
    
    x.style.display = "none";
    
  }
  document.addEventListener('mouseup', function(e) {
  var container = document.getElementById('popup');
  if (!popup.contains(e.target)) {
    popup.style.display = 'none';
  }
});
}
var a=document.getElementById("popup");
</script> -->


<!-- <div  id="popup" class="popupq">
      <h3 STYLE="padding-left:100PX;padding-top:20px;">HYDERABAD BIRYANI</h3><br>
      <div class="pic">
        <div class="base"></div>
      </div>
      <h5 style=" margin: 10px;margin-left: 200x;margin-top:20px;">Price: 200/-</h5>
      <input type=text style="background-decoration:none" disabled>FoodCode: HYDBIR
      <h5 style=" margin: 10px;margin-left: 200x;">Quantity: 1</h5>
      <h5 style=" margin: 10px;margin-left: 200x;">Offers: 20% off for students</h5>
      <input type="button" onClick="location.href='canteen(Addcart).php'" name="HyderabadBiryani" style=" height:46px;width:48px;background-image:url('Addcart.png');">
      <input type="button" name="HyderabadBiryani" style=" height:45px;width:53px;background-image:url('fav.jpg');">
     
	  
    </div> -->

    .Box input[type=button]
{
  padding-top:120px;
  background:transparent;
}
.Boxes 
{
  position:absolute;
  height:1800px;
  width:1500px;
}


#popup
{
  background-repeat: no-repeat;
  background-size:cover;
  border-radius:20px;
  position: absolute;
  top:200px;
  left:520px;
  display:none;
  background-color:WHITE;
  height:450px;
  width:500px;
}
.star
{
  background-image: url('star.jpg');
  background-color:black;
  position:fixed;
  height:50px;
  width:60px;
  /* top:120px;
  left:30px; */
}
.pic
{
background-color:black;
background-image: url("sam6.jpg");
background-repeat: no-repeat;
background-size:  cover;
height:160px;
width:220px;
margin: 15px;
/* margin-left: 200x;   
margin-top: 200x;    */
border-bottom-left-radius: 50px 20px;
border-bottom-right-radius: 50px 20px;
}
.base
{
height:30px;
width: 205px;
background-color:black;
background-image: url("Star3.JPG");
background-repeat: no-repeat;
background-size: cover;
border-radius:25px;
position: absolute;
padding-right:65px;
margin-left: 05px;
margin-top:145px ;
}

.popupq input[type="button"]
{

background-repeat: no-repeat;
border-style:none;
background-size: cover;
margin:10px;


}