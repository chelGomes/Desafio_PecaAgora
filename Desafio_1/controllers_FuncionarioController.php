<?php

	namespace app\controllers;

	use yii\web\Controller;
	use yii\data\Pagination;
	use app\models\Funcionario;

	class FuncionarioController extends Controller
	{
		public function actionIndex()
		{
			$query = Funcionario::find();

			$paginacao = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
			]);

			$funcionarios = $query->orderBy('nome')
				->offset($paginacao->offset)
				->limit($paginacao->limit)
				->all();

			return $this->render('index', [
				'funcionarios' => $funcionarios,
				'paginacao' => $paginacao,
			]);
		}
	}