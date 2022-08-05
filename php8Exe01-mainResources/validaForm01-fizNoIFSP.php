<?php 
$erroNome = "";
$erroEmail = "";
$erroSenha = "";

    function clearPost($valor)
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
                $erroNome = "Apenas aceitamos letras e espaços em branco!";
            }
        }

        if(empty($_POST['email']))
        {
            $erroEmail = "Por favor, informe um email";
        } else 
        {
            $email = clearPost($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $erroEmail = "E-mail inválido!";
            }
        }

        if(empty($_POST['senha']))
        {
            $erroSenha = "Por favor, informe uma senha!";
        } else 
        {
            $senha = clearPost($_POST['senha']);
            if (strlen($senha < 6 ))
            {
                $erroSenha = "A senha precisa conter pelomenos 6 digítos ou mais!";
            }
        }

        if (($erroNome == "") && ($erroEmail == "") && ($erroSenha == "")) 
        {
            header('Location: obrigado.php'); // faz redirect
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
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
        }
        span.error {
            color: red;
        }

        div.f-column {
            display: flex;
            flex-direction: column;
        }

        .w-50percent {
            width: 50%;
        }

        .w-100vw {
            width: 100vw;
        }

        .w-100percent {
            width: 100%;
        }

        .d-block {
            display: block;
        }

        .main-containerForm {
            width: 50vw;
            margin-left: auto;
            margin-right: auto;
        }

        div.divNome {

        }

        div.divEmail {

        }

        div.divSenha {

        }

        .invalido {
            border: 1px solid red;
        }


    </style>
    <script type="text/javascript" defer>
    </script>
</head>
<body>
    <form method="post">
        <div class="main-containerForm f-column w-50percent">
            <div class="divNome w-100percent">
                <label class="d-block" for="nome">Nome Completo</label>
                <input class="w-100percent <?php if(!empty($erroNome)){ echo "invalido";} ?>" type="text" name="nome" placeholder="Digite seu nome aqui" required>
                <span class="error"><?php echo $erroNome; ?></span>
            </div>
            <div class="divEmail w-100percent">
                <label class="d-block" for="email">E-mail</label>
                <input class="w-100percent <?php if(!empty($erroEmail)){ echo "invalido";} ?>" type="email" name="email" placeholder="Digite seu email aqui" required>
                <span class="error"><?php echo $erroEmail; ?></span>
            </div>
            <div class="divSenha w-100percent">
                <label class="d-block" for="senha">Senha</label>
                <input class="w-100percent <?php if(!empty($erroSenha)){ echo "invalido";} ?>" type="password" name="senha" placeholder="Digite sua senha" required>
                <span class="error"><?php echo $erroSenha; ?></span>
            </div>
            <div>
                <button class="w-100percent" type="submit">Enviar</button>
            </div>
        </div>

    </form>
    
</body>
</html>