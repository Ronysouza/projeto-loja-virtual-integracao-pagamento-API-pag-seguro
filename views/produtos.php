
<div class="container">
	<div class="row">
            <?php foreach($All_produtos as $item): ?>

		<div class="col-sm-4">
		<a style="color: #333" href="<?php echo BASE_URL;?>produtos/descricao/<?php echo $item['id']; ?>"><div class="iten_prods">
			<div style="min-height: 200px">
				<img height="150" src="assets/images/<?php echo $item['url']; ?>">
			</div>
				
				<hr>
				<p><?php echo utf8_encode($item['descricao']); ?></p>
				<p>R$ <?php echo utf8_encode($item['preco']); ?></p>

			</div></a>
						
		</div><br><br>
	<?php endforeach; ?>


		

	</div>
	

</div>

