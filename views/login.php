<div class="container">
<br><br> 
<?php if(!empty($senha_incorreta)):  ?>
 <div class="alert alert-danger"><?php echo $senha_incorreta; ?></div>
<?php endif; ?>
<div  class="alert alert-success">
  Para efetuar a compra voçê terá que fazer login em sua conta, se voçê não tiver uma conta na loja,<a href="<?php echo BASE_URL;  ?>cadastro"> clique aqui</a> para cadastrar-se,é façil!
</div>
<form class="form-control" method="POST">
	<br><br>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail  </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="  email">
    <small id="emailHelp" class="form-text text-muted">Digite seu e-mail para faser login.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-check">
   
  </div>
  <button type="submit" class="btn btn-success">Logar</button> <a class="btn btn-warning" href="<?php echo BASE_URL;  ?>cadastro">cadastre-se</a>
</form>


	
</div><br><br>