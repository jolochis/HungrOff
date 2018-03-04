<?php
include_once 'validar-login.php';
session_start();
if ($_SESSION['logged']) {

  if ($_SESSION['tipo']!=1) {
    header('Location:voluntario.php');
  }else {
  header('Location:donante.php');
  }

}


include_once ('includes/templates/header.php');
?>
        <div>
        <center>
        <form method="POST" action="validar-login.php" name="log">
        <input type="text" name="lnombre" placeholder="Usuario" />
        <br />
        <input type="password" name="lpass" placeholder="Contraseña" />
        <br />
        <input type="submit" name="submit" value="Iniciar secion">

          <div class="error">



          </div>
        </form>
        </center>
        </div>
</body>

<?php include('includes/templates/footer.php'); ?>
