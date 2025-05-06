<?php
//estrutura do PHP


//tipos de dados

$nome = "jorge";
$idade = 18;
$altura = 3.57;
$peso = 10;
$vacinada = true;

if($idade >= 18){
    echo "$nome, é maior de idade e possui $idade anos";
}else{
    echo"$nome, é menor de idade e possui $idade anos";
}

echo "<br>LAÇOS<br>";

for($i = 1; $i <= 100; $i++){
    if($i %2== 0 ){
        echo "$i par <br>";
    }
    else{
        echo "$i impar <br>";
    }
}
?>