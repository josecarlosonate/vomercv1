$(document).ready(function () {

    var botones = document.querySelectorAll(".enlaces");

    // Definir función y evitar definirla de manera anónima
    const cuandoSeHaceClick = function (evento) {
        // Recuerda, this es el elemento
        // console.log("El texto que tiene es: ",this.innerText);
        $('.active').removeClass("active");
        $(this).addClass('active');
    }
    // botones es un arreglo así que lo recorremos
    botones.forEach(boton => {
        //Agregar listener
        boton.addEventListener("click", cuandoSeHaceClick);
    });

});

    // boton flotante 
    window.onscroll = function(){
        if(document.documentElement.scrollTop > 100){
            $('.got-top-container').addClass("show");
        }else{
            $('.got-top-container').removeClass("show");
        }
    };

    $('.got-top-botton').on('click',function(){
        window.scrollTo({
            top:0,
            behavior: 'smooth'
        });
    });
    
    // setInterval(function(){
    //     $('.slick-next').click();
    //     // console.log('ok');
    //     return false;
    // },3000);