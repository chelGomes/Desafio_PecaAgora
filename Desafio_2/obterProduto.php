<?php

	namespace app\controllers;

	use Yii;
	use yii\web\Controller;

	class ProdutoController extends Controller
	{
		public function actionObterDadosProduto($meli_id)
		{
			$url = 'https://api.mercadolibre.com/items/' . $meli_id;

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);

			if ($http_status === 200) {
				$produto = json_decode($response, true);
				return $this->render('exibirProduto', ['produto' => $produto]);
			} else {
				return 'Erro ao obter dados do produto';
			}
		}
	}
