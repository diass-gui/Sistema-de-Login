<?php 

$username = "root";
$password = ""; 

try {
    //estabelecendo conexão com o BD
    $conn = new PDO("mysql:host=localhost;dbname=tllogin", $username, $password);
    //echo "A conexão com o banco de dados foi estabelecida com sucesso!";
} catch(PDOException $e) {
    echo "a conexão com o banco de dados não foi estabelecida." . $e->getMessage();
}
?>