<?php
// Conexão com o banco
$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "meu_banco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Captura dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Prepara e insere na tabela
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
