<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
<?php
$nome=$_POST['nome'] ?? '';
$email=$_POST['email'] ?? '';
$curso=$_POST['curso'] ?? '';

if ($nome && $email && $idade && $curso)
{
    $linha="Nome: $nome | Email: $email | Curso: $curso\n";
    file_put_contents("cadastro.txt",$linha,FILE_APPEND);

    echo "<h1>Dados Recebidos</h1><br>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Curso: $curso <br>";
    echo "<a href='index.html'>Novo Cadastro</a>";
}else
{
    echo "Todos os Campos São Obrigatórios";
}
?>    
</body>
</html>
