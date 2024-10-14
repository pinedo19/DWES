<?php
define('dado1', "&#9856;");
define('dado2', "&#9857;");
define('dado3', "&#9858;");
define('dado4', "&#9859;");
define('dado5', "&#9860;");
define('dado6', "&#9861;");

function tiradaj1() {
    $dados = [];
    $valores = [];

    for ($i = 0; $i < 5; $i++) {
        $j1 = rand(1, 6);
        switch ($j1) {
            case 1:
                $dados[] = dado1;
                $valores[]=1;
                break;
            case 2:
                $dados[] = dado2;
                $valores[]=2;
                break;
            case 3:
                $dados[] = dado3;
                $valores[]=3;
                break;
            case 4:
                $dados[] = dado4;
                $valores[]=4;
                break;
            case 5:
                $dados[] = dado5;
                $valores[]=5;
                break;
            case 6:
                $dados[] = dado6;
                $valores[]=6;
                break;
            default:
                echo "Tirada no válida";
                break;
        }
    }
    
    sort($valores);
    $valores = array_slice($valores, 1, -1);

    return [$dados, $valores];
}

function tiradaj2() {
    $dados = [];
    $valores = [];

    for ($i = 0; $i < 5; $i++) {
        $j2 = rand(1, 6);
        switch ($j2) {
            case 1:
                $dados[] = dado1;
                $valores[]=1;
                break;
            case 2:
                $dados[] = dado2;
                $valores[]=2;
                break;
            case 3:
                $dados[] = dado3;
                $valores[]=3;
                break;
            case 4:
                $dados[] = dado4;
                $valores[]=4;
                break;
            case 5:
                $dados[] = dado5;
                $valores[]=5; 
                break;
            case 6:
                $dados[] = dado6;
                $valores[]=6;
                break;
            default:
                echo "Tirada no válida";
                break;
        }
    }
    sort($valores);
    $valores = array_slice($valores, 1, -1);
    return [$dados, $valores];
}

