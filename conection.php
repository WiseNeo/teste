<?php


// Conexão MySqli
/*
$host ="localhost";
$usuario="root";
$senha= "";
$bd="testephp";

$msqli = new mysqli($host,$usuario,$senha,$bd);

//verificar se há erro

if ($msqli->connect_errno){
    echo "Falha na conexão: (".$msqli->connect_errno.")".$msqli->connect_errno;
}

*/

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testephp","root","");
}catch(PDOException $e){
    //echo $e->getMessage();
    var_dump($e);
}
?>