<?php include('includes/templates/header.php'); ?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<section class="seccion contenedor">


  <div class="container">


      <form action="validar.php" class="" method="post">
        <div class="registro caja clearfix" id="datos_usuario">
            <div class="container">
              <h2>HungrOff</h2>
            </div>

          <div class="radio">
            <select class="input-lg" name="select" required>
              <option value="">Elige opción</option>
              <option value="1">Donante</option>
              <option value="2">Voluntario</option>
            </select>

          </div>
        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="" id="nombre" class="form-control" required>
        </div>
        <div class="campo">
          <label for="apellido">Apellido </label>
          <input type="text" id="apellido" name="apellido" class="form-control" required>
        </div>
        <div class="campo">
          <label for="contra">Contraseña </label>
          <input type="password" id="pass" name="pass" class="form-control" required>
        </div>
        <div class="campo">
          <label for="email">Correo</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="help-block">
          <i>Se parte de esta gran familia dispueta a ayudar y acabar con el hambre</i>

        </div>
          <input type="submit" value="Registrar" name="submit" class="btn btn-lg btn-primary btn-block signup-btn">


          <div id="error"></div>

        </div> <!-- datos de usuario-->


      </form>

</div><!--container-->


</seccion>


<script>
/*
function myFunction() {
    nombre.addEventListener('blur', myFunction);
  var errorDiv = document.getElementById('error');
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
nombre.addEventListener('click',input);
    function input(){
      console.log("as");
      alert("as");
    }
    */
</script>


<?php include('includes/templates/footer.php'); ?>
