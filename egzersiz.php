<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egzersiz Takip</title>
    <style>
        * {
            box-sizing: border-box;
        }
        html,
        body {
            position: relative;
            height: 100%;
        }
        @media screen and (max-width: 768px) {
        /* Ekran genişliği 768px'e kadar olan cihazlar için stil değişiklikleri */
        #yuruyus,
        #yoga {
        width: calc(50% - 40px); /* İki fotoğrafın genişliği, dolgu değerleri düşülerek yarıya bölünür */
        height: auto; /* Yükseklik oranını korur */
        padding: 20px; /* Her fotoğrafın etrafına dolgu ekler */
        float: left; /* Fotoğrafları yana doğru hizalar */
        margin-right: 20px; /* Fotoğraflar arasına biraz boşluk bırakır */
        }
        }
        @media screen and (max-width: 480px) {
        /* Ekran genişliği 480px'e kadar olan cihazlar için stil değişiklikleri */
        #yuruyus,
        #yoga {
        width: 100%; /* Fotoğrafları sıralı hale getirir */
        float: none; /* Önceki float özelliğini iptal eder */
        margin-right: 0; /* Önceki sağ boşluk değerini kaldırır */
        margin-bottom: 20px; /* Fotoğraflar arasına biraz boşluk bırakır */
        }
        }
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
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
        h1 {
            color: #fff;
        }
        #anasayfa {
            margin: 0px;
            padding: 40px;
            border: 1px solid white;
            border-radius: 8px;
            background-color: white;
            line-height: 2;
            
        }
        h2 {
            color: #000000;
        }
        span{
            font-weight: bold;
            color: #000000;
        }
        .container {
            min-width: 100%;
            margin: 30px auto;
            margin-bottom: 30px;
            padding: 0px;
            color: #000000;
            font-size: 16px;
            line-height: 1.6;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        #exerciseList {
            margin-top: 20px;
        }

        #exerciseList ul {
            list-style-type: none;
            padding: 0;
        }

        #exerciseList li {
            background-color: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px;
        }

        #addExerciseForm {
            margin-top: 20px;
        }

        #addExerciseForm label {
            display: block;
            margin-bottom: 5px;
        }

        #addExerciseForm input {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
        }

        #addExerciseForm button {
            padding: 10px;
            background-color: rgb(252, 136, 3);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        swiper-container {
            width: 100%;
            height: 100%;
            background: #000;
        }

        swiper-slide {
            font-size: 18px;
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        swiper-slide .subtitle {
            font-size: 21px;
        }

        swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        }
        footer {
            background-color: #fff;
            color: #000000;
            text-align: center;
            padding: 10px;
        }
        #yuruyus{
            width: 600px;
            height: 400px;
            padding: 20px;
            float: left;
        }
        #yoga{
            width: 600px;
            height: 400px;
            padding: 20px;
            float: left;
            
        }
        .container2 {
        display: flex; /* Flexbox kullan */
        justify-content: space-between; /* İçerikleri container'ın iki kenarına yasla */
        flex-wrap: wrap; /* Eğer container alanı yetmiyorsa, resimleri alt satıra geçir */
}
    </style>
</head>

<body>
    <header>
        <h1>Egzersiz Takip</h1>
    </header>
    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
        speed="600" parallax="true" pagination="true" pagination-clickable="true" navigation="true">
        <div slot="container-start" class="parallax-bg" style="background-image: url(resimler/egzersiztakip.jpg);"
            data-swiper-parallax="-23%">
        </div>
        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Yürüyüş</div>
            <div class="subtitle" data-swiper-parallax="-200">Mental Sağlık:</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Yürüyüş, zihinsel sağlık için önemlidir. Düzenli egzersiz, stresi azaltabilir, depresyon ve
                    anksiyete riskini düşürebilir, zihinsel berraklığı artırabilir.
                </p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Yürüyüş</div>
            <div class="subtitle" data-swiper-parallax="-200">Kilo Kontrolü:</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Yürüyüş, kilo kontrolüne yardımcı olur. Düzenli olarak yapılan yürüyüş, kalori yakımını
                    artırabilir ve kilo kaybına katkıda bulunabilir.
                </p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Yürüyüş</div>
            <div class="subtitle" data-swiper-parallax="-200">Enerji Seviyeleri</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Yürüyüş, enerji seviyelerini artırır. Düzenli egzersiz yapmak, gün içinde daha enerjik
                    hissetmenize yardımcı olur.
                </p>
            </div>
        </swiper-slide>
    </swiper-container>
    <div class="container">
        <section id="anasayfa">
            <h2>Isınma Hareketleri ve Egzersiz Programı</h2>
            <p>
                Spordan önce ısınma hareketleri yapmak vücut sağlığınız için oldukça önemlidir. Vücudunuzu spora
                hazırlamanızı sağlayan ısınma hareketleri sayesinde hem spor hareketlerini daha kolay yapabilirsiniz hem
                de kaslarınız kasılmayacağı için olası bir sakatlanmayı engellemiş olursunuz. Birçok kişi spordan önce
                ısınma hareketi yapmayı es geçmektedir bu durum oldukça yanlıştır. Spora başlamadan önce ısınma
                hareketleri yaparak vücudunuzu hazırlamazsanız spor sırasında kaslarınıza zarar verebilir ve belki de
                bir daha spor yapamayacak hale gelebilirsiniz. Antrenman sırasında yapılan hareketleri doğru yapmak ne
                kadar önemliyse spordan önce de ısınma egzersizi yapmakta o kadar önemlidir.
            </p>
            <br>
            <p>
                Isınma hareketleri spordan önce ve sonra mutlaka yapılması tavsiye edilen hareketlerdir. Bu hareketler
                vücudun spora adapte olabilmesi ve spor öncesinde sakatlanmaların azalmasını sağlar. Vücudun ısınmadan
                antrenmana başlatılması istenmeyen sonuçlara sebep olabilmektedir. Kas zedelenmesi, burkulma ve
                zedelenmeler en çok yaşanan problemler arasında bulunur. Bu sebep ile de özellikle profesyonel sporcular
                hangi antrenmanı yaparlar ise yapsınlar önce ısınmaya öncelik verirler. Isınma egzersizleri spordan önce
                ve spordan sonra soğuma ve vücudu alıştırma gibi destekler ile yapılmalıdır.
            </p>
            <br>
            <h2>Egzersiz Nedir:</h2>
            <p>Egzersiz, vücut sağlığını geliştirmek, güçlendirmek, esnekliği artırmak ve genel yaşam kalitesini
                iyileştirmek için yapılan düzenli fiziksel aktivitelerdir. Egzersizler, çeşitli tiplerde ve seviyelerde
                olabilir. İşte farklı egzersiz türleri ve nasıl yapılacaklarına dair genel bilgiler:
            </p>
            <span>1. Aerobik Egzersizler:</span>
            <ul>
                <li>Yürüyüş: Hafif tempoda uzun yürüyüşler, kardiyovasküler sağlığı destekler.</li>
                <li>Koşu: Yüksek yoğunluklu bir aerobik egzersizdir. Başlangıç seviyesindeki koşularla başlanabilir.</li>
                <li>Yüzme: Tüm vücut kaslarını çalıştıran düşük darbe egzersizidir.</li>
                <li>Dans: Eğlenceli bir aerobik aktivite olan dans, kalori yakımını artırabilir.</li>
            </ul><br>
            <div class="container2">
            <img id="yuruyus" src="resimler/yuruyus.jpg" alt=""><br>
            <img id="yoga" src="resimler/yoga.jpg" alt=""><br><br>
            </div>
            <span>2.Dayanıklılık Egzersizleri:</span>
            <ul>
                <li>Ağırlık Antrenmanı: Vücut ağırlığı, dambıl veya makineler kullanılarak kas gücünü artırabilir.</li>
                <li>Kondisyon Egzersizleri: Yüksek tekrarlı düşük ağırlıklı egzersizler, kas dayanıklılığını artırabilir.</li>
            </ul>
            <span>3.Esneklik Egzersizleri:</span>
            <ul>
                <li>Yoga: Esneklik, denge ve zihinsel odaklanma sağlayan bir aktivitedir.</li>
                <li>Pilates: Karın kaslarını güçlendiren ve vücut esnekliğini artıran bir egzersizdir.</li>
                <li>Tai Chi: Yavaş ve kontrollü hareketlerle esnekliği artırabilir, dengeyi iyileştirebilir.</li>
            </ul>
            <span>4.Denge Egzersizleri:</span>
            <ul>
                <li>Denge Topu Egzersizleri: Top üzerinde yapılan egzersizler, çekirdek kasları güçlendirir ve dengeyi artırabilir.</li>
                <li>Tek Bacak Üzerinde Durma: Basit ancak etkili bir denge egzersizidir.</li>
            </ul>
            <span>5. Yüksek Yoğunluklu Interval Antrenman (HIIT):</span>
            <ul>
                <li>Kısa süreli yüksek yoğunluklu egzersizlerle düşük yoğunluklu dinlenme periyotlarını içerir. Örneğin, koşu sırasında interval koşular yapabilirsiniz.</li>
            </ul>
            <span>6. Esneklik Egzersizleri:</span>
            <ul>
                <li>Statik Esneme: Bir kası belirli bir pozisyonda tutarak esneme sağlar.</li>
                <li>Dinamik Esneme: Hareketli esneme, vücut ısındıkça kasları uzatmaya yardımcı olabilir.</li>
            </ul>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Diyet Planlama</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>