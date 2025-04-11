<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>

<h1>Cadastro de Usuário</h1>

<form action="cadastro.php" method="post">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>

    <input type="submit" value="Cadastrar">
</form>

<h2>Lista de Usuários</h2>

<table border="1">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Senha (hash)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>João</td>
        <td>*********</td>
    </tr>
    <tr>
        <td>Ana</td>
        <td>*********</td>
    </tr>
    </tbody>
</table>

</body>
</html>
