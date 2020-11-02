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
            height: 100%;
        }
        .arrR {
            position: relative;
            left: 97%;
            top: -4rem;
        }
        h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        h3 {
            color: rgb(75, 75, 77);
            margin-bottom: 1rem;
        }
        p {
            color: rgb(75, 75, 77);
            width: 50%;
        }
        .newsImg {
            position: relative;
            height: 15rem;
            top: 20vh;
            left: 70%;
        }
        .country {
            border: 1px solid rgb(63, 63, 65);
            color: rgb(63, 63, 65);
            padding: 4px!important;
            position: relative;
            max-width: 15vw;
            left: 60vw;
            padding-left: 100px!important;
            font-size: 1.5rem;
        }
        .Elems {
            padding: 5px;
            height: 7rem;
            border-bottom: 2px solid  rgb(63, 63, 65);
        }
        .Elems:hover {
            border-bottom: 2px solid  rgb(193, 193, 195);
            padding: 1px;
            padding-left: 30px;
            background: rgb(250, 250, 250);
            cursor: pointer;
        }
        .Elems > h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        .Elems > p {
            color: rgb(128, 128, 128);
        }
        @media screen and (max-device-width: 900px) {
            .arrR {
                position: relative;
                height: 2rem;
                left: 95%;
                top: -6rem;
            }
            .Elems {
                padding: 5px;
                height: 10rem;
                border-bottom: 2px solid  rgb(63, 63, 65);
            }
            .country {
                border: 1px solid rgb(63, 63, 65);
                color: rgb(63, 63, 65);
                padding: 4px!important;
                position: relative;
                max-width: 90vw;
                left: 5vw;
                padding-left: 5px!important;
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
            p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .content {
                overflow-x: hidden!important;
                margin-top: 5vh!important;
                margin-bottom: 5vh!important;
                padding: 1vh 2vw!important;
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
            background-image: url('public/img/photo/showrooms.jpg');
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
            margin-top: -5vh;
            margin-bottom: 5vh;
            padding:  0 5% 0!important;
        }
        header {
            background: rgba(0, 0, 0, 0.5);
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="topImg headerAllpage">
        <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">SHOW ROOMS</h1>
      </div>
      <div class="content">

      <div class="country">Россия, Москва</div>
        <div class="flex col">
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
            <div class="Elems">
                <h3>Москва - 177</h3>
                <p>Химки, м-н Сходня, ул. Микояна, дом 10, корпус 4, оф. 22</p>
                <p>Телефоны: 89637679888</p>
                <p>Ф.И.О. руководителя: Горбунов Александр Иванович</p>
                <img src="public/img/icons/arrowR.png" alt="" class="arrR">
            </div>
        </div>
    
      </div>      
      <?php require_once 'footer.php'; ?>


    
    </body>
</html>

