var api = 'AIzaSyDFRO15uoqA0c4aJI8cTnvyqSHTwD_lq6s';
//var titulo = document.getElementById("descripcion").value;
//console.log(titulo);
 function initMap() {
   var latlng ={
     lat: 20.6534634,
     lng: -103.3950513,
   };

   var map = new google.maps.Map(document.getElementById('mapa'),{
     'center':latlng,
     'zoom': 14,
     'mapTypeId':google.maps.MapTypeId.TERRAIN,
   });

   map.addListener('click', function(e) {
    placeMarker(e.latLng, map);
});

function placeMarker(position, map) {

        var marker = new google.maps.Marker({
        position: position,
        map: map,
        title: titulo
    });
    map.panTo(position);
}
}//initmap

(function (){
  "use strict";


  document.addEventListener('DOMContentLoaded', function(){

    //Campos datos de usuario
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById('apellido');
    var pass = document.getElementById('pass');
    var correo = document.getElementById('correo');

    //divs
    var errorDiv = document.getElementById('error');

    nombre.addEventListener('blur', varlidarCampos);
    apellido.addEventListener('blur', varlidarCampos);
    email.addEventListener('blur', varlidarCampos);



    function varlidarCampos() {
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "este campo es obligatorio";
        this.style.border = 'solid 1px red';
        errorDiv.style.border = 'solid 1px red';
      }else{
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }





  });//DOM CONTENT LOADED
})();
