<?php
// Conexão com o banco de dados
$host = "localhost"; // Host do banco de dados
$usuario = "seu_usuario"; // Nome de usuário do banco de dados
$senha = "sua_senha"; // Senha do banco de dados
$banco = "seu_banco"; // Nome do banco de dados

$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Consulta SQL para obter a lista de cargos
$sql = "SELECT id, nome, salario,descricao, departamento FROM cargos";
$resultado = $conexao->query($sql);

// Verificar se há resultados
if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nome do Cargo</th>";
	echo "<th>Salario</th>";
	echo "<th>Descricao</th>";
	echo "<th>Departamento</th>";
    echo "</tr>";

    // Exibir os cargos
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
		echo "<td>" . $row["salario"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
		echo "<td>" . $row["departamento"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum cargo encontrado.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
