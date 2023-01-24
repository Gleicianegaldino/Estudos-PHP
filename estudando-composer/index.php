<?php

//pra usar qualquer dependência instalada no composer
require __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>GERANDO PDF Hello world!</h1>');
$mpdf->Output();