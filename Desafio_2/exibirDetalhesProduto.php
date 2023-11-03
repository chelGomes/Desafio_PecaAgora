<?php
	use yii\helpers\Html;

	$this->title = 'Detalhes do Produto';
	$this->params['breadcrumbs'][] = $this->title;
	?>

	<div class="container">
		<h1><?= Html::encode($this->title) ?></h1>

		<div class="row">
			<div class="col-md-6">
				<h2><?= $produto['Title'] ?></h2>
				<p>Item ID: <?= $produto['Item_id'] ?></p>
				<p>Categoria: <?= $produto['Category'] ?></p>
				<p>Preço: $<?= $produto['Price'] ?></p>
				<p>Cidade: <?= $produto['City'] ?></p>
				<p>Quantidade vendida: <?= $produto['Sold_quantity'] ?></p>
				<p>Perguntas: <?= $produto['Questions'] ?></p>
				<p>Reputação do Vendedor: <?= $produto['Seller_reputation'] ?></p>
				<!-- Imagens do produto -->
				<?php foreach ($produto['Pictures'] as $picture) : ?>
					<img src="<?= $picture['url'] ?>" alt="<?= $produto['Title'] ?>">
				<?php endforeach; ?>
			</div>
		</div>
	</div>
