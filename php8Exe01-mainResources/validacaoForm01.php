<?php 
    function cleanPost($valor)
    {
        $valor = trim($valor);
        $valor = stripcslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(empty($_POST['nome']))
        {
            $erroNome = "Por favor, preencha um nome";
        } else 
        {
            $nome = clearPost($_POST['nome']);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nome))
            {
                $erroNome = "Apenas aceitamos letras e espaços em branco!"
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valiadação de Formulário com PHP - 01</title>
    <style>
        input.error {
            border: 1px solid red;

        }


    </style>
</head>
<body>
    <form method="post">
        <div>
            <label for="">Nome Completo</label>
            <input type="text" name="nome" placeholder="Digite seu nome aqui" required>
            <span class=""></span>
        </div>
        <div>
            <label for="">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu email aqui" required>
        </div>
        <div>
            <label for="">Senha</label>
            <input type="password" name="email" placeholder="Digite sua senha" required>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>


    </form>
    
</body>
</html>