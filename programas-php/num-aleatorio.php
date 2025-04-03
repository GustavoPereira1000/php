<?php
// Gerar um número aleatório entre 1 e 10
$numeroAleatorio = rand(1, 10);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar o valor enviado pelo usuário
    $numeroUsuario = (int)$_POST["numero"];
    
    // Verificar se o número do usuário é o correto
    if ($numeroUsuario === $numeroAleatorio) {
        echo "Parabéns! Você acertou o número!";
    } else {
        echo "Você errou. O número correto era: $numeroAleatorio. Tente novamente!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
</head>
<body>
    <h1>Tente adivinhar o número!</h1>
    <form method="POST">
        <label for="numero">Digite um número entre 1 e 10:</label>
        <input type="number" id="numero" name="numero" min="1" max="10" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
