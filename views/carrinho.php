<?php if(!empty($vazio)): ?>

<div class="alert alert-warning">
	<?php echo $vazio; ?>
</div>

<?php else: ?>


<div class="container ">

     
    <div class="row">
    <div class="col-sm-6">

     <img class="img-fluid" src="assets/images/camisa_banner.png">

      
    </div>

    <div class="col-sm-6">

      <?php $subtotal = 0; ?>
       <?php foreach($add_itens_carrinho as $item):   ?>
      
       <div class="container" style="background-color: #eee;margin: 10px; ">
         
      


       <img   height="60" src="assets/images/<?php echo $item[0]['url']; ?>"> 
        <a style="color: #333" href="<?php echo BASE_URL;?>produtos"><?php echo utf8_encode($item[0]['descricao']); ?></a>       
       R$ <?php echo $item[0]['preco'];  ?></td>
         <a onclick="return confirm('Quer Mesmo Excluir');true" href="<?php echo BASE_URL;?>carrinho/excluir/<?php echo $item[0]['id']; ?>"><img style="border:1px solid red;border-radius: 3px" height="30" src="assets/images/delete.png"></a> 
                 </div> 
       <?php  $subtotal += $item[0]['preco'];  endforeach; ?> 
       <?php  $_SESSION['subtotal'] =  $subtotal ;  ?>   
       Qtd Produtos: <?php echo count($add_itens_carrinho);?><br> Valor Total R$ <strong><?php echo $subtotal;?></strong> Reais <br><br>


     
     <a class="btn btn-secondary" href="<?php echo BASE_URL;?>produtos">Adicionar Mais Itens</a> <a class="btn btn-success" href="<?php echo BASE_URL;?>carrinho/finalizar/<?php echo $subtotal; ?>">finalizar Compra</a> <br><br>
 
     


      
    </div>










      
    </div>

 
    
 


	
</div>




	

<?php endif; ?>

