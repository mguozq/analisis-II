<div style="background-image: url(system/vistas/img/plantilla/back.png); opacity:35%" id="back"></div>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>MACO</b>motocicletas</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login del sistema</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
          <button type="submit" class="btn btn-primary btn-block">Inicar sesion</button>
    </form>
    <?php
      $login = new ControladorUsuarios();
      $login -> login();
     ?>
  </div>
</div>
