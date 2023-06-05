

<?php 
require_once 'includes/helpers.php';
?>

<aside id="sidebar">
  <div id="login" class="block-aside">
    <h3>Identficate</h3>
    <form action="login.php" method="post">
<label for="email"> Email</label>
<input type="email" name="email" placeholder="Email">
<label for="password"> Contraseña</label>
<input type="password" name="password" placeholder="Contraseña">
<input type="submit" value="Entrar">
    </form>
  </div>

  <div id="register" class="block-aside">
    <?php if (isset($_SESSION['errors'])) :  ?>
      <?php var_dump($_SESSION['errors']); ?>
      <?php endif; ?>
    <h3>Unete</h3>
    <form action="register.php" method="post">
      <label for="name"> Nombre</label>
      <input type="text" name="name" placeholder="Nombre">
      <?php echo showError($_SESSION['errors'],'name') ?>
      <label for="last_name"> Apellidos</label>
      <input type="text" name="last_name" placeholder="Apellidos">
      <?php echo showError($_SESSION['errors'],'last_name') ?>
      <label for="nick"> Nick</label>
      <input type="text" name="nick" placeholder="Nickname">
      <?php echo showError($_SESSION['errors'],'nick') ?>
      <label for="email"> Email</label>
      <input type="email" name="email" placeholder="Email">
      <?php echo showError($_SESSION['errors'],'email') ?>
      <label for="password"> Contraseña</label>
      <input type="password" name="password" placeholder="Contraseña">
      <?php echo showError($_SESSION['errors'],'password') ?>
      <input type="submit" value="Registrar">
    </form>
  </div>
</aside>