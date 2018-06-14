var widthBody = $(window).width();


//si quiero dividir el 90% en 8 elementos (cada uno con dos margenes)
var novPor = (74*widthBody)/100;
var tamNav = $(".wrapper").width();
var sobrante = novPor-tamNav;
var margenes = ((sobrante/8)/2);
$(".wrapper ul a").css("padding",margenes);
console.log(novPor);
console.log(tamNav);
console.log(sobrante);