<?php
$categorias = [];
$categorias [] = 'Infantil';
$categorias [] = 'Adolescente';
$categorias [] = 'Adulto';
$categorias [] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo "NOME NAO PODE SER VAZIO";
    return;
}
if(strlen($nome) < 3){
    echo"NOME NAO PODE SER TAO CURTO";
    return;
}
if(strlen($nome) > 40){
    echo"NOME NAO PODE SER TAO LONGO";
    return;
}
if(!is_numeric($idade)){
    echo "INSIRA UMA IDADE VALIDA";
    return;
}


if ($idade >= 0 && $idade <= 3) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Infantil')
            echo "O PET: " . $nome. "será cadastrado como um PET  " . $categorias[$i];
    }
} else if ($idade >= 4 && $idade <= 6) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adolescente')
            echo "O PET: " . $nome . "será cadastrado como um pet  " . $categorias[$i];
    }
} else if ($idade >= 7 && $idade <= 10) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adulto')
            echo "O PET: " . $nome . "será cadastrado como um pet  " . $categorias[$i];
    }

} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Idoso')
            echo "O PET: " . $nome . "será cadastrado como um pet  " . $categorias[$i];
    }
}
