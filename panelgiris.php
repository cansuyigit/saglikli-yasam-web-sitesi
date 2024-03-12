<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: url('resimler/girisyap.jpg');
      background-size: cover;
    }
    * {
      box-sizing: border-box;
    }
    .input-container {
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }
    .icon {
      padding: 10px;
      background: #05b63a;
      color: white;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
      background: rgba(255, 255, 255, 0.7); /* Arka plan rengi ve şeffaflık */
    }

    .input-field:focus {
      border: 2px solid #05b63a;
    }

    /* Set a style for the submit button */
    .btn {
      background-color: #05b63a;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
    }

    form {
      max-width: 500px;
      width: 90%;
      margin: auto;
      text-align: center;
    }

    @media (max-width: 768px) {
      form {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <form action="/panelgiris.php" method="post">
    <h2>Kullanıcı Girişi</h2>
    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="username">
    </div>
    
    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="password" placeholder="Parola" name="psw">
    </div>

    <button type="submit" class="btn">Giriş Yap</button>
  </form>

</body>
</html>
<?php
  session_start();

  if(isset($_POST["username"], $_POST["psw"]))
  {
    if($_POST["username"]=="admin" && $_POST["psw"]==12345)
    {
      $_SESSION["user"]=$_POST["username"];
      header("location:panel.php");
    }
    else
    {
      echo "<script>alert('KUllanıcı adı veya şifre yanlış')</script>";
    }
  }
?>