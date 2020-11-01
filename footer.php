<style>
    footer {
        background: rgb(75, 75, 77);
        color: white;
        /* height: 57vh; */
        padding: 10vh 20% 2vh;
        text-align: center;
        position: relative;
        z-index: 999;
        margin-top: 5vh;
        clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
    }
    footer p {
        text-shadow: none;
        font-weight: 900;
        color: white;
    }
    .p1b1 {
        font-weight: 300;
    }
    .socialIcon {
        margin: 15px;
        width: 30px;
    }
    @media screen and (max-device-width: 900px) {
        footer {
            margin-top: -5vh;
            padding-top: 15vh;
            height: 140vh;
        }
        .footerImg{
            width: 80%!important;
        }
        .footerFlex {
            flex-direction: column;
        }
        .footerFlex > div {
            width: 100%!important;
            padding: 30px 0!important;
            border-bottom: 1px solid white;
            border-left: 0!important;
            border-right: 0!important;
        }
    }
</style>
<footer>
    <div>
        <img src="public/img/logo.png" alt="" class="footerImg" style="width: 20%;">
    </div>
    <div class="flex row aroundJC footerFlex" style="margin-top: 30px;">
        <div class="flex TAcenter col" style="border-right: 1px solid rgb(200, 200, 200); padding-right: 65px;">
            <p>АДРЕС</p>
            <p class="p1b1" style="margin-top: 50px;">Республика Казахстан,</p>
            <p class="p1b1">050040,город Алматы, </p>
            <p class="p1b1">мкр. Коктем-, дом 50</p>
        </div>
        <div class="flex TAcenter col">
            <p>СОЦИАЛЬНЫЕ СЕТИ</p>
            <div class="flex row beetwenJC" style="margin-top: 30px">
                <div style="background: white; border-radius: 50%; width: 64px; height: 64px; margin: 10px;">
                    <img src="public/img/icons/youtube.png" alt="" class="socialIcon">
                </div>
                <div style="background: white; border-radius: 50%; width: 64px; height: 64px; margin: 10px;">
                    <img src="public/img/icons/instagram.png" alt="" class="socialIcon">
                </div>
                <div style="background: white; border-radius: 50%;  width: 64px; height: 64px;margin: 10px;">
                    <img src="public/img/icons/telegram.png" alt="" class="socialIcon">
                </div>
            </div>
        </div>
        <div class="flex TAcenter col" style="border-left: 1px solid rgb(200, 200, 200); padding-left: 65px;">
            <p>КОНТАКТЫ</p>
            <p class="p1b1" style="margin-top: 50px;">
                <a href="tel:+77273645330">+7 (727) 364 53 30</a>
            </p>
            <p class="p1b1">
                <a href="tel:+77767575757">+7 (776) 757 57 57</a>
            </p>
            <p class="p1b1" style="margin-top: 20px;">info@ip-one.net</p>
        </div>
    </div>
    <p style="margin-top: 20px; font-weight: 300;">© 2020 ip-one.net</p>
</footer>