<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Üye Ol</title>
  <style>
    /* Bu kısım önceki CSS kodlarıyla aynıdır. */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('resimler/uyeol.jpg');
      background-size: cover;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      box-sizing: border-box;
    }

    button {
      background-color: #303604;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>

  <form id="uyeOlForm">
    <label for="ad">Adınız:</label>
    <input type="text" id="ad" name="ad" required>

    <label for="soyad">Soyadınız:</label>
    <input type="text" id="soyad" name="soyad" required>

    <label for="email">E-posta Adresiniz:</label>
    <input type="email" id="email" name="email" required>

    <label for="sifre">Şifreniz:</label>
    <input type="password" id="sifre" name="sifre" required>

    <button type="submit" onclick="validateEmail()">Üye Ol</button>
  </form>

  <script>
    function validateEmail() {
      var emailInput = document.getElementById('email');
      var email = emailInput.value;

      // Basit bir e-posta doğrulama regex'i
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailRegex.test(email)) {
        alert('Geçerli bir e-posta adresi giriniz.');
        emailInput.focus();
        return false;
      }

      // Eğer JavaScript tarafındaki doğrulama başarılıysa form gönderilir
      document.getElementById('uyeOlForm').submit();
    }
  </script>

</body>
</html>