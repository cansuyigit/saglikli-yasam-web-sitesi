<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Sağlıklı Yaşam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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

        /* col sınıfı uygulanmış HTML komutlarını seç*/
        [class*="col"]{
            float: left;
            padding: 2px;
            border: 1px ;
        }
        .row::after{
            content: " ";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <header id="menu2">
        <div id="row1" class="row">
            <div id="logo2" class="col-3">
                <div id="logo">SAĞLIKLI YAŞAM</div>
            </div>
            <div id="menu" class="col-9">
                <nav>
                    <a href="index.php"><img id="icon" src="">Anasayfa</a> 
                    <a href="diyet.php"><img id="icon" src="">Diyet Planları</a>
                    <a href="egzersiz.php"><img id="icon" src="">Egzersiz Takipleri</a>
                    <a href="iletisim.php"><img id="icon" src="">İletişim</a>
                    <a href="panelgiris.php"><img id="icon" src="">Giriş Yap</a>
                    <a href="uyeol.php"><img id="icon" src="">Üye Ol</a>
                </nav>
            </div>
        </div>
    </header>
        <div id="row2" class="row">
            <div class="col-12">
                <section id="anasayfa">
                    <div id="black">
                    </div>
                    <h1 id="h1yazi">HOŞGELDİNİZ</h1>
                    <div class="icerik">
                        <h2>Sağlık, yaşamın en değerli rengidir!</h2>
                        <hr width="300" align="left">
                    </div>
                </section>
            </div>
        </div>
    
        <div id="row3" class="row">
            <div class="col-12">
                <swiper-container class="mySwiper" navigation="true" pagination="true" keyboard="true" mousewheel="true"
                    css-mode="true">
                    <swiper-slide><img src="resimler/diyet2.jpg" alt="image1"></swiper-slide>
                    <swiper-slide><img src="resimler/pazar.jpg" alt="image2"></swiper-slide>
                    <swiper-slide><img src="resimler/meyve2.jpg" alt="image3"></swiper-slide>
                    <swiper-slide><img src="resimler/cilek.jpg" alt="image4"></swiper-slide>
                    <swiper-slide><img src="resimler/egzersiz.jpg" alt="image5"></swiper-slide>
                    <swiper-slide><img src="resimler/egzersiz2.jpg" alt="image6"></swiper-slide>
                    </swiper-container>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
            </div>
        </div>
        <section id="yazi">
        <div id="row4" class="row">
            <div class="col-12">  
                <div class="container1">
                    <h3 id="baslik">Sağlıklı Yaşam Nedir?</h3><br>
                    <hr>
                    <p>
                        Sağlıklı yaşam, bedensel, zihinsel ve sosyal yönden iyi bir durumda olmayı ifade eder.
                        Dengeli beslenme, düzenli egzersiz yapma, stresten uzak durma, yeterli uyku alarak bedensel
                        sağlığını korumak; aynı zamanda sosyal ilişkileri güçlendirmek, ruh sağlığını korumak da sağlıklı
                        yaşamın bir parçasıdır.<br>
                    </p>
                    <p><br>
                        Sağlıklı bir yaşam sürdürmek için şunlara dikkat etmek önemlidir:
                    </p><br>
                    <ul>
                        <li>Dengeli beslenme: Bol miktarda sebze, meyve, protein, kompleks karbonhidrat ve sağlıklı yağ tüketmek</li>
                        <li>Düzenli egzersiz: Haftada en az 150 dakika orta şiddetli egzersiz veya 75 dakika yoğun egzersiz yapmak</li>
                        <li>Stresten kaçınma: Stresle başa çıkma yöntemleri geliştirmek, dinlenmeye ve rahatlamaya zaman ayırmak</li>
                        <li>Yeterli uyku: Her gece 7-9 saat arasında uyumak</li>
                        <li>Doktor kontrolleri: Periyodik sağlık kontrollerine gitmek ve sağlık durumunu düzenli olarak takip etmek</li>
                        <li>Zararlı alışkanlıklardan uzak durma: Sigara ve aşırı alkol tüketiminden kaçınmak</li>
                    </ul><br>
                    <hr>
                    <h3 id="baslik">Sağlıklı Yaşam: Diyet ve Egzersiz</h3><br>
                    <!--<img id="diyet2" src="resimler/diyet2.jpg" alt="">
                    <img id="salata" src="resimler/salata.jpg" alt="">--><br>
                    <h4>Sağlıklı Beslenme ve Diyet</h4><br>
                    <ul>
                        <li>Dengeli Beslenme Önemi: Sağlıklı bir yaşam için dengeli beslenme alışkanlıklarının benimsenmesi, vücut fonksiyonlarının düzenli çalışmasını sağlar.</li>
                        <li>Taze ve Doğal Besinler: Taze sebze, meyve, tam tahıllar ve protein kaynakları içeren bir diyet, vücudun ihtiyaç duyduğu besin öğelerini karşılar.</li>
                        <li>Kalori Kontrolü: Dengeli beslenme, kalori alımının kontrol altında tutulmasını sağlayarak kilo yönetimine yardımcı olur.</li>
                    </ul><br>
                    <h4>Beslenme ve Enerji Dengesi</h4><br>
                    <ul>
                        <li>Enerji Dengesi: Beslenme alışkanlıkları, vücudun enerji ihtiyacını karşılamak ve enerji dengesini korumak için önemlidir.</li>
                        <li>Makro ve Mikro Besinler: Protein, karbonhidrat, yağ, vitaminler ve minerallerin dengeli alınması, vücudun sağlıklı fonksiyonlarını sürdürmesine yardımcı olur.</li>
                        <li>Su Tüketimi: Yeterli su içmek, vücuttaki metabolik süreçlerin düzgün çalışmasını sağlar ve sağlıklı bir yaşam için önemlidir.</li>
                    </ul><br>
                    <h4>Diyeti Destekleyen Egzersizler</h4><br>
                    <ul>
                        <li>Kardiyovasküler Egzersizler: Kardiyovasküler egzersizler, kalori yakımını artırarak diyetle birlikte kilo verme sürecini hızlandırabilir.</li>
                        <li>Düzenli Egzersiz Alışkanlığı: Egzersiz, metabolizmayı hızlandırabilir ve vücut kompozisyonunun olumlu yönde değişmesine yardımcı olabilir.</li>
                        <li>Egzersiz Stratejiler: Egzersiz alışkanlıklarının oluşturulması, kilo yönetimi ve sağlıklı yaşam için faydalı olabilir.</li>
                    </ul><br>
                    <hr>
                    <h3 id="baslik">Egzersizin Rolü ve Etkileri</h3><br>
                    <!--<img id="egzersiz2" src="resimler/egzersiz2.jpg" alt="">
                    <img id="egzersiz" src="resimler/egzersiz.jpg" alt="">--><br>
                    <h4>Fiziksel Aktivitenin Önemi</h4><br>
                    <ul>
                        <li>Sağlık Yararları: Düzenli fiziksel aktivite, kalp sağlığını destekler, stresi azaltır ve genel sağlık durumunu olumlu yönde etkiler.</li>
                        <li>Kas Kuvveti ve Esneklik: Egzersiz, kas kuvvetini artırabilir, vücut esnekliğini sağlayabilir ve sakatlanma riskini azaltabilir.</li>
                        <li>Fiziksel ve Zihinsel İyi Olma Hali: Egzersiz yapmak, endorfin salgılanmasını artırarak ruh halini iyileştirebilir ve zihinsel sağlığı destekleyebilir.</li>
                    </ul><br>
                    <h4>Egzersiz Programları ve Çeşitleri</h4><br>
                    <ul>
                        <li>Kardiyovasküler Egzersizler: Yürüyüş, koşu, bisiklet sürme gibi kardiyovasküler egzersizler, kalp sağlığını destekler ve dayanıklılığı artırır.</li>
                        <li>Kuvvet ve Direnç Egzersizleri: Ağırlık kaldırma, direnç bantlarıyla çalışma gibi egzersizler, kas kuvvetini artırır ve kemik sağlığını destekler.</li>
                        <li>Esneklik ve Denge Egzersizleri: Yoga, pilates gibi egzersizler, esnekliği artırır, dengeyi sağlar ve sakatlanma riskini azaltır.</li>
                    </ul><br>
                    <h4>Egzersizin Motivasyonu</h4><br>
                    <ul>
                        <li>Kişisel Hedefler: Egzersiz programları oluştururken kişisel hedefler belirlemek, motivasyonu artırabilir ve düzenli egzersiz alışkanlığı oluşturabilir.</li>
                        <li>Egzersiz Arkadaşlığ: Egzersiz yaparken bir arkadaşla beraber olmak, motivasyonu artırabilir ve egzersiz sürecini daha keyifli hale getirebilir.</li>
                        <li>Değişen Egzersiz Rutinleri: Egzersiz programlarında çeşitlilik sağlamak, motivasyonu yüksek tutabilir ve sıkılmayı engelleyebilir.</li>
                    </ul><br>
                    <h4>Egzersizin Günlük Hayata Entegrasyonu</h4><br>
                    <ul>
                        <li>Zaman Yönetimi: Egzersiz için düzenli zaman ayırmak, günlük rutin içinde egzersizi entegre etmeyi kolaylaştırabilir.</li>
                        <li>Evde Egzersiz Seçenekleri: Yoğun iş temposu olanlar için evde yapılabilecek egzersiz seçenekleri, düzenli egzersiz alışkanlığını destekleyebilir.</li>
                        <li>Egzersiz ve İş Performansı: Düzenli egzersiz, iş performansını artırabilir, stresle başa çıkmayı kolaylaştırabilir ve zihinsel odaklanmayı destekleyebilir.</li>
                    </ul>
                </div>
            </section>
            </div>
        </div>
        <div id="row5" class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <footer>
                    <div id="container2">
                        <div class="social-icons">
                            <!-- Sosyal medya ikonları -->
                                <a href="https://github.com/cansuyigit" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/cansu-yi%C4%9Fit-198453259/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/cansu.yigit.cy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                                <!-- Daha fazla sosyal medya ikonu ekleyebilirsiniz -->
                            </div>
                                <p id="footeryazi">&copy; 2024 Tüm hakları saklıdır.</p>
                    </div>
                </footer>
            </div>
            <div class="col-4"></div>
        </div>                     
</body>
</html>

<?php
    include("baglanti.php");
?>