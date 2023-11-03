<?php
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
	?>
	<h1>Cargos</h1>
	<ul>
	<?php foreach ($cargos as $cargo): ?>
		<li>
			<?= Html::encode("{$cargo->cargo_nome} ({$cargo->salario})
			({$cargo->descricao})({$cargo->departamento})"?>:
			<?= $cargo->cargo_id ?>
		</li>
	<?php endforeach; ?>
	</ul>

	<?= LinkPager::widget(['pagination' => $paginacao]) ?>