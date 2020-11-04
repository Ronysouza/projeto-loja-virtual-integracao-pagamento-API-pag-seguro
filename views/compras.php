<div class="container">

<br><br> 
<?php if(!empty($senha_incorreta)):  ?>
 <div class="alert alert-danger"><?php echo $senha_incorreta; ?></div>
<?php endif; ?>
 
<form class="form-control" method="POST">
	 <br>
  <div  style="text-align: center;" class="alert alert-warning">Para visualizar status das suas compras, faça login agora!</div>

	<br><br>
  <div class="form-group">
    <label for="exampleInputEmail1">*e-mail  </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="  email">
    <small id="emailHelp" class="form-text text-muted">Digite seu e-mail para visualizar suas compras.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">*senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-check">
   
  </div>
  <button type="submit" class="btn btn-success">Logar</button>
  <br><br>
</form>


	
</div><br><br>