<?php
$correctpassword = "123";
$correctusername = "alitekes@sakarya.edu.tr";

if (isset($_POST['submit'])) {
  $username = $_POST['email'];
  $password = $_POST['psw'];
    if ($username == $correctusername && $password == $correctpassword) {
        echo "Kulllanıcı adı ve şifre doğru.Anasyfaya yönlendirilyorsunuz.";
        header("Location: http://alitekes.epizy.com/?i=1");
        //exit();
    } else {
        echo "Kullanıcı Adı veya Şifre Hatalı!";
    }
}
?>