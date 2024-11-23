<?php 
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from usuarios where email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($senha, $user['senha'])) {
            session_start();
            $_SESSION['id_usuario'] = $user['id_usuario'];
            echo "login bem-sucedido!";
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "usuario nao encontrado!";
      }
    }
    ?>