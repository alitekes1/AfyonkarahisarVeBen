<?php
$correctpassword = "b221210094";
$correctusername = "b221210094@sakarya.edu.tr";

if (isset($_POST['submit'])) {
  $username = $_POST['email'];
  $password = $_POST['psw'];
    if ($username == $correctusername && $password == $correctpassword) {
        echo 
        "<script> alert('Hoşgeldin Ali :)');window.location.href = 'http://alitekes.epizy.com';
        
        document.getElementById('girisyap').innerHTML = 'Ali';
                
        </script>";     
        //header("Location: http://alitekes.epizy.com");
        ////exit();
    } else {
        echo "<script> alert('Kullanıcı adı veya şifre hatalı. Lutfen tekrar deneyiniz!');window.location.href = 'http://alitekes.epizy.com/loginPage.html';</script>";     
    }
}
?>