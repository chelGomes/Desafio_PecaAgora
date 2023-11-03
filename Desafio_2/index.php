<?php
	use yii\helpers\Html;
	use yii\helpers\Url;

	$this->title = 'Página Inicial';
	$this->params['breadcrumbs'][] = $this->title;
	?>

	<div class="container">
		<h1><?= Html::encode($this->title) ?></h1>

		<p>Aqui está um exemplo de um link para os detalhes do produto:</p>

		<?= Html::a('Ver Detalhes do Produto', ['produto/obter-dados-produto', 'meli_id' => 'SEU_ID_AQUI'], ['class' => 'btn btn-primary']) ?>
	</div>
