<?php include('includes/templates/header.php'); ?>

    <section class="seccion contenedor">
          <h2>HungrOff</h2>


          <form action="validar.php" class="registro" method="post">
            <div class="registro caja clearfix" id="datos_usuario">


              <div class="radio">
                <select class="seleccion" name="select" required>
                  <option value="">Elige opción</option>
                  <option value="1">Donante</option>
                  <option value="2">Voluntario</option>
                </select>

              </div>
          	<div class="campo">
          		<label for="nombre">Nombre</label>
              <input type="text" name="nombre" value="" id="nombre" required>
            </div>
            <div class="campo">
          		<label for="apellido">Apellido </label>
              <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="campo">
              <label for="contra">Contraseña </label>
              <input type="password" id="pass" name="pass" required>
            </div>
            <div class="campo">
          		<label for="email">Correo</label>
              <input type="email" id="email" name="email" required>
            </div>
              <input type="submit" value="Registrar" name="submit">
              <div id="error"></div>
            </div> <!-- datos de usuario-->


          </form>




</seccion>
<script>
/*
document.getElementById("nombre").onclick = displayDate;

function displayDate() {
    document.getElementById("error").innerHTML = Date();
}
*/
</script>

<script>

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

}/*
nombre.addEventListener('click',input);
    function input(){
      console.log("as");
      alert("as");
    }
    */
</script>


<?php include('includes/templates/footer.php'); ?>
