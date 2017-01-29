<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>

    <pre>
<?php

$cpf = "77568893120";
$num = strlen($cpf);
$valida = str_split($cpf);
unset($valida[10]);
unset($valida[9]);
$soma =0;
$x =10;

//echo $x;

for ($i =0; $i < 9;$i++){
    echo "o numero :".$valida[$i]." <br/><br/>";
    $soma = $valida[$i] * $x;
    echo "o numero [". $valida[$i] ."] x ".$x." é igual a = ".$soma."<br/><br/>";
    $primeiro_digito[]= $soma;
    $x = $x - 1;
}
// exibir a validação do primeiro digíto

print_r ($primeiro_digito);

$val_dig1 = array_sum($primeiro_digito);
echo "a soma dos valores do array é: ".$val_dig1." <br/><br/>";

if ($val_dig1%11 < 2){
    $valida[9]=0;}

else{
    $valida[9]= abs(($val_dig1%11)-11);

}
// adiciona o primeiro digito no vetor e testa se é valido ou não, conforme o digitado pelo usuario

print_r($valida);

$num = substr($cpf,-2,1);

echo "------------->".$num;

if ($valida[9] != $num){
    echo "CPF INVALIDO!";}

else{
    $x =11;
    for ($i =0; $i < 10;$i++){
        echo "o numero :".$valida[$i]." <br/><br/>";
        $soma = $valida[$i] * $x;
        echo "o numero [". $valida[$i] ."] x ".$x." é igual a = ".$soma."<br/><br/>";
        $segundo_digito[]= $soma;
        $x = $x - 1;
    }
}
print_r($segundo_digito);

$val_dig2 = array_sum($segundo_digito);
echo "a soma dos valores do array é: ".$val_dig2." <br/><br/>";

if ($val_dig2%11 < 2){
    $valida[10]=0;}

else{
    $valida[10]= abs(($val_dig2%11)-11);
}
print_r($valida);

$num = substr($cpf,-1);

echo "------------->".$num." <br/><br/>";

if ($valida[10] != $num){
    echo "CPF INVALIDO!";

}else{
    echo "CPF VALIDO!";
}

?>
    </pre>
</body>
</html>