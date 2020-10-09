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
</style>
<header class="flex centerAI betweenJC">
    <div class="logo" onclick="location.href = '#'">
        <span class="imagine">IMAGINE</span>
        <span class="people">PEOPLE</span>
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
