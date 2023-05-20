<?php
$correctpassword = "b221210094";
$correctusername = "b221210094@sakarya.edu.tr";

if (isset($_POST['submit'])) {
  $username = $_POST['email'];
  $password = $_POST['psw'];
    if ($username == $correctusername && $password == $correctpassword) {
        
        echo 
        "<script> alert('Hoşgeldin Ali :)');window.location.href = 'http://alitekes.com.tr';

        document.getElementById('girisyap').innerHTML = 'Ali';

        </script>";     
    } else {

        echo "<script> alert('Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyiniz!');window.location.href = 'http://alitekes.com.tr/loginPage.html';</script>";     
    
    }
}
?>