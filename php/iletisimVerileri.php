<?php
if (isset($_POST['submit']) || isset($_POST['ad'], $_POST['soyad'], $_POST['email'], $_POST['dogumtarihi'], $_POST['ogrenimseviyesi'], $_POST['meslek'], $_POST['cinsiyet'], $_POST["mesaj"])) {
    echo "<table style='border:2px solid black; border-collapse: collapse;width:100%;margin:5px; text-align:center'>";
    echo "<tr><th style='border:2px solid black;border-collapse: collapse;' >Ad-Soyad</th><th style='border:2px solid black; border-collapse: collapse;'>Email</th><th style='border:2px solid black; border-collapse: collapse;'>Cinsiyet</th><th style='border:2px solid black; border-collapse: collapse;'>Doğum Tarihi</th><th style='border:2px solid black; border-collapse: collapse;'>Meslek</th><th style='border:2px solid black; border-collapse: collapse;'>Öğrenim Durumu</th><th>Mesaj</th></tr>";
    echo "<tr><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['ad'] . " " . $_POST['soyad'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['email'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['cinsiyet'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['dogumtarihi'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['meslek'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['ogrenimseviyesi'] . "</td><td style='border:2px solid black; border-collapse: collapse;'>" . $_POST['mesaj'] . "</td></tr>";
    echo "</table>";
} else {
    echo "Tabloyu kontrol edin!";
}
?>
