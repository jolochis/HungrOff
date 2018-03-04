$(function(){
  'use stric';

    $(' .opciones').click(function(){
        $('.RVoluntario').show();
        $('.RDonante').hide();
    });

    $('.opciones').click(function(){
    $('RVoluntario').show();
    });


    $("#opciones").on('change',function(){
      switch ($('#opciones').val()){
        case 1:
          $("#RVoluntario").show();
        break;
        case "2":

        break;
      }
    });
//


/*
var proximosViajes = ['Londres', 'Valencia', 'Madrid', 'Paris','Milan'];


$.each(proximosViajes,function(i,v){

  if (i == 0) {
    $('aside').append('<h2>Proximos Viajes</h2>');
  }
  $('aside').append('<li>'+ v + '</li>');
});

$('.logo img').click(function(){
    $('main article:first').slideUp(1000);
});

$('aside').click(function(){
  $('main article:first').slideDown(1000);
});


  $('.logo img').on('click',function(){
    $(this).animate({'width': '200px'},1000);
  });

  $('main article img').on('mouseenter',aumentarImagen);
  $('main article img').on('mouseleave',disminuirImagen);

  function aumentarImagen(){
      $(this).animate({'width': '100%'});
  }

  function disminuirImagen(){
      $(this).animate({'width': '350px'});
  }

$('.navegacion').show();
$('.logo img').css({'width': '400px'});
$('main article h2').css({'color': '#db008d'});
$('aside').css({'background-color': '#e1e1e1',
                'text-transform': 'uppercase',
                'padding': '20px'

});

$('.navegacion ul li a').on('mouseenter', cambiarColor);

function cambiarColor(){
  $('.navegacion').css('background-color','red')
}

$('main').on({
  click:function () {
    $(this).addClass('fondorojo activo');
  },mouseenter: function(){
$(this).addClass('fondorojo');
  },mouseleave:  function(){
$(this).addClass('activo');
  }
});

$('div.logo img').addClass('activo');

$('.navegacion').show();
$('main article:first').addClass('activo');

$('.navegacion ul li a').on('click',function(e){
$('.navegacion ul li a').removeClass('activo');
  e.preventDefault();
  $(this).addClass('activo');
});


$('#menu').on('click',function () {
  $('#navegacion').show();
});

$('div.logo img').on('mouseenter',function(){
  console.log("sobre el logo");
});

$('div.logo img').on('mouseleave',function(){
  console.log("sale del logo");
});
*/

/*
  $('div.logo img').on('click',function(){
    $(this).remove();
  });
*/
/*
    $('div.logo img').on('click',function(){
      console.log("has hecho click en el logo");
    });


  /*
  $('main article:first').remove();

  var copia = $('main article:last').clone();
  $('main').append(copia);
  $('main').prepend(copia);
  */


});
