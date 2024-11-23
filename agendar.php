<?php
include 'config.php';
session_start();

if(isset($_SESSION['usuario_id'])){
    die("Acesso negado");
}

     if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id_usuario = $_SESSION['usuario_id'];
        $medico = $_POST['medico'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $sql = "INSERT INTO agendamentos (id_usuario, medico, data, horario) VALUES ($id_usuario, '$medico', '$data', '$horario')";

        if ($conexao->query( $sql ) === TRUE) {
            echo "Agendamento realizado com sucesso!";
        } else {
            echo "Erro ao agendar consulta: " . $conexao->error;
        }
    }
    ?>