<?php 
//incluir arquivo de conexão
require_once "configBD.php";

//definindo variáveis 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

//processando dados do formulário
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //validando nome do usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    }  elseif(!preg_match('/^[a-zA-Z0-9_]+$', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        //preparando declaração
        $sql = "SELECT id FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            //vinculando variáveis à instrução
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            //definindo parâmetros
            $param_username = trim($_POST["username"]);

            //executando
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Algo deu errado! Por favor, tente novamente mais tarde.";
            }

            //fechando declaração
            unset($stmt);
        }
    }

    //validando senha

}