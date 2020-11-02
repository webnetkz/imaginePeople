<style>
    @import 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap';
    @import 'public/css/flex.css';
    @import 'public/css/helper.css';
    header {
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 60px;
        padding: 0 30px;
        z-index: 99999999!important;
        color: white!important;
    }
    .imagine {
        font-size: 2rem;
        font-weight: 100;
        border-bottom: 3px solid rgba(0, 0, 0, 0);
        color: white!important;
    }
	.imagine:hover {
		border-bottom: 3px solid white;
		cursor: pointer
	}
    .people {
        font-size: 2rem;
        font-weight: 600;
        color: white!important;
    }
    .people:hover {
        cursor: pointer;
    }
    .people1 { animation: spin 0.5s infinite; animation-delay: 0.5s;}
    .people2 { animation: spin 0.5s infinite; animation-delay: 0.8s;}
    .people3 { animation: spin 0.5s infinite; animation-delay: 1.1s;}
    .people4 { animation: spin 0.5s infinite; animation-delay: 1.3s;}
    .people5 { animation: spin 0.5s infinite; animation-delay: 1.5s;}
    .people6 { animation: spin 0.5s infinite; animation-delay: 1.8s;}
    .menuItem {
        padding: 0 1rem;
        font-size: 1.2rem;
        border-bottom: 3px solid rgba(0, 0, 0, 0);
        color: white!important;
    }
    .menuItem:hover {
        /* border-bottom: 3px solid rgb(255, 255, 255); */
        text-shadow: 0 0 5px rgb(255, 255, 255), 0 0 15px rgb(255, 255, 255);
        letter-spacing: 5px;
    }
    @keyframes spin {
        50% { 
			text-shadow: 0 0 10px white;
		}
    }
    .menuBurger {
        display: none;
    }
    @media screen and (max-device-width: 900px) {
        header {
            padding: 0 10px;
            justify-content: around;
        }
        menu {
            display: block;
            position: fixed;
            top: 50px;
            left: 100vw;
            width: 100vw;
            height: calc(100vh - 50px);
            background-color: rgba(0, 20, 170, 0.9);
            display: flex;
            flex-direction: column;
            padding-top: 100px;
        }
        .menuItem {
            padding: 20px 50px;
        }
        .menuBurger {
            display: block!important;
            width: 50px;
            z-index: 88;
        }
        .menuBurger:focus {
            right: -10px;
        }
        #about {
            display: none;
            position: absolute;
            bottom: 5vh;
            left: 10vw;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 10px black;
            background: white;
            animation: cartShow 0.5s linear;
        }
    }
    #about {
        display: none;
        position: absolute;
        top: 2.5rem;
        right: 3rem;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 0 10px black;
        background: white;
        animation: cartShow 0.5s linear;
    }
    #about li {
        display: block;
        color: rgb(73, 73, 77);
        padding: 3px;
        border-radius: 4px;
    }
    #about li:hover {
        color: rgb(3, 3, 7);
        background: linear-gradient(90deg, rgba(2,0,36,0.2) 0%, rgba(9,9,121,0.3) 35%, rgba(0,212,255,0.2) 100%);
    }
    #elemAbout:hover #about{
        display: block;
    }
    #about:hover {
        display: block;
    }


</style>
<header class="flex centerAI betweenJC">
    <div class="logo" onclick="location.href = 'index.php'">
        <span class="imagine">IMAGINE</span>
        <span class="people people1">P<span>
        <span class="people people2">E</span>
        <span class="people people3">O</span>
        <span class="people people4">P</span>
        <span class="people people5">L</span>
        <span class="people people6">E</span>
    </div>
    <img src="public/img/icons/menu.png" alt="" class="menuBurger" onclick="menu(this)">
    <menu>
        <a href="news.php" class="menuItem">НОВОСТИ</a>
        <!-- <a href="#" class="menuItem">АКЦИИ</a> -->
        <a href="voz.php" class="menuItem">ВОЗМОЖНОСТИ</a>
        <a href="products.php" class="menuItem">ПРОДУКТЫ</a>
        <a href="showrooms.php" class="menuItem">SHOW ROOMS</a>
        <!-- <a href="#" class="menuItem">БИЗНЕС</a> -->

        <a href="#" class="menuItem" id="elemAbout">О КОМПАНИИ
            <ul id="about">
                <li onclick="location.href = 'contacts.php'">КОНТАКТЫ</li>
                <li onclick="location.href = 'https:\/\/www.youtube.com/channel/UC2Y_5U3kt6BinPyJa8_nl4A'">ВИДЕО</li>
                
            </ul>
        </a>

    </menu>
</header>
<script>
    function menu() {        
        let menuBurger = document.querySelector('.menuBurger');
        let menu = document.querySelector('menu');
        if(menu.style.left == '0px') {
            menu.style.left = '100vw';
            menuBurger.src = 'public/img/icons/menu.png';
        } else {
            menu.style.left = '0';
            menuBurger.src = 'public/img/icons/close.png';
        }
    }
</script>
<script>
    window.addEventListener('scroll', function() {
        if(pageYOffset > 50) {
            document.querySelector('header').style.background = 'rgb(0, 0, 0, 0.5)';
        } else {
            document.querySelector('header').style.background = 'rgb(0, 0, 0, 0)';
        }
    });
</script>
