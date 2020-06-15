
<div class="wrapperlogin">
    <form id="login_form" class="form-signin" method="POST">
    <img src="<?php echo base_url();?>public/img/icon-login.png" width="200" height="200">      
      <h2 class="form-signin-heading"></h2>
      <div>
        <input type="text" class="form-control" name="username" placeholder="Usuário"  autofocus autocomplete="off" id="username"/>
      </div>
      <span class="help-block"></span>
      <br>
      <div>
        <input type="password" class="form-control" name="password" placeholder="Senha"  autofocus/>
      </div>
      
      <br> 

      <div class="">
        <div class="">
          <button class="btn btn-lg btn-primary btn-block " type="submit" name="entrar" id="btn_login">Entrar</button>
        </div>
        <br>
        <span class="help-block error-login"></span>
      </div>     
      
    </form>



</div>
