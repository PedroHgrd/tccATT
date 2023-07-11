<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="page">
        <form method="POST" action="tela_inicial.php" class="formLogin">
            <div class="facalogin">
            <h1>Faça Login</h1>
            </div>
            <label for="Usuario">Usuario</label>
            <input type="usuario" placeholder="Informe o usuario" autofocus="true" required />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha"  required/>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>