<?php

/*$carros = ['ferrari', 'bmw', 'mercedes'];

print_r($carros);

print_r($carros[1]);
*/

/*
$endereco = [
'cep' => '454546',
'cidade' => 'paulista',
'numero' => '1234567',
'estado' => 'pe'

];


print_r($endereco['cep']);
*/


$enderecoPessoas = [

    'pessoa1' => array (
        'cep' => '4545454',
        'cidade' => 'recife'
    ),
    'pessoa2' => [
        'cep' => '121231231',
        'cidade' => 'paulista'
        ]
];

if(isset($enderecoPessoas['pessoa1']['cidade'])){

    print_r($enderecoPessoas['pessoa1']['cep']);
}else {
    echo "chave inválida";
}

//print_r($enderecoPessoas);

//print_r($enderecoPessoas['pessoa1']);

//print_r($enderecoPessoas['pessoa1']['cep']);

?>