window.addEventListener('scroll', function() {
    if(pageYOffset > 50) {
        document.querySelector('header').style.color = 'red';
    }
});        