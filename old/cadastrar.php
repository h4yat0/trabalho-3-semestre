<?php
    require('src/db/conexao.php');

    // Verifica se existe um post
    if(isset($_POST['nomeCompleto']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repeteSenha'])) {
        //Recebe valores do POST e "limpa"
        $nome = limparPost($_POST['nomeCompleto']);
        $email = limparPost($_POST['email']);
        $senha = limparPost($_POST['senha']);
        $senhaCript = sha1($senha); // Gera uma criptografia
        $repeteSenha = limparPost($_POST['repeteSenha']);
        if (isset($_POST['termos'])) {
            $checkbox = limparPost($_POST['termos']);

            //Verifica se checkbox foi marcado
            if($checkbox !== "ok") {
                $erroCheckbox = "Desmarcado";
            }
        } else if (empty($_POST['termos'])) {
            $erroCheckbox = "Desmarcado";
        }

        //Verifica se nome contem apenas letra e espaço
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            $erroNome = "Somente permitido letras e espaços em branco!";
        }

        //Verifica se email é valido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de email inválido!";
        }

        //Verifica se senha tem mais de 06 digitos
        if(strlen($senha) < 6) {
            $erroSenha = "Senha deve ter 6 caracteres ou mais!";
        }

        //Verifica se senha repetida é igual
        if ($senha !== $repeteSenha) {
            $erroRepeteSenha = "Senha e repetição diferentes!";
        }

        if (!isset($erroNome) && !isset($erroEmail) && !isset($erroSenha) && !isset($erroRepeteSenha) && !isset($erroCheckbox)) {
            //Verifica se esse email já está cadastrado no banco
            $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");
            $sql -> execute(array($email));
            $emailCadastrado = $sql -> fetch();
            //Se não existir email add banco
            if (!$emailCadastrado) {
                $recuperaSenha = "";
                $token = "";
                $status = "novo";
                $dataCadastro = date('d/m/Y');
                $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
                if ($sql->execute(array($nome, $email, $senhaCript, $recuperaSenha, $token, $status, $dataCadastro))) {
                    header('location: login.php?result=ok');
                }
            } else {
                $erroEmailCadastrado = "Email já cadastrado!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/css/cadastro.css" rel="stylesheet">
    <title>Cadastrar</title>
</head>
<body>
    <form method="post">
        <h1>Cadastrar</h1>

        <div class="input-group">
            <img class="input-icon" src="src/img/card.png">
            <input <?php if(isset($erroNome)) { echo 'class="erro-input"'; } ?> type="text" name="nomeCompleto" placeholder="Nome Completo" <?php if (isset($nome)) { echo "value='$nome'"; } ?> required>
            <?php if(isset($erroNome)) { ?>
                <div class="erro"> <?php echo $erroNome; ?> </div>
            <?php } ?>
        </div>

        <div class="input-group">
            <img class="input-icon" src="src/img/user.png">
            <input <?php if(isset($erroEmail) || isset($erroEmailCadastrado)) { echo 'class="erro-input"'; } ?> type="email" name="email" placeholder="Seu melhor email" <?php if (isset($email)) { echo "value='$email'"; } ?> required>
            <?php if(isset($erroEmail)) { ?>
                <div class="erro"> <?php echo $erroEmail; ?> </div>
            <?php } ?>
            <?php if(isset($erroEmailCadastrado)) { ?>
                <div class="erro"> <?php echo $erroEmailCadastrado; ?> </div>
            <?php } ?>
        </div>

        <div class="input-group">
            <img class="input-icon" src="src/img/lock.png">
            <input <?php if(isset($erroSenha)) { echo 'class="erro-input"'; } ?> type="password" name="senha" placeholder="Senha mínimo 6 Dígitos" <?php if (isset($senha)) { echo "value='$senha'"; } ?> required>
            <?php if(isset($erroSenha)) { ?>
                <div class="erro"> <?php echo $erroSenha; ?> </div>
            <?php } ?>
        </div>

        <div class="input-group">
            <img class="input-icon" src="src/img/lock-open.png">
            <input <?php if(isset($erroRepeteSenha)) { echo 'class="erro-input"'; } ?> type="password" name="repeteSenha" placeholder="Repita a senha criada" <?php if (isset($repeteSenha)) { echo "value='$repeteSenha'"; } ?> required>
            <?php if(isset($erroRepeteSenha)) { ?>
                <div class="erro"> <?php echo $erroRepeteSenha; ?> </div>
            <?php } ?>
        </div>   
        
        <div <?php if (isset($erroCheckbox)) { echo 'class="erro-input input-group"'; } else { echo 'class="input-group"'; } ?>>
            <input type="checkbox" id="termos" name="termos" value="ok" required>
            <label for="termos">Ao se cadastrar você concorda com a nossa <a class="link" href="#">Política de Privacidade</a> e os <a class="link" href="#">Termos de uso</a></label>
        </div>  
       
        
        <button class="btn-blue" type="submit">Cadastrar</button>
        <a href="login.php">Já tenho uma conta</a>
    </form>
</body>
</html>