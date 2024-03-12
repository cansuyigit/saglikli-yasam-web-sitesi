<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        /* kutu genşlikleri */
        .col-1{width: 8.33%;}
        .col-2{width: 16.66%;}
        .col-3{width: 25%;}
        .col-4{width: 33.33%;}
        .col-5{width: 41.66%;}
        .col-6{width: 50%;}
        .col-7{width: 58.33%;}
        .col-8{width: 66.66;}
        .col-9{width: 75%;}
        .col-10{width: 83.33%;}
        .col-11{width: 91.66%;}
        .col-12{width: 100%;}

        .row::after{
            content: " ";
            clear: both;
            display: table;
        }
        [class*="col"] {
        float: left;
        padding: 2px;
        border: 1px solid white;/* Düzeltme: border tanımlandı */
        }
        #iletisim{
            background: url(resimler/iletisimsebze.jpg);
            background-size: cover;
            padding: 50px;
            height: auto;
            text-align: center;
        }
        @media screen and (max-width: 768px){
        [class*="col-"]{width: 100%;}
        #iletisim{
        background-image: url(resimler/iletisimsebze.jpg);
        background-size: cover;
        background-position: center;
        padding: 50px;
        height: auto;
        text-align: center;
        }
        .container{
            width: 100%;
        }
        }
        #h3iletisim{
            color: white;
            font-size: 30px;
            text-align: center;
        }
        #iletisimopak{
            background: rgba(255, 255, 255, 0.2);
            padding: 30px 20px;
            border-radius: 5px;
            margin-bottom: 50px;
            height: 500px;
        }
        #formgroup{
            width: 700px;
            float: left;
            height: 500px;
            text-align: left;  
            margin: auto;          
        }
        #solform{
            width: 47%;
            float: left;
        }
        #sagform{
            width: 47%;
            float: right;
        }
        .form-control{
            width: 100%;
            padding: 10px;
            font-size: 15px;
            line-height: 1.5;
            color: #000;
            background-color: white;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        textarea{
            font-family: Arial, Helvetica, sans-serif;
        }
        input[type="submit"]{
            cursor: pointer;
            background-color: #025811;
            letter-spacing: 1px;
            padding: 10px 30px;
            color: white;
            border: 2px solid white;
            border-radius: 5px;
            margin-left: 10px;
            margin-top: 10px;
        }
        #adres{
            width: 400px;
            float: right;
            padding: 30px;
            height: 500px;
            text-align: center;
            margin-top: 50px;
        }
        #adresbaslik{
            font-size: 30px;
            color: white;
        }
        .adresp{
            color: #000;
            font-size: 15px;
            letter-spacing: 1.5px;
        }
        #copyright{
            color: white;
            font-size: 20px;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-align: center;
            float: right;
        }
    </style>
</head>
<body>
    <div id="row1" class="row">
        <div id="iletisim" class="col-12">
            <div class="container">
                <h3 id="h3iletisim">İletişim</h3>
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="ad" placeholder="Ad" required class="form-control">
                            <input type="text" name="email" placeholder="Email Adresiniz" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="text" name="soyad" placeholder="Soyad" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="30" placeholder="Mesajınızı Yazınız..." rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
    
                    <div id="adres">
                       <h4 id="adresbaslik">Adres: </h4> 
                       <p class="adresp">Osmaniye Korkut Ata Üniversitesi</p>
                       <p class="adresp">Mühendislik Fakültesi</p>
                       <p class="adresp">Bilgisayar Mühendisliği</p>
                    </div>
                </div>
                <footer>
                    <div id="copyright">2024 Tüm Hakları Saklıdır.</div>
                </footer>
        </div>
        
     </div>
</body>
</html>

<?php

include("baglanti.php");

if(isset($_POST["ad"], $_POST["soyad"], $_POST["email"], $_POST["konu"], $_POST["mesaj"]))
{
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim (ad, soyad, email, konu, mesaj) VALUES
    ('$ad', '$soyad', '$email', '$konu', '$mesaj')";

    if($baglan->query($ekle) === TRUE) 
    {
        echo "<script>alert('Mesajınız başarıyla gönderilmiştir.')</script>";
    }
    else 
    {
        // Eğer sorguda bir hata varsa, bu blok çalışacak ve hatayı ekrana yazdıracak
        echo "Sorgu hatası: " . $baglan->error;
    }
}
?>
