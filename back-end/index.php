<?php

$servername = "localhost";
$username = "root";
$passwd = "";
$dbname = "usuario";

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$connection = new mysqli($servername,$username,$passwd,$dbname);

if($connection->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

$sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$usuario','$email','$senha')";

if($connection->query($sql)===TRUE) {
    echo "Sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $connection->error;
}


    echo '
    <img height="100" width="140" src="https://lh6.googleusercontent.com/proxy/KkmqQryciWg2LFCzfFFvYz0O_TxyiYQKUHouMlAC6dLPwVmrnTt_3CImtS-2jGlJMbHfbdHT-LYvj7udITgdUBombpjPJOMGpxWsEysRY2VJDXMLVg" alt="UDESC">
    ';



    echo ("<h1>Nome: ".$_POST['usuario']."</h1>");
    echo ("<h1>E-mail: ".$_POST['email']."</h1>");
    echo ("<h1>Senha: ".$_POST['senha']."</h1>");
    //echo '<img src="https://lh6.googleusercontent.com/proxy/KkmqQryciWg2LFCzfFFvYz0O_TxyiYQKUHouMlAC6dLPwVmrnTt_3CImtS-2jGlJMbHfbdHT-LYvj7udITgdUBombpjPJOMGpxWsEysRY2VJDXMLVg" alt="UDESC">';