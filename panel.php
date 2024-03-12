<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Email Adresiniz</th>
    <th>Konu Başlığı</th>
    <th>Mesaj</th>
  </tr>

<?php

session_start();
if(isset($_SESSION["user"])) {
    // Oturumda "user" anahtarı tanımlı
    echo "Kullanıcı Adınız: ".$_SESSION["user"]."<br>";
    echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";
} else {
    // Oturumda "user" anahtarı tanımlı değil
    echo "<script>window.location.href='cikis.php'</script>";
}


  include("baglantı.php");
    $sec= "Select * From iletisim";
    $sonuc=$baglan->query($sec);

    if($sonuc->num_rows>0)
    {
      while($cek=$sonuc->fetch_assoc())
      {
        echo "
        <tr>
          <td>".$cek['ad']."</td>
          <td>".$cek['email']."</td>
          <td>".$cek['soyad']."</td>
          <td>".$cek['konu']."</td>
          <td>".$cek['mesaj']."</td>
        </tr>
        ";
      }
    }
    else{
      echo "Veri tabanına kayıtlı hiçbir veri bulunamamıştır.";
      }
    
?>

</table>

</body>
</html>