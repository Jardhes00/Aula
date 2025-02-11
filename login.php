<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($email === '123@email.com' && $senha === '123') {
        echo json_encode(["status" => "sucesso", "mensagem" => "Login realizado com sucesso"]);
    } else {
        echo json_encode(["status" => "erro", "mensagem" => "Credenciais inválidas"]);
    }
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Método inválido"]);
}
?>  