<?php
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
	?>
	<h1>Funcionarios</h1>
	<ul>
	<?php foreach ($funcionarios as $funcionario): ?>
		<li>
			<?= Html::encode("{$funcionario->nome} ({$funcionario->cpf}) 
					({$funcionario->logradouro}) ({$funcionario->cep}) ({$funcionario->cideade})
					({$funcionario->estado}) ({$funcionario->numero}) ({$funcionario->complemento})
					({$funcionario->cargo_id})") ?>:
			<?= $funcionario->id ?>
		</li>
	<?php endforeach; ?>
	</ul>

	<?= LinkPager::widget(['pagination' => $paginacao]) ?>