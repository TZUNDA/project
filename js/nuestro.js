/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// $(document).ready(function(){ probar con este mas rapido
window.onload = function () {
    $(".nav li").on("click", function () {
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });

    $(".navbar-brand").on("click", function () {
        $(".nav li").removeClass("active");
    });

    /* activate sidebar */
$('#sidebar').affix({
  offset: {
    top: 235
  }
});

/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});

/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
});
   
    
    $(window).scroll(function(event){
        toggleHeader();
    });
     //function toggleHeader() {
     // if ($(window).scrollTop()===0 )
         //$('.header ').show(600);
      //else
         //$('.header ').hide(600);
    //}

    function toggleHeader() {
        $('.header ').toggle( $(window).scrollTop() < 1 );
    }
};
function validarBusqueda() {
    var busqueda = document.getElementById("busqueda").value;
    if (busqueda === null || busqueda.length === 0 || busqueda.length > 40 || vacio(busqueda) === false) {
        window.alert("Introduzca una búsqueda");
    }
    else {
        document.getElementById("formBuscar").submit();
    }
}
function vacio(q) {
    for (i = 0; i < q.length; i++) {
        if (q.charAt(i) !== " ") {
            return true;
        }
    }
    return false;
}

