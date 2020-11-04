<div class="container">
 Consultar Pedido
<?php if($invalido): ?>
<div class="alert alert-dark" ><?php echo $invalido; ?></div>
<?php endif; ?>
<form class="form-control" method="POST">

 número do pedido<br>
 <input class="form-control" type="number" name="pedido"><br>
 <input class="btn alert-success" type="submit" value="consultar">	
</form>
<br> 

   <?php if(isset($consultar[0]['status']) ):  ?>

               
<?php  if($consultar[0]['status'] == 0){
 ?>
  <div class="alert alert-warning">Aguardado confirmação de transação</div>
 <?php
}elseif($consultar[0]['status'] == 9 || $consultar[0]['status'] == 9){
	?>
         <div class="alert alert-primary">Aguardando pagamento</div>
	<?php
}elseif($consultar[0]['status'] == 2 || $consultar == 2){
 ?>
<div class="alert alert-success" >Pagamento efetuado com sucesso</div>

 <?php


}elseif($consultar[0]['status'] == 3 || $consultar[0]['status'] == 3){
	?>
   <div class="alert alert-danger" >Venda Cancelada pelo usuário !</div>
	<?php 
}else{
	?>
  <div class="alert alert-secondary">Confirmação desconhecido,entrar em contato com a loja pelo email contato@vipmodas.com.br, com o número do seu pedido</div>

	<?php
}



 ?>
   <?php endif;  ?>
















	
</div><br><br>

