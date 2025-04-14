<?php
// Simulando uma resposta JSON do servidor
$resposta = [
    "mensagem" => "Olá, esta é a resposta do servidor!",
    "status" => "sucesso"
];

// Configura o cabeçalho para JSON
header('Content-Type: application/json');

// Envia a resposta em formato JSON
echo json_encode($resposta);
?>