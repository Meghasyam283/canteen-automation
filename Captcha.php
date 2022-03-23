<?php
    session_start();
    $str_rand=md5(rand());
    $str= substr($str_rand,0,4);
    $_SESSION['Captcha']= $str;
    $newImage = imagecreate(80,35);
    imagecolorallocate($newImage,159,170,170);
    $col= imagecolorallocate($newImage,0,0,0);
    imagestring($newImage,20,20,10,$str,$col);
    header('content:image/jpeg');
    imagejpeg($newImage);
?>
