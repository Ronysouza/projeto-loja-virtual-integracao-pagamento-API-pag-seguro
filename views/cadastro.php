<div class="container cadastro">
	
  <?php if(isset($invalido) && !empty($invalido)):  ?>
    <div class="btn btn-warning"><?php echo $invalido; ?></div>
  <?php endif;  ?>
<h4>Cadastre-se</h4>
<form class="form-control" method="POST">     
  <?php if(!empty($tem_usuario)):  ?>
    <div class="btn btn-warning"><?php echo $tem_usuario; ?> <a href="<?php echo BASE_URL; ?>login">faça login agora</a></div>
  <?php endif;  ?>
  


     <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <input type="text" class="form-control" name="nome" id="exampleInputPassword1" placeholder="nome">
    </div>  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="senha" >
  </div>
  <input class="btn alert-success" type="submit" value="cadastrar"><a class="btn btn-default" href="<?php echo BASE_URL; ?>login">fazer login</a>
</div>

</form>
</div>