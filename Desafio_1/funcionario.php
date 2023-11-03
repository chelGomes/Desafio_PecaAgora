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

// Consulta SQL para obter a lista de funcionários
$sql = "SELECT id, nome, cpf, logradouro, cep, cidade, estado, numero, complemento, cargo_id FROM funcionarios";
$resultado = $conexao->query($sql);

// Verificar se há resultados
if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nome</th>";
    echo "<th>CPF</th>";
    echo "<th>Logradouro</th>";
    echo "<th>CEP</th>";
    echo "<th>Cidade</th>";
    echo "<th>Estado</th>";
    echo "<th>Número</th>";
    echo "<th>Complemento</th>";
    echo "<th>Cargo ID</th>";
    echo "</tr>";

    // Exibir os funcionários
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["cpf"] . "</td>";
        echo "<td>" . $row["logradouro"] . "</td>";
        echo "<td>" . $row["cep"] . "</td>";
        echo "<td>" . $row["cidade"] . "</td>";
        echo "<td>" . $row["estado"] . "</td>";
        echo "<td>" . $row["numero"] . "</td>";
        echo "<td>" . $row["complemento"] . "</td>";
        echo "<td>" . $row["cargo_id"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum funcionário encontrado.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
