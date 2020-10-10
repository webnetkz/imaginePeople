<style>
    header {
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100px;
        background-color: rgba(0, 0, 0, 0.2);
        padding: 0 30px;
        z-index: 99999999!important;
    }
    .imagine {
        font-size: 2rem;
        font-weight: 100;
    }
    .people {
        font-size: 2rem;
        font-weight: 600;
    }
    .people:nth-child(1) { animation: spin 0.5s infinite; animation-delay: 0.5s;}
    .people:nth-child(2) { animation: spin 0.5s infinite; animation-delay: 0.8s;}
    .people:nth-child(3) { animation: spin 0.5s infinite; animation-delay: 1.1s;}
    .people:nth-child(4) { animation: spin 0.5s infinite; animation-delay: 1.3s;}
    .people:nth-child(5) { animation: spin 0.5s infinite; animation-delay: 1.5s;}
    .people:nth-child(6) { animation: spin 0.5s infinite; animation-delay: 1.8s;}
    .menuItem {
        padding: 0 1rem;
        font-size: 1.2rem;
        border-bottom: 3px solid rgba(0, 0, 0, 0);
    }
    .menuItem:hover {
        border-bottom: 3px solid rgb(255, 255, 255);
        text-shadow: 0 0 5px rgb(255, 255, 255), 0 0 15px rgb(255, 255, 255);
        letter-spacing: 5px;
    }
    @keyframes spin {
        50% { transform: rotateY(360deg) }
    }
</style>
<header class="flex centerAI betweenJC">
    <div class="logo" onclick="location.href = '#'">
        <span class="imagine">IMAGINE</span>
        <span class="people">P<span>
        <span class="people">E</span>
        <span class="people">O</span>
        <span class="people">P</span>
        <span class="people">L</span>
        <span class="people">E</span>
    </div>
    <menu>
        <a href="#" class="menuItem">НОВОСТИ</a>
        <a href="#" class="menuItem">АКЦИИ</a>
        <a href="#" class="menuItem">ПРОДУКТЫ</a>
        <a href="#" class="menuItem">SHOW ROOMS</a>
        <a href="#" class="menuItem">БИЗНЕС</a>
        <a href="#" class="menuItem">О КОМПАНИИ</a>
    </menu>
</header>
