document.querySelector('.menu-display').addEventListener('click', () => {
    document.querySelector('.nav-menu').classList.toggle('show');
});


window.sr =ScrollReveal();
    
    sr.reveal('.nav-main',{
    duration: 3000,
    origin: 'bottom',
    distance: '-100px'    
    });
    sr.reveal('.new-cartas',{
        duration: 5000,
        origin: 'left',
        distance: '400px'    
    });
    sr.reveal('.banner',{
        duration: 6000,
        origin: 'right',
        distance: '400px'    
    });
    //paginas de la tienda
    sr.reveal('.ImagenesTienda',{
        duration: 6000,
        origin: 'left',
        distance: '40px'    
    });
    sr.reveal('.social',{
        duration: 6000,
        origin: 'right',
        distance: '40px'    
    });