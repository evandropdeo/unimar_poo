 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <title>Formulário de exemplo</title>
 </head>
 <body>
    <h1>Formulário de Exemplo</h1>
    <form action="processa_form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">Enviar</button>
    </form>
 </body>
 </html>