<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diyet Planı</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background-color: rgb(252, 136, 3);
            color: #fff;
            text-align: center;
            padding: 15px;
        }
        #headeryazi {
            color: #303604;
            font-family: 'Merriweather', serif;
            font-size: 40px;
        }
        .container {
            min-width: 100%;
            margin: 30px auto;
            margin-bottom: 30px;
            padding: 30px;
        }

        #anasayfa {
            padding: 40px;
            border: 1px solid white;
            border-radius: 8px;
            background-color: white;
            line-height: 2;
        }

        footer {
            background-color: #303604;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        @media screen and (max-width: 768px) {
            .container {
                margin: 30px auto;
                margin-bottom: 30px;
                padding: 30px;
                position: relative;
            }
        }
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }
        swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
        swiper-slide img {
            display: block;
            width: 100%;
        }
        a:link,
        a:visited {
            background-color: #303604;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        a:hover,
        a:active {
            background-color: rgb(252, 136, 3);
        }
        span {
            font-weight: bold;
        }
        h2 {
            color: #000000;
            font-size: 25px;
            line-height: 1.6;
            margin-top: 30px;
            margin-left: 20px;
            margin-right: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        p {
            color: #000000;
            font-size: 16px;
            line-height: 1.6;
            margin-left: 20px;
            margin-right: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        #secenekler {
            display: flex;
            flex-direction: column;
            /* Sütun düzeni, yani dikey olarak hizalanacak */
            align-items: center;
            /* İçerikleri yatayda merkezle */
        }
        #kutucuk {
            display: flex;
            justify-content: space-around;
            /* İçerikleri eşit boşluk bırakarak yatayda düzenle */
        }
        #kutucuk a {
            margin: 20px;
            padding: 10px 20px;
            /* Her bağlantının içeriği etrafında 10 piksel üst-alt, 20 piksel sol-sağ iç boşluk */
            text-decoration: none;
            border-radius: 5px;
            /* Bağlantı köşelerini yuvarla */
            transition: background-color 0.3s;
            /* Geçiş efekti */
        }
        #kutucuk a:hover {
            background-color: rgb(252, 136, 3);
            /* Fare üzerine gelindiğinde arka plan rengini değiştir */
        }
        #bmiForm {
            margin-top: 30px;
            text-align: center;
        }
        #bmiForm input {
            padding: 10px;
            margin: 5px;
        }
        #bmiSonuc {
            font-weight: bold;
            margin-top: 20px;
        }
        #bmiTavsiye {
            margin-top: 20px;
            color: #333;
        }
        h3{
            font-size: 25px;
            color: #000000;
            margin-top: 25px;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1 id="headeryazi">Diyet Planlama</h1>
    </header>

    <body>
        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
            centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0"
            coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
            <swiper-slide>
                <img src="resimler/dietplans.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans2.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans3.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans4.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans5.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans6.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans7.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans8.jpg" />
            </swiper-slide>
            <swiper-slide>
                <img src="resimler/dietplans9.jpg" />
            </swiper-slide>
        </swiper-container>
        <div class="container">
            <section id="anasayfa">
                <h2>Neden Diyet Yaparız?</h2>
                <p>Sağlıklı bir yaşam sürmek için diyet yapma ihtiyacı, vücudun ihtiyaç duyduğu besinleri düzenli ve
                    dengeli bir şekilde almayı amaçlar. Sağlıklı bir diyetin birkaç ana avantajı vardır:</p>
                <p>
                    <span>Vücut Ağırlığını Kontrol Altında Tutmak:</span> Sağlıklı bir diyet, vücut ağırlığını kontrol
                    altında tutmaya
                    yardımcı olabilir. Dengeli beslenme, enerji alımı ve harcaması arasında uyumu sağlar, böylece aşırı
                    kilo
                    alımı veya kaybı önlenir.
                </p>
                <p>
                    <span>Enerji Seviyelerini Artırmak:</span> Sağlıklı beslenme, vücudun ihtiyaç duyduğu enerjiyi
                    sağlar. Bu, günlük aktiviteleri
                    sürdürebilmek ve enerji seviyelerini yüksek tutabilmek için önemlidir.
                </p>
                <p>
                    <span>Kronik Hastalıkları Önlemek:</span> Sağlıklı beslenme, kalp hastalıkları, diyabet, obezite ve
                    diğer kronik hastalıkların riskini azaltabilir.
                    Antioksidanlar, vitaminler ve mineraller gibi besin öğeleri, hücresel sağlığı destekleyebilir ve
                    bağışıklık sistemini güçlendirebilir.
                </p>
                <p>
                    <span>Mental Sağlığı Desteklemek:</span> Beslenme, zihinsel sağlık üzerinde de etkilidir. Dengeli
                    bir diyet, odaklanmayı artırabilir, duygusal dengede kalmanıza
                    yardımcı olabilir ve bilişsel fonksiyonları destekleyebilir.
                </p>
                <p>
                    <span>Kemik ve Kas Sağlığını Güçlendirmek:</span> Yeterli kalsiyum, D vitamini ve protein alımı,
                    kemik ve kas sağlığını korumak için önemlidir. Bu öğelerin yeterince alınması,
                    kemik yoğunluğunu artırabilir ve kas fonksiyonunu destekleyebilir.
                </p>
                <p>
                    <span>Bağışıklık Sistemini Güçlendirmek:</span> Sağlıklı beslenme, vücudun bağışıklık sistemini
                    güçlendirebilir. Vitamin ve mineral içeriği yüksek gıdalar, enfeksiyonlara karşı direnci
                    artırabilir.
                </p>
                <p>
                    <span>Daha Kaliteli Bir Yaşam Sürmek:</span> Sağlıklı bir diyet, genel yaşam kalitesini artırabilir.
                    Düzenli ve dengeli beslenme, daha iyi bir fiziksel ve zihinsel sağlık durumuyla birlikte yaşam
                    kalitesini yükseltebilir.
                </p>
            </section>
            <section id="secenekler">
                <div id="bmiForm">
                    <h3>Vücut Kitle İndeksi Hesapla</h3>
                    <!-- Form etiketini içine al -->
                    <form id="bmiCalcForm">
                        <label for="weight">Kilo (kg): </label>
                        <input type="number" id="weight" required>

                        <label for="height">Boy (cm): </label>
                        <input type="number" id="height" required>

                        <button type="submit">Hesapla</button>
                    </form>
                </div>
                <div id="bmiSonuc"></div>
                <div id="bmiTavsiye"></div>
                <!-- calculateBMI() fonksiyonunu form submit olayına bağla -->
                <script>
                    document.getElementById('bmiCalcForm').addEventListener('submit', function (event) {
                        event.preventDefault(); // Sayfanın submit işlemini durdur
                        calculateBMI();
                    });

                    function calculateBMI() {
                        var weight = document.getElementById('weight').value;
                        var height = document.getElementById('height').value;

                        var bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);

                        var resultMessage = 'Vücut Kitle İndeksiniz: ' + bmi;

                        var adviceMessage = getAdvice(bmi);

                        document.getElementById('bmiSonuc').innerText = resultMessage;
                        document.getElementById('bmiTavsiye').innerText = adviceMessage;
                    }

                    function getAdvice(bmi) {
                        if (bmi < 18.5) {
                            return 'Zayıf: Daha fazla kalori alımı ve sağlıklı beslenme alışkanlıkları edinmeye çalışın ve sizin için hazırladığımız diyet listesine aşağıdaki seçenekten ulaşabilirsiniz.';
                        } else if (bmi >= 18.5 && bmi < 25) {
                            return 'Normal: Sağlıklı bir yaşam tarzını sürdürmeye devam edin. Kilo almaktan veya zayıflamaktan endişe duyuyorsanız sizin için hazırladığımız diyet listesine aşağıdaki seçenekten ulaşabilirsiniz.';
                        } else if (bmi >= 25 && bmi < 30) {
                            return 'Fazla kilolu: Düzenli egzersiz ve dengeli beslenme ile kilo kontrolüne odaklanın. Sağlıklı bir şekilde kilo vermek istiyorsanız sizin için hazırladığımız diyet listesine aşağıdaki seçenekten ulaşabilirsiniz.';
                        } else {
                            return 'Obez: Sağlık profesyoneli ile görüşerek uygun bir kilo kaybı programına başvurun.';
                        }
                    }
                </script>
                <h3>Seçenekler</h3>
                <p id="kutucuk">
                    <a href="zayif.php">Zayıflamak için buraya</a>
                    <a href="fit.php">Fit kalmak için buraya</a>
                    <a href="kilo.php">Kilo almak için buraya</a>
                </p>
            </section>
        </div>
        <footer>
            <p>&copy; 2024 Diyet Planlama</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>

</html>