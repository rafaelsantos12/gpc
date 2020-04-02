
<div class="wrapperlogin">
    <form class="form-signin" method="post" action="<?php echo base_url();?>restrict/ajax_login" id="login_form">
    <center><img src="<?php echo base_url();?>public/img/icon-login.png" width="200" height="200"></center>       
      <h2 class="form-signin-heading"></h2>
      <input type="text" class="form-control" name="username" placeholder="Usuário"  autofocus autocomplete="off" id="username"/>
      <span class="help-block"></span>
      <br>
      <input type="password" class="form-control" name="password" placeholder="Senha"  autofocus/>
      <br>      
      <button class="btn btn-lg btn-primary btn-block " type="submit" name="entrar" id="btn_login">Entrar</button>   
      <br>
      <p class="text-center text-danger ">
      <span class="help-block"></span>
    </p>
      <p class="text-center text-danger">
      <?php if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      }?>
    </p>
    </form>
</div>
