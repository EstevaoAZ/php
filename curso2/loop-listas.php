<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

echo "O tamanho da lista é:" . sizeof($idadeList);

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
