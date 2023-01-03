<?php

include __DIR__ . '/style.php';


echo '<h1> Questão 1: Crie um programa para cadastrar 10 registros (em uma matriz). </h1>';

$arr_cars = [
    [
        'n_Registro' => 0,
        'Modelo' => 'Uno',
        'Fabricante' => 'Fiat',
        'Cor' => 'prata',
        'Qtt_Portas' => 4,
        'Ano' => 2018,
    ],
    [
        'n_Registro' => 1,
        'Modelo' => 'Fiesta',
        'Fabricante' => 'Ford',
        'Cor' => 'preto',
        'Qtt_Portas' => 2,
        'Ano' => 2016,
    ],
    [
        'n_Registro' => 2,
        'Modelo' => 'Doblo',
        'Fabricante' => 'Fiat',
        'Cor' => 'verde',
        'Qtt_Portas' => 4,
        'Ano' => 2013,
    ],
    [
        'n_Registro' => 3,
        'Modelo' => 'Celta',
        'Fabricante' => 'GM',
        'Cor' => 'preto',
        'Qtt_Portas' => 2,
        'Ano' => 2012,
    ],
    [
        'n_Registro' => 4,
        'Modelo' => 'March',
        'Fabricante' => 'Nissan',
        'Cor' => 'prata',
        'Qtt_Portas' => 2,
        'Ano' => 2016,
    ],
    [
        'n_Registro' => 5,
        'Modelo' => 'Cobalt',
        'Fabricante' => 'GM',
        'Cor' => 'branco',
        'Qtt_Portas' => 2,
        'Ano' => 2012,
    ],
    [
        'n_Registro' => 6,
        'Modelo' => 'Ranger',
        'Fabricante' => 'Ford',
        'Cor' => 'prata',
        'Qtt_Portas' => 4,
        'Ano' => 2018,
    ],
    [
        'n_Registro' => 7,
        'Modelo' => 'Trail Blazer',
        'Fabricante' => 'GM',
        'Cor' => 'branco',
        'Qtt_Portas' => 4,
        'Ano' => 2020,
    ],
    [
        'n_Registro' => 8,
        'Modelo' => 'Ecosport',
        'Fabricante' => 'Ford',
        'Cor' => 'preto',
        'Qtt_Portas' => 4,
        'Ano' => 2018,
    ],
    [
        'n_Registro' => 9,
        'Modelo' => 'Tucson',
        'Fabricante' => 'Hyundai',
        'Cor' => 'vinho',
        'Qtt_Portas' => 4,
        'Ano' => 2020,
    ],
];

//Impressão da Array $arr_cars por completa.
echo ' <pre> ';
echo '<h2>Impressão da Array <code>$arr_cars</code> por completa.</h2>';
echo  '<br><br>';
print_r($arr_cars);
echo ' </pre> ';


//Impressão da letra 'a'.
$Modelo_Ano = array_column($arr_cars, 'Ano', 'Modelo');

echo '<pre>';
echo '<h2>a)Todos os modelos e os anos dos veículos.</h2>';
echo  '<br><br>';
print_r($Modelo_Ano);
echo '</pre>';

//Impressão da letra 'b'.
$result = [];
foreach ($arr_cars as $row) {
    if (in_array($row['Cor'], ['prata'])) {
        $result[strtolower($row['Cor'])][] = $row;
    }
}

echo '<pre>';
echo '<h2>b)Todos os veículos cor prata.</h2>';
echo  '<br><br>';
print_r($result);
echo '</pre>';

//Impressão da letra 'c'.
echo '<pre>';
echo '<h2>c)Todos os veículos, cor e quantidade de portas <br></h2>';
foreach ($arr_cars as $row) {

    echo  '<br><br>';
    print_r('Modelo: ' . $row['Modelo'] . " - Cor: " . $row['Cor'] . " - Quantidade de Portas: " . $row['Qtt_Portas'] . '<br>');
}

echo '</pre>';



//Impressão da letra 'd'.
$Ford = [];
foreach ($arr_cars as $row) {
    if (in_array($row['Fabricante'], ['Ford'])) {
        $Ford[strtolower($row['Fabricante'])][] = $row;
    }
}
echo '<pre>';
echo '<h2>d)Todos os veículos da Ford.</h2>';
echo  '<br>  <br>';
print_r($Ford);
echo '</pre>';

//Impressão da letra 'e'.

echo '<pre>';
echo '<h2>e)Todos os veículos com ano de fabricação igual ou superior a 2015.</h2>';
echo  '<br>  <br>';
foreach ($arr_cars as $row) {
    if ($row['Ano'] >= 2015) {
        print_r('Modelo: ' . $row['Modelo'] . " - Ano: " . $row['Ano'] . '<br><br>');
    }
}
echo '</pre>';
