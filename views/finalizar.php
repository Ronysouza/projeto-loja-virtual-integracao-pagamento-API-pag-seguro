<?php if(empty($vendas)){header('Location:'.BASE_URL.'home');exit();} ?> 


<div class="container-fluid">
 <br><p>Olá <strong><?php  echo $dados_usuario[0]['nome']; ?>,</strong> confirme seus dados para efetuar o pagamento</p>
	<form class="form-control" method="POST">
    
    <div class="row">

    	<div class="col-sm-6">
 
     
    <input type="hidden" name="id" value="<?php echo $dados_usuario[0]['id']; ?>" >
     

<div class="form-group">
    <label for="exampleInputEmail1">E-mail  </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="  email" value="<?php echo $dados_usuario[0]['email']; ?>" >
     </div>


     <div class="form-group">
    <label for="exampleInputPassword1">Rua</label>
    <input type="text" class="form-control" name="rua" id="exampleInputPassword1" placeholder="Rua">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">CEP</label>
    <input type="text" class="form-control" name="cep" id="exampleInputPassword1" placeholder="digite o cep da cidade">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">cidade</label>
    <input type="text" class="form-control" name="cidade" id="exampleInputPassword1" placeholder="Cidade" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bairro</label>
    <input type="text" class="form-control" name="bairro" id="exampleInputPassword1" placeholder="Bairro" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Número Casa</label>
    <input type="number" class="form-control" name="numero" id="exampleInputPassword1" placeholder="Numero da Casa" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observações</label>
    <textarea class="form-control" name="observacoes" placeholder="digite aqui observações adicioniais sobre,endereço de entrega,email,telefone etc."></textarea>
  </div>
</div>
    	 
    	<div class="col-sm-6">
    		 
			 <table class="table">
        <a style="margin: 5px;" class="btn btn-secondary" href="<?php echo BASE_URL;?>produtos">Adicionar +</a> <a class="btn btn-warning" href="<?php echo BASE_URL;?>carrinho"> Voltar</a>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Produto</th>
        <th scope="col">Preço</th>
               
    </tr>

  </thead>
      
      <?php   foreach($vendas as $item): ?>
      	<tr>
    	<td> <img height="30" src="assets/images/<?php echo $vendas[0][0]['url']; ?>"> </td>
    	<td><?php echo utf8_encode($item[0]['descricao']); ?></td>
    	<td><?php echo 'R$ '.utf8_encode($item[0]['preco']); ?></td>
    	 

    </tr>
      
      <?php endforeach;  ?>
      
      
     
        
</table> 
 
      	 <td>Total R$</td>
         <td><strong><?php   echo $subtotal; ?></strong> Reais </td>
     
    	</div>
    	 
    	 <input style="margin-left: 15px;" type="submit" value="efetuar pagamento" class="btn btn-success"><a style="margin-left: 15px;"  onclick="return confirm('Quer Mesmo Cancelar a Compra!');true" href="<?php echo BASE_URL;?>carrinho/cancelar" class="btn btn-secondary">Cancelar Compra</a>
  
     


</div>
	 
  
 
</form>

	
</div>







 