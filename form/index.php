
 <?php

 if (isset($_POST ['btnSumit'])) {

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade= $_POST['idade'];

echo 'Nome: '     $nome . '' . $sobrenome; 
echo 'Idade: ' . $idade;


 }
 
 $nome = 'Jessica';
 $sobrenome = 'Pereira';
 $idade = 31;
 $altura = 1,57;

echo 'Nome: '     $nome . '' . $sobrenome . PHP_EOL;
echo 'Idade: ' . $idade , PHP_EOL;
echo 'Altura: ' . $altura . PHP_EOL;



 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">
        <label>Nome</label>
<input type="text" name="nome">
<label>Sobrenome</label>
<input type="text" name="sobrenome">
<label>Idade</label>
<input type= "number" name="idade">
<button type= "btnSubmit">Enviar</button>

    </form>
</body>
</html>