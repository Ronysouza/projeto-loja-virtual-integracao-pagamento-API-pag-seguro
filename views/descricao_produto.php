 

<br><br><div class="container">
	<h4><?php  echo utf8_encode($produtos_In_Id[0]['descricao']); ?></h4><br><br>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" class="img-fluid" src="assets/images/<?php echo $descricao_prod[0]['imagem']; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" class="img-fluid" src="assets/images/<?php echo $descricao_prod[1]['imagem']; ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" class="img-fluid" src="assets/images/<?php echo $descricao_prod[2]['imagem']; ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			
		</div>
		<div class="col-sm-6">
		 <p><strong style="color: #dd9999;font-size: 20px">R$ <?php echo $produtos_In_Id[0]['preco'] ?></strong> á vista</p>

           <a class="btn btn-success" href="<?php echo BASE_URL;?>carrinho/add/<?php echo $produtos_In_Id[0]['id'];  ?>">Adicionar ao Orçamento</a><br><br>
           <h4><?php echo utf8_encode($descricao_prod[0]['nome']); ?></h4><br><br>

           <div class="produto_descricao">
           	<?php echo utf8_encode($produtos_In_Id[0]['descricao']); ?>
           	
           </div>
<br><br>
         <table style="border: 1px solid #ddd" class="table table-striped">
  
  <tbody>
  	<?php foreach($produtos_In_Id as $item): ?>
      <tr> 
      <td><?php echo utf8_encode($item['altura']); ?></td>
      <td><?php echo utf8_encode($item['acm']); ?></td>   
    </tr>
     <tr> 
      <td><?php echo utf8_encode($item['largura']); ?></td>
      <td><?php echo utf8_encode($item['lcm']); ?></td>   
    </tr>

  	<?php endforeach; ?>
  
    
   
    
  </tbody>
</table>
           




			
		</div>
		
	</div>
	
</div>

