window.addEventListener('scroll', function() {
    if(pageYOffset > 50) {
        document.querySelector('header').style.background = 'rgb(0, 0, 0, 0.5)';
    } else {
        document.querySelector('header').style.background = 'rgb(0, 0, 0, 0)';
    }
});        