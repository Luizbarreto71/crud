<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    if (!empty($email) && !empty($senha)) {

        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro:" . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    $conn ->close();
}
?>