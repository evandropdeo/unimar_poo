<?php

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

echo "<h2>Dados recebidos</h2>";
echo "<p>Nome: $nome</p>";
echo "<p>E-mail: $email</p>";



?>