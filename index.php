<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Login</title>
</head>
<header><h1>Login do Usuário</h1></header>
<body>
    <div class="area">
    <form id="form" action="php/processa.php" method="POST"> 
    
        <label for="name">Email do usuário: </label>
        <input type="text" name="email" placeholder="Digite seu email">
   
    
        <br><br><label for="pass">Senha do usuário: </label>
        <input type="password" name="passw" placeholder="Digite sua senha">
    
    <br><br><button class="butao" name="login">Logar</button>
    </form>
    </div>
</body>
</html>