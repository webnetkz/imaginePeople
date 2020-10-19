<style>
    header {
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 60px;
        padding: 0 30px;
        z-index: 99999999!important;
    }
    .imagine {
        font-size: 2rem;
        font-weight: 100;
		border-bottom: 3px solid rgba(0, 0, 0, 0);
    }
	.imagine:hover {
		border-bottom: 3px solid white;
		cursor: pointer
	}
    .people {
        font-size: 2rem;
        font-weight: 600;
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
        <a href="#" class="menuItem">НОВОСТИ</a>
        <a href="#" class="menuItem">АКЦИИ</a>
        <a href="#" class="menuItem">ПРОДУКТЫ</a>
        <a href="showrooms.php" class="menuItem">SHOW ROOMS</a>
        <a href="#" class="menuItem">БИЗНЕС</a>
        <a href="#" class="menuItem">О КОМПАНИИ</a>
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
