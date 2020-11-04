<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' >
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/produtos.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/sobre.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/animacao.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/responsive.css">
	

<link rel="shortcut icon" href="assets/images/logo.png">
	
	<title>Vip Modas</title>
</head>
<body>


<div class="divWhatsapp">


<div class="img">
		<a title="Fale Conosco via whatsapp" href= "#">
			    		<img height="60" class="img-fluid"   src="assets/images/ico-whatsapp2.png">
			    	

			    	</a>
</div>
	
</div>









<div class="container-fluid topo">
	<div style="color: #ddd" class="top">
	E-mail: contato@vipmodas.com.br	<img height="30" src="assets/images/icone_wat.png"> Celular / Whatsapp: (11) 9 6473-8733
		 
	</div>
	<div style="clear: both;"></div>
</div>






 <div class="menu_into">
 	<div class="container">
 		<div class="row">
 			<div style="text-align: center;" class="col-sm-4">
 				 <img id="img_logo" src="assets/images/logo.png">
 			</div>
 			<div class="col-sm-8 menu">
 				<ul>
 				<a href="<?php echo BASE_URL;?>home"><li style="background-color: #32CD32;">Inicial</li></a>
 			   <a href="<?php echo BASE_URL;?>sobre"><li>Sobre</li></a>
 					<a href="<?php echo BASE_URL;?>produtos"><li>Produtos</li></a>
 					<a href="<?php echo BASE_URL;?>carrinho"><li>Orçamentos</li></a>
 					<a href="<?php echo BASE_URL;?>compras"><li>MinhasCompras</li></a>
 				</ul>
 			</div>

 		</div>
 		
 	</div>
 </div>

  
  
  
   <div id="botao_menu_mobile" >
			  <button><img height="30" src="assets/images/menu.png"></button>
		</div> 
<div style="clear: both;"></div>

		<div id="menu_mobile">
			
			<div><a href="<?php echo BASE_URL; ?>home">Inicial</a></div>
			<div><a href="<?php echo BASE_URL; ?>produtos">produtos</a></div>
			<div><a href="<?php echo BASE_URL; ?>sobre">Sobre</a></div>
			<div><a href="<?php echo BASE_URL; ?>carrinho">Orçamentos</a></div>
			<div><a href="<?php echo BASE_URL; ?>compras">Minhas Compras</a></div>
		</div> <br>
  
  
  
  


 <div style="border-top: 2px solid #32CD32;border-bottom: 2px solid #32CD32" class="menu_cat">
 	  <div  class="menu_int">
 				<ul>
                <?php foreach($categorias as $cat): ?>
               <a href="<?php echo BASE_URL;?>categorias/categoriaItem/<?php echo $cat['id'];?>"><li><?php echo utf8_encode($cat['titulo']); ?></li></a>
                <?php endforeach; ?>

 							 
 				</ul>
 			</div>
 			
 </div>


  
                


<?php  $this->loadViewInTemplate($viewName,$viewData);   ?>



<footer class="rodape">

	<div class="container">
		
	
	<div class="row">
		<div class="col-sm-8 rodape_menu">
			 <a href="<?php echo BASE_URL; ?>home">Inicial</a>
			 <a href="<?php echo BASE_URL; ?>sobre">Sobre</a>
			 <a href="<?php echo BASE_URL; ?>produtos">Produtos</a>
			 <a href="<?php echo BASE_URL; ?>carrinho">Orçamentos</a>
			 <a href="<?php echo BASE_URL; ?>compras">Minhas compras</a><br><br>
			 <strong>Contato</strong>
			 <p>Fone: (11) 9 9657-2847</p>
			 <p>Celular / Whatsapp: (11) 9 6473-8733</p>
			 <p>E-mail: contato@vipmodas.com.br</p>

		</div>
		<div class="col-sm-4 img_rodape">
			<p>Formas de pagamento</p>
		 <img class="img-fluid" src="assets/images/f.png">	

		</div>
		
		

	</div>
	</div>
</footer>
<div class="container ">
	<div class="logo_r7">
		 Desenvolvido por www.r7webdesign.com 
	<a target="_blank" href="https://r7webdesign.com/index.php?url=home"><img height="40" src="assets/images/logor7.png"></a>
		
	</div>
	
	
</div>

<script type="text/javascript" src="<?php BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/Chart.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL?>assets/js/script.js"></script>
<script src="//code.jivosite.com/widget/suTYltmBxV" async></script>




 


</body>
</html>