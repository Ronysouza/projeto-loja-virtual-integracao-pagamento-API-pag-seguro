<div class="banner_carroussel">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-inner_img carousel-item active" style=" background-image: url('http://vipmodas.tk/assets/images/bannerg.jpg'); background-size: cover;background-position: center;">
    <div class="banner_int_carrousel">
         	<h1><?php echo utf8_encode($banner[0]['titulo']); ?></h1>
         	<p><?php echo utf8_encode($banner[0]['descricao']); ?></p>
          <a style="background-color: #32CD32;color: #fff" class="btn" href="<?php echo BASE_URL; ?>produtos">Saiba Mais</a>
         	
         </div>
    </div>
      <?php foreach($banner as $item): ?>
 <div style=" background-image: url('http://vipmodas.tk/assets/images/<?php echo $item['url']; ?>'); background-size: cover;background-position: center;" class="carousel-item carousel-inner_img">
         <div class="banner_int_carrousel">
         	<h1><?php echo utf8_encode($item['titulo']); ?></h1>
         	<p><?php echo utf8_encode($item['descricao']); ?></p>
          <a style="background-color: #32CD32;color: #fff" class="btn" href="<?php echo BASE_URL; ?>produtos">Saiba Mais</a>
         	
         </div>
    </div>
      <?php endforeach; ?>    
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
	
</div>
<div class="container banner_baixo">
	<h2>DESCUBRA o seu melhor</h2>
	<p>Renovar-se faz parte do processo de Viver,quando o assunto é auto estima,nós somos especializados no assunto,é para isso que estamos aqui.para lhe dar o melhor conforto !</p>
	
</div>
<div class="container_icon">
  
     <div class="container">
     	
    

	<div id="efeito_banner" class="row">
		<div class="col-sm-3">
			<img height="60" src="assets/images/house1.png"><br><br>
			<p>Marca registrada em todo o estado
         </p>
			
		</div>
		<div class="col-sm-3">
			<img height="60" src="assets/images/house2.png"><br><br>
			<p>Mais de 8 anos de experiencia
         </p>
			
		</div>
		<div class="col-sm-3">
			<img height="60" src="assets/images/house3.png"><br><br>
			<p>O melhor para sua vestimenta
         </p>
			
		</div>
		<div class="col-sm-3">
			<img height="60" src="assets/images/house4.png"><br><br>
			<p>Combinação para seu estilo
         </p>
			
		</div>
		
	</div>
	 </div>
	
</div>
<div class="container banner_content">
	<div class="row">
		<div class="col-sm-6" id="banner_img">
		<a href="<?php echo BASE_URL; ?>produtos"><img class="img-fluid" src="assets/images/camisa_banner.png"></a>
		</div>
		<div id="banner_fundo" class="col-sm-6">
		<strong style="font-size: 25px;font-weight: 400">agora voçê pode comprar através do site parcelando no cartão em até 12X.</strong><br><br>
			<p>Nossa missão é atender e superar as expectativas dos nossos clientes e parceiros, fornecendo produtos seguros e com qualidade diferenciado, com responsabilidade gerando valor para nossos clientes e parceiros. </p><br><br>
			<a style="background-color: #32CD32;color: #fff"  class="btn" href="<?php echo BASE_URL; ?>sobre">Saiba mais</a>
		</div>
		
	</div>
	
</div>

<div class="container banner_baixo">
	<h2>Produtos Moda em geral </h2>
	<p>Agilidade de atendimento e estoque.
Referência no atendimeto online e presêncial</p>
	
</div>

<div style="background-color: #f8f8f8;padding-top: 20px;padding-bottom: 20px" class="container-fluid">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div id="carr_img" style="text-align: center;" class="carousel-item active">

      <a href="<?php echo BASE_URL; ?>produtos"><img  height="150" src="assets/galeria/calca1/calca01-1.webp" alt="First slide"></a>
        <a href="<?php echo BASE_URL; ?>produtos"> <img height="150" src="assets/galeria/calca2/calca02-1.webp" alt="First slide"></a>
         <a href="<?php echo BASE_URL; ?>produtos"> <img height="150"  src="assets/galeria/calca3/calca03-1.webp" alt="First slide"></a>
    </div>
    <div id="carr_img" style="text-align: center;" class="carousel-item">
       <a href="<?php echo BASE_URL; ?>produtos"> <img  height="150" src="assets/galeria/camisas/camisa1/camisa01-1.jpg" alt="First slide"></a>
        <a href="<?php echo BASE_URL; ?>produtos"> <img height="150" src="assets/galeria/camisas/camisa2/camisa02-1.webp" alt="First slide"></a>
         <a href="<?php echo BASE_URL; ?>produtos"> <img height="150"  src="assets/galeria/camisas/camisa3/camisa03-1.jpg" alt="First slide"></a>
    </div>
    <div id="carr_img" style="text-align: center;"  class="carousel-item">
    <a href="<?php echo BASE_URL; ?>produtos"><img  height="150" src="assets/galeria/sapatos/sapato1/sapato01-1.webp" alt="First slide"></a>
        <a href="<?php echo BASE_URL; ?>produtos"> <img height="150" src="assets/galeria/sapatos/sapato2/sapato02-1.webp" alt="First slide"></a>
        <a href="<?php echo BASE_URL; ?>produtos">  <img height="150"  src="assets/galeria/sapatos/sapato3/sapato03-1.webp" alt="First slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span   aria-hidden="true"> <img src="assets/images/esquerdo.png"></span>
   
    
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span  aria-hidden="true"><img src="assets/images/direito.png"></span>
    
  </a>
</div>
</div>