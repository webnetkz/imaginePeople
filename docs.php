<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Show Rooms</title>
      <meta charset="UTF-8">
      <meta name="theme-color" content="rgb(255, 255, 255)">
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="index, follow">     
      <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
      <link rel="apple-touch-icon" href="/public/img/logo.png">
      <style>
        @import 'public/css/animation.css';
        @import 'public/css/helper.css';
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            font-family: 'Roboto', sans-serif;
            background-color: rgb(255, 255, 255);
            scroll-behavior: smooth;
            overflow-x: hidden;
            height: 100vh;
        }
        [data-num]:before {
          content: "+";
          opacity: 0;
        }
        [data-num]:after {
          content: "+";
        }
        .Elems {
            height: 12rem;
            padding: 5px;
            margin: 1rem 0;
        }
        .Elems > h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        .Elems > h3 {
            color: rgb(75, 75, 77);
            margin-bottom: 1rem;
        }
        .Elems > p {
            color: rgb(75, 75, 77);
            width: 50%;
        }
        .Elems hr {
            border-color: rgb(75, 75, 77);
            width: 50%!important;
            margin: 1rem 0;
        }
        .newsImg {
            position: relative;
            height: 15rem;
            top: 20vh;
            left: 70%;
        }

        @media screen and (max-device-width: 900px) {
            .Elems > p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .content > div {
                margin-top: 30vh!important;
                height: 180vh!important;
                padding: 1vh 2vw!important;
            }
            .content {
                overflow-x: hidden!important;
                margin-top: -30vh!important;
                margin-bottom: 35vh!important;
                padding: 1vh 2vw!important;
            }
            .Elems {
                height: 40rem;
            }
            h1 {
                font-size: 3rem!important;
            }
            .newsImg {
                position: relative;
                top: 0;
                left: 0;
                display: block;
                width: 300px!important;
                height: 300px!important;
            }
            .topImg {
                background-image: url('public/img/photo/news.jpg');
                background-size: cover!important;
                background-repeat: no-repeat;
            }
        }
        .topImg {
            box-sizing: border-box;
            position: relative;
            top: 0;
            left: 0;
            width: 100vw;
            height: 60vh;
            z-index: 1;
            background-image: url('public/img/photo/news.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            animation: showHeader 3s infinite;
        }
        @keyframes showHeader {
                0% {

                }
                40% {
                    filter: brightness(1)
                }
                50% {
                    filter: brightness(2)
                }
                60% {
                    filter: brightness(1)
                }
        }
        .content {
            margin-top: 0vh;
            margin-bottom: 5vh;
            padding: 0 5% 0;
        }
        header {
            background: rgba(0, 0, 0, 0.5);
        }
        li > a > img {
            width: 300px;
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="topImg headerAllpage">
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">Документы</h1>
      </div>
      <div class="content">
        <div class="H100">
        <div class="col-md-10 documents p-5">
            <div class="col-md-10 p-5">
<h3>Научное обоснование применения гидроплазмы в процессе тренировок</h3>
<p style="font-size: 22px;"><a href="https://ip-one.net/files/Yi902BW77Zr3jMMGs0Cfetn0U9NPSWYrjv41RZYK.pdf">Биофизическая реабилитация спортсменов с применением гидроплазмы в процессе тренировок.pdf</a></p>
<p style="font-size: 22px;"><a href="https://ip-one.net/files/LUQKoxJtSPWV6nkozmah534jCK77NMTjjszmi02d.docx">Этический кодекс партнеров Компании IMAGINE PEOPLE.docx</a></p>
<p style="font-size: 22px;"><a href="https://ip-one.net/storage/files/mut8GyHz3kdTqbyEzRZ62Oe3wjGcMSfv6hWx1vCc.docx">Положение оптового покупателя.docx</a></p>
<p style="font-size: 22px;"><a href="https://ip-one.net/storage/files/0Z0UA4X1huDmUlEMGzhAeuL3cNqXjieNcseplkDs.docx">Договор купли и продажи(Казахстан).docx</a></p>
<p style="font-size: 22px;"><a href="https://ip-one.net/storage/files/5HKAxR2dkkbiOM4LVv1Wp0CSNuCCa4BILO0cLFZw.docx">Договор купли и продажи(Россия).docx</a></p>
</div>
            <ul id="lightgallery" class="row flex" lg-uid="lg0" style="flex-wrap: wrap;">
<li class="col-md-3" data-src="https://ip-one.net/storage/contents/October2020/BTA_Cert_1125466.jpg"><a><img src="https://ip-one.net/storage/contents/October2020/BTA_Cert_1125466.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/contents/October2020/ BETA.jpg"><a><img src="https://ip-one.net/storage/contents/October2020/ BETA.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/contents/September2020/Imagine People T.O.O..jpg"><a><img src="https://ip-one.net/storage/contents/September2020/Imagine People T.O.O..jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/18.06.2020/%D0%A1%D0%93%D0%A0%20%D0%B8%D0%BD%D1%82%D0%B8%D0%BC%20%D0%B3%D0%B5%D0%BB%D1%8C.jpg"><a><img src="https://ip-one.net/storage/documents/18.06.2020/%D0%A1%D0%93%D0%A0%20%D0%B8%D0%BD%D1%82%D0%B8%D0%BC%20%D0%B3%D0%B5%D0%BB%D1%8C.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/18.06.2020/ASW.jpg"><a><img src="https://ip-one.net/storage/documents/18.06.2020/ASW.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/18.06.2020/W-nature.jpg"><a><img src="https://ip-one.net/storage/documents/18.06.2020/W-nature.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/AE.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/AE.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/ALFA.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/ALFA.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/antisept.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/antisept.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/FullMatrix.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/FullMatrix.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/G-Bio.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/G-Bio.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/Intuite.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/Intuite.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/lifeEnergy.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/lifeEnergy.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/mask.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/mask.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/21.05.2020/WFL.jpg"><a><img src="https://ip-one.net/storage/documents/21.05.2020/WFL.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/toothbrush/%D0%94%D0%B5%D0%BA%D0%BB%D0%B0%D1%80%D0%B0%D1%86%D0%B8%D1%8F_1.jpg"><a><img src="https://ip-one.net/storage/documents/toothbrush/%D0%94%D0%B5%D0%BA%D0%BB%D0%B0%D1%80%D0%B0%D1%86%D0%B8%D1%8F_1.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/toothbrush/%D0%A1%D0%93%D0%A0%20%D1%89%D0%B5%D1%82%D0%BA%D0%B8.jpg"><a><img src="https://ip-one.net/storage/documents/toothbrush/%D0%A1%D0%93%D0%A0%20%D1%89%D0%B5%D1%82%D0%BA%D0%B8.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/toothbrush/%D0%A1%D0%B2%D0%B8%D0%B4%D0%B5%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%BE_%D0%97%D0%BD%D0%B0%D0%BA%20%D0%9E%D0%B4%D0%BE%D0%B1%D1%80%D0%B5%D0%BD%D0%BE_imagine%20people.jpg"><a><img src="https://ip-one.net/storage/documents/toothbrush/%D0%A1%D0%B2%D0%B8%D0%B4%D0%B5%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D1%82%D0%B2%D0%BE_%D0%97%D0%BD%D0%B0%D0%BA%20%D0%9E%D0%B4%D0%BE%D0%B1%D1%80%D0%B5%D0%BD%D0%BE_imagine%20people.jpg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/xPqh9GDBV6fNgOWdqirSeJeTefUodwHfDrd6zdqz.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/xPqh9GDBV6fNgOWdqirSeJeTefUodwHfDrd6zdqz.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/2IHDZHnjjpV1lc0Zz1E87lliJhzQsOGteA7pBnJr.jpeg"><a><img src="https://ip-one.net/storage/documents/2IHDZHnjjpV1lc0Zz1E87lliJhzQsOGteA7pBnJr.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/iAVBtB2t1wIDz6TupQQ81uY6TM4hKad1NV4ZAcyk.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/iAVBtB2t1wIDz6TupQQ81uY6TM4hKad1NV4ZAcyk.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/P95iI40lF4HLc4CDcMP8Yk4TPgQYwjmeRhZzcVSn.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/P95iI40lF4HLc4CDcMP8Yk4TPgQYwjmeRhZzcVSn.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/qvxmmJOysvv5rb3BtQnXLR1QinWfsdyqiGlEPFO9.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/qvxmmJOysvv5rb3BtQnXLR1QinWfsdyqiGlEPFO9.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/ScFGFskyIeKn9Vg4qC6LSQuUrXLsQITZU0ZgQSfz.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/ScFGFskyIeKn9Vg4qC6LSQuUrXLsQITZU0ZgQSfz.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/XlCFeX6LSduOE66P9Z0kg6qivetZQvZTFjuTg2Mc.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/XlCFeX6LSduOE66P9Z0kg6qivetZQvZTFjuTg2Mc.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/27.01.2020/TUH4jn7rT6Crc97V8B1xjXRsyq1eIfXz8HvzU1Wr.jpeg"><a><img src="https://ip-one.net/storage/documents/27.01.2020/TUH4jn7rT6Crc97V8B1xjXRsyq1eIfXz8HvzU1Wr.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/images/13-08-2019/9W2Ola6MJkOU1hdPwexozjJLYbzhniiEpZiPwtPh.jpeg"><a><img src="https://ip-one.net/storage/images/13-08-2019/9W2Ola6MJkOU1hdPwexozjJLYbzhniiEpZiPwtPh.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/images/13-08-2019/OxcKj3BdtMYWoW8RPqKCT0EN7rDzVJq0VcoUfCLx.jpeg"><a><img src="https://ip-one.net/storage/images/13-08-2019/OxcKj3BdtMYWoW8RPqKCT0EN7rDzVJq0VcoUfCLx.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/20f8goOmXChZHxaIfztRnPJbLme9kBFFAeQkZUMK.jpeg"><a><img src="https://ip-one.net/storage/documents/20f8goOmXChZHxaIfztRnPJbLme9kBFFAeQkZUMK.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/2ajM3pdf6c4f4rBoXihDqDQhQ30LMdjckkHBa9e1.jpeg"><a><img src="https://ip-one.net/storage/documents/2ajM3pdf6c4f4rBoXihDqDQhQ30LMdjckkHBa9e1.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/7oFdzPRVs8qiZJ0cKfaTaZb2GyhHz76kbSoONe4m.jpeg"><a><img src="https://ip-one.net/storage/documents/7oFdzPRVs8qiZJ0cKfaTaZb2GyhHz76kbSoONe4m.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/9ZV8iR0yAlalEu3mWLhElujDNeDBjOPH2l4KQwkO.jpeg"><a><img src="https://ip-one.net/storage/documents/9ZV8iR0yAlalEu3mWLhElujDNeDBjOPH2l4KQwkO.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/Ba692DvPkstlAlFGrc3CTnM8kd3hGLJJhyY7hDv7.jpeg"><a><img src="https://ip-one.net/storage/documents/Ba692DvPkstlAlFGrc3CTnM8kd3hGLJJhyY7hDv7.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/BZZfH18DZxfZct2ttWiKeolDtImC8SGwHQZYyAnE.jpeg"><a><img src="https://ip-one.net/storage/documents/BZZfH18DZxfZct2ttWiKeolDtImC8SGwHQZYyAnE.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/C9ZmeknJOu0A3QhaL38ASlTwOLeEMX7450jgobhF.jpeg"><a><img src="https://ip-one.net/storage/documents/C9ZmeknJOu0A3QhaL38ASlTwOLeEMX7450jgobhF.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/lVC5gxfYnpBLWy329SReewwHy2IaiQHrBGbiPMDS.jpeg"><a><img src="https://ip-one.net/storage/documents/lVC5gxfYnpBLWy329SReewwHy2IaiQHrBGbiPMDS.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/lh5mVKYKeRD4G0FJwipxUBdGHCRK6HftV43XX42N.jpeg"><a><img src="https://ip-one.net/storage/documents/lh5mVKYKeRD4G0FJwipxUBdGHCRK6HftV43XX42N.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/cK8A9A6WTTVBW6YUGdRawSuWPR3zPaINasc2mpa8.jpeg
"><a><img src="https://ip-one.net/storage/documents/cK8A9A6WTTVBW6YUGdRawSuWPR3zPaINasc2mpa8.jpeg" width="800"></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/lkRVWcW9SZe4rz3e55BQ9XeVBeOECbq5POLzxZ6n.jpeg
"><a><img src="https://ip-one.net/storage/documents/lkRVWcW9SZe4rz3e55BQ9XeVBeOECbq5POLzxZ6n.jpeg
" width="800"></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/gEs2KlHTFoUfIPq1uLbxvHtzvG0yCQq4630vfXoM.jpeg"><a><img src="https://ip-one.net/storage/documents/gEs2KlHTFoUfIPq1uLbxvHtzvG0yCQq4630vfXoM.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/eqMlwNahTI4Z2gsYfWqhBx0ptFGWj0fBGNBKd9Zi.jpeg"><a><img src="https://ip-one.net/storage/documents/eqMlwNahTI4Z2gsYfWqhBx0ptFGWj0fBGNBKd9Zi.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/enW9evjGgXalWCc1V5kkd5sXWH9QXXDUxfkmpkNJ.jpeg"><a><img src="https://ip-one.net/storage/documents/enW9evjGgXalWCc1V5kkd5sXWH9QXXDUxfkmpkNJ.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/dNTC3peoHRF49osyogQY4qNTZFzLJbrkCaUA9mh3.jpeg"><a><img src="https://ip-one.net/storage/documents/dNTC3peoHRF49osyogQY4qNTZFzLJbrkCaUA9mh3.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/LvKwUUWN62rpmpAO0lx1mwpNHiij7UPnD6f3YVBF.jpeg"><a><img src="https://ip-one.net/storage/documents/LvKwUUWN62rpmpAO0lx1mwpNHiij7UPnD6f3YVBF.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/mMoo1Sa6NUEfDMMCoXMxzF2IJZH0JUG82Zs0yNQZ.jpeg"><a><img src="https://ip-one.net/storage/documents/mMoo1Sa6NUEfDMMCoXMxzF2IJZH0JUG82Zs0yNQZ.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/Oq15OgjbGJ7xxGSkjQ5VJDeNJ0YuKmifZDwMgaQV.jpeg"><a><img src="https://ip-one.net/storage/documents/Oq15OgjbGJ7xxGSkjQ5VJDeNJ0YuKmifZDwMgaQV.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/PIosZOv3Lbz5V947XRXNKtFAjwFm0XMojTBWwn1t.jpeg"><a><img src="https://ip-one.net/storage/documents/PIosZOv3Lbz5V947XRXNKtFAjwFm0XMojTBWwn1t.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/rYBK5yCmIfCZFm7ziBIytPptpIsKuIJys5M7hDZ2.jpeg"><a><img src="https://ip-one.net/storage/documents/rYBK5yCmIfCZFm7ziBIytPptpIsKuIJys5M7hDZ2.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/sipKilAC8UedYVoG50ruhimGePk3s8gFcrXBU0D4.jpeg"><a><img src="https://ip-one.net/storage/documents/sipKilAC8UedYVoG50ruhimGePk3s8gFcrXBU0D4.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/SPwC3gXkNvcNfEtIg3T8fB0h7WOrHsI0G2VoFhB8.jpeg"><a><img src="https://ip-one.net/storage/documents/SPwC3gXkNvcNfEtIg3T8fB0h7WOrHsI0G2VoFhB8.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/xjqaU1sK3vMritYdi2AP3DmUDlAOno55gCCNc3TX.jpeg"><a><img src="https://ip-one.net/storage/documents/xjqaU1sK3vMritYdi2AP3DmUDlAOno55gCCNc3TX.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/X3qsI7c3UFaorUmHc2MB5RVmEzCpMhrde1F5cLI9.jpeg"><a><img src="https://ip-one.net/storage/documents/X3qsI7c3UFaorUmHc2MB5RVmEzCpMhrde1F5cLI9.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/uOoCRGkI5TiRXbUixVsCEWPYJbWv65GGNO2c4HAo.jpeg"><a><img src="https://ip-one.net/storage/documents/uOoCRGkI5TiRXbUixVsCEWPYJbWv65GGNO2c4HAo.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/TokCcyG69ShqZhyijYkjDSzJ4DhqYUuhwRqTLNqE.jpeg"><a><img src="https://ip-one.net/storage/documents/TokCcyG69ShqZhyijYkjDSzJ4DhqYUuhwRqTLNqE.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/Tf9ZUCJIcjZuQ5swaEWSilwVQWJWa2A6jdHzuU4i.jpeg"><a><img src="https://ip-one.net/storage/documents/Tf9ZUCJIcjZuQ5swaEWSilwVQWJWa2A6jdHzuU4i.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/Wgo44JYb5XMTtJN4sDTonEeoApgbGC78lWC3LwVm.jpeg"><a><img src="https://ip-one.net/storage/documents/Wgo44JYb5XMTtJN4sDTonEeoApgbGC78lWC3LwVm.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/CuesGxybthzF2QGebi8Ub9lE2XBxTAGnZuOYnWLs.jpeg"><a><img src="https://ip-one.net/storage/documents/CuesGxybthzF2QGebi8Ub9lE2XBxTAGnZuOYnWLs.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/WO0yW7o3tcVyX8HKdZ0B6VZECPZpo5CFg3RRr5gb.jpeg"><a><img src="https://ip-one.net/storage/documents/WO0yW7o3tcVyX8HKdZ0B6VZECPZpo5CFg3RRr5gb.jpeg" alt=""></a></li>
<li class="col-md-3" data-src="https://ip-one.net/storage/documents/YBMBufdIu3fatWoUzQ8apTT5mrUeWHBgNYQu6Qzv.jpeg"><a><img src="https://ip-one.net/storage/documents/YBMBufdIu3fatWoUzQ8apTT5mrUeWHBgNYQu6Qzv.jpeg" alt=""></a></li>
</ul>
        </div>
        </div>
      </div>

      <script>
        window.addEventListener('scroll', function() {
            if(pageYOffset > 50) {
                document.querySelector('header').style.background = 'rgb(0, 0, 0, 0.5)';
            } else {
                document.querySelector('header').style.background = 'rgb(0, 0, 0, 0)';
            }
        }); 
      </script>

      <?php require_once 'footer.php'; ?>
    
    </body>
</html>




