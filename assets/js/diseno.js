
//----------------------------------------------------------------------------------------------------
// No cerrar dropdown con click en el menú principal
$(document).on('click', '.navbar-nav .dropdown-menu', function (e) {
	e.stopPropagation();
});

//----------------------------------------------------------------------------------------------------
// Agregar clase para modificar el header al bajar por la página
$(document).on("scroll", function(){
	if
	($(document).scrollTop() > 120){
		$(".header").addClass("shrink");
	}
	else  {
		$(".header").removeClass("shrink");
	}
});


$(document).ready(function() {

	ajusteImagenesFondos();

	//------------------------------------------------------------------------------------------------
	// Boton para subir
	// Mostrar u ocultar el botón
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
	// Animar el desplazamiento de la subida
	$('.go-top').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 300);
	})

	//------------------------------------------------------------------------------------------------
	// Sliders
	// Home
	$('.slider-principal').slick({
		infinite: true,
		dots: true,
		arrow: true,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 6000,
		responsive:
		[
			{
			breakpoint: 992,
			settings:
				{
				arrow: false
				}
			},
		]
	});
	// Accesos directos
	$('.slider-ad').slick({
		infinite: true,
		dots: false,
		arrow: true,
		autoplay: true,
		speed: 1000,
		autoplaySpeed: 6000,
		slidesToShow: 6,
  		slidesToScroll: 1,
		responsive:
		[
			{
			breakpoint: 1199,
			settings:
				{
				slidesToShow: 5
				}
			},
			{
			breakpoint: 992,
			settings:
				{
				slidesToShow: 4
				}
			},
			{
			breakpoint: 768,
			settings:
				{
				slidesToShow: 3
				}
			},
			{
			breakpoint: 576,
			settings:
				{
				slidesToShow: 2
				}
			},
		]
	});


	//------------------------------------------------------------------------------------------------
	// Agregar clase cambio color fondo

	var claro = $('#claro');

	


});


//----------------------------------------------------------------------------------------------------
//Carga imágenes en contenedores según el tamaño del viewport
function ajusteImagenesFondos() {

    var AnchoNavegador = $(window).width();
    var modo = "desktop";

    if (AnchoNavegador < 768) {
        modo = "mobile";
    }

    if ($(".src-ajuste-imgs-" + modo).length) {

        for (var i = 0; i < $(".src-ajuste-imgs-" + modo).length; i++) {

            //si la imagen se coloca en el atributo src
            if ($(".src-ajuste-imgs-" + modo).eq(i).data("type") == "src") {
                $("." + $(".src-ajuste-imgs-" + modo).eq(i).data("target")).attr("src", $(".src-ajuste-imgs-" + modo).eq(i).html());
            }

            //si la imagen va como background
            else {
                $("." + $(".src-ajuste-imgs-" + modo).eq(i).data("target")).css("background-image", "url(" + $(".src-ajuste-imgs-" + modo).eq(i).html() + ")");
            }

        }

    }

}

//----------------------------------------------------------------------------------------------------
//Muestra tabla
$(document).ready(function () {
	// datatable sucursal virtual historico pagos
	$('#muestra').DataTable( {
		data: dataSet,
		columns: [
			{ title: "Fecha" },
			{ title: "Monto" },
			{ title: "Forma de pago" },
			{ title: "Código transacción" },
			{ title: "Comprobante de pagos" }
		], 'language': {
			"sProcessing": "Procesando...",
			"sLengthMenu": "Mostrar _MENU_ resultados",
			"sZeroRecords": "No se encontraron resultados",
			"sEmptyTable": "Ningún dato disponible en esta tabla",
			"sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
			"sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
			"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
			"sSearch": "Buscar:",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Último",
				"sNext": ">",
				"sPrevious": "<"
			}
		}
	} );
});

var dataSet = [
	[ "08-10-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "12-01-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "24-08-2020", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "31-06-2020", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "03-12-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "01-11-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "28-09-2020", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "24-04-2019", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "16-05-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "13-02-2019", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "02-09-2021", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
	[ "07-10-2018", "9.990", "WebPay", "20210108034614X001569068", "<a href='' class='flaticon'><i class='flaticon-download'></i></a>",],
];