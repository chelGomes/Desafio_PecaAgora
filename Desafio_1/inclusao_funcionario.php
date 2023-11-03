<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//
// Define as variáveis locais 
//
$id_funcionario = "";
$nome = "";
$cpf = "";
$logradouro = "";
$cep = "";
$cidade = "";
$estado = "";
$numero = "";
$complemento = "";
$cargo_id = "";
$ComandoSQL = "";

// abre conexão com o banco
require_once 'funcoes/config_db.php';
$id_funcionario = $_GET['id_funcionario'];
// abre conexão com o banco
switch ($_POST['form_operacao'])
{
	case "alteracao":
		$id_funcionario = $_POST['id_funcionario'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$logradouro = $_POST['logradouro'];
		$cep = $_POST['cep'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$cargo_id = $_POST['cargo_id'];
		
		
		$ComandoSQL = "update funcionario set nome = '$nome', cpf = '$cpf', ";
		 $ComandoSQL = $ComandoSQL . " logradouro ='$logradouro',";
		 $ComandoSQL = $ComandoSQL . " cep = '$cep',";
		 $ComandoSQL = $ComandoSQL . " cidade = '$cidade',";
		 $ComandoSQL = $ComandoSQL . " estado = '$estado', ";
		 $ComandoSQL = $ComandoSQL . " numero = '$numero'";
		 $ComandoSQL = $ComandoSQL . " complemento = '$complemento', ";
		 $ComandoSQL = $ComandoSQL . " cargo_id = '$cargo_id'";
		 $ComandoSQL = $ComandoSQL . " where id_funcionario = '$id_funcionario'";
		//echo $ComandoSQL;
		//exit;
	
	mysql_query($ComandoSQL, $vConexao); 
	mysql_close($vConexao);
	echo "<script>alert('Funcionario cadastrado com sucesso!');window.location='inclusao_funcionario.php';</script>";
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD Funcionario</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<body>
<div id="tudo">
<div id="conteudo">
	<div id="topo">
	  <h1>Peca Agora</h1>
	</div>
	<div id="principal">
	  <h2>CADASTRO DE FUNCIONARIO</h2>
	  <h3>ALTERACAO E EXCLUSAO DE FUNCIONARIO</h3>
	  <form method="POST" action="alteracao_exclusao_funcionario.php" name="form_alteracao_exclusao_funcionario">
		<table width="600">
		<tr>
			<td class="td_r">Id_Funcionario:</td>
			<td>
  			  <input name="id_funcionario" type="text" id="codigo" size="1" maxlength="1"value=" <?php echo $row['id_funcionario']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Nome:</td>
			<td>
			  <input name="nome" type="text" id="nome" size="30" maxlength="30"value="<?php echo $row['nome']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">CPF:</td>
			<td>
			  <input name="cpf" type="text" id="cpf" size="3" maxlength="3"value="<?php echo $row['cpf']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Cidade:</td>
			<td>
			  <input name="cidade" type="text" id="cidade" size="10" maxlength="10"value="<?php echo $row['cidade']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Estado:</td>
			<td>
  			  <input name="estado" type="text" id="estado" size="20" maxlength="20" value="<?php echo $row['estado']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Logradouro:</td>
			<td>
  			  <input name="logradouro" type="text" id="logradouro" size="3" maxlength="3" value="<?php echo $row['logradouro']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Numero:</td>
			<td>
  			  <input name="numero" type="text" id="numero" size="2" maxlength="2" value="<?php echo $row['numero']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Complemento:</td>
			<td>
			  <input name="complemento" type="text" id="complemento" size="10" maxlength="10" value=" <?php echo $row['complemento']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Cargo_id:</td>
			<td>
  			  <input name="cargo_id" type="text" id="cargo_id" size="2" maxlength="2" value="<?php echo $row['cargo_id']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td colspan='2'class="td_c">* dados obrigatórios </td>
		  </tr>
		  <tr>
			<td colspan='2' class="td_c">
			  <input type="hidden" name="form_operacao" value="consulta">
			  <input name="alterar" type="button" value="Alterar" onClick="define_operacao('alt');">
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
			  <input name="excluir" type="button" value="Excluir" onClick="define_operacao('exc');">
			</td>
		  </tr>
		  </table>
	  </form>

	  </div> <!-- Fim da div#principal -->

<div id="auxiliar">
	<h4>MENU</h4>
	<ul id="nav">
		<li class="um"><a href="index_funcionario.php">Home</a></li>
		<li><a href="consulta_funcionario.php">Consulta (Alteracao e Exclusao)</a></li>
	</ul>

	</div> <!-- Fim da div#auxiliar -->

	<div class="clear"></div>

</div> <!-- Fim da div#conteudo -->
<div id="rodape">
 <p>Desenvolvido por Michel</p>
</div>
</div> <!-- Fim da div#tudo -->
</body>
</html>
</html>