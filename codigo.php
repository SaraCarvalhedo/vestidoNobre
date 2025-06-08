<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/woman-clothes.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <?php
            $user_c = "etc@gmail.com";
            $senha_c = 12345678;

            $user = $_POST["user"];
            $senha = $_POST["senha"];

            if($user== $user_c && $senha==$senha_c)
            {
                echo "Você já pode aproveitar as ofertas!";
            }
            else
            {
                echo "Infelizmente os dados estão incorretos!Tente novamente!";
            }
        ?>   
    </main>
    
    <button class = "button01 " onclick = "javascript:history.go(-1)">Voltar</button>
</body>
</html>

