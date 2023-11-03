<?php
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//
// Define as variáveis locais 
//
$cargo_id = "";
$cargo_nome = "";
$salario = "";
$descricao = "";
$departamento = "";
$ComandoSQL = "";

// abre conexão com o banco
require_once 'funcoes/config_db.php';
$cargo_id = $_GET['cargo_id'];
// abre conexão com o banco
switch ($_POST['form_operacao'])
{
	case "alteracao":
		$cargo_id = $_POST['cargo_id'];
		$cargo_nome = $_POST['cargo_nome'];
		$salario = $_POST['salario'];
		$descricao = $_POST['descricao'];
		$departamento = $_POST['departamento'];
		
		
		$ComandoSQL = "update cargo set cargo_nome = '$cargo_nome', $salario = '$$salario', ";
		 $ComandoSQL = $ComandoSQL . " descricao ='$descricao',";
		 $ComandoSQL = $ComandoSQL . " departamento = '$departamento',";
		 $ComandoSQL = $ComandoSQL . " where cargo_id = '$cargo_id'";
		//echo $ComandoSQL;
		//exit;
	
	mysql_query($ComandoSQL, $vConexao); 
	mysql_close($vConexao);
	echo "<script>alert('Cargo cadastrado com sucesso!');window.location='inclusao_cargo.php';</script>";
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>CRUD Cargo</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<body>
<div id="tudo">
<div id="conteudo">
	<div id="topo">
	  <h1>Peca Agora</h1>
	</div>
	<div id="principal">
	  <h2>CADASTRO DE CARGO</h2>
	  <h3>ALTERACAO E EXCLUSAO DE CARGO</h3>
	  <form method="POST" action="alteracao_exclusao_funcionario.php" name="form_alteracao_exclusao_funcionario">
		<table width="600">
		<tr>
			<td class="td_r">Cargo_id:</td>
			<td>
  			  <input name="cargo_id" type="text" id="cargo_id" size="1" maxlength="1"value=" <?php echo $row['cargo_id']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Cargo_nome:</td>
			<td>
			  <input name="cargo_nome" type="text" id="cargo_nome" size="30" maxlength="30"value="<?php echo $row['cargo_nome']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Salario:</td>
			<td>
			  <input name="salario" type="text" id="salario" size="3" maxlength="3"value="<?php echo $row['salario']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Descricao:</td>
			<td>
			  <input name="descricao" type="text" id="descricao" size="10" maxlength="10"value="<?php echo $row['descricao']?>" required="required">*
			</td>
		  </tr>
		  <tr>
			<td class="td_r">Departamento:</td>
			<td>
  			  <input name="departamento" type="text" id="departamento" size="20" maxlength="20" value="<?php echo $row['departamento']?>" required="required">*
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
		<li class="um"><a href="index_cargo.php">Home</a></li>
		<li><a href="inclusao_cargo.php">Inclusao de Cargo</a></li>
		<li><a href="cargo.php">Consulta (Alteracao e Exclusao)</a></li>
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