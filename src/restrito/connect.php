<?php

$server = "172.19.0.2:3306";
$user = "root";
$password = "root";
$bd = "empresa";


if ($conn = mysqli_connect($server, $user, $password, $bd)) {
    // echo "Conectado.";
} else
    echo "Erro na conexão.";


function mensagem($texto, $tipo) {
    echo "<div class='alert alert-success' role='alert'>
        $texto
        </div>";
}

function corrige_data($data){
    $data_invertida = explode('-', $data);
    $data_corrigida = $data_invertida[2] ."/" .$data_invertida[1] ."/" .$data_invertida[0];
    return $data_corrigida;
}

function mover_foto($vetor_foto) {
    $imagemtipo = explode("/", $vetor_foto['type']);
    $tipo = $imagemtipo[0] ?? '';
    $extensao = "." .$imagemtipo[1] ?? '';
    if ((!$vetor_foto['error']) and ($vetor_foto['size'] <= 500000) and ($tipo == "image")) {
        $nome_arquivo = date('Ymdhms') .$extensao;
        move_uploaded_file($vetor_foto['tmp_name'], "img/".$nome_arquivo);
        return $nome_arquivo;
    } else {
        return 0;
    }
}

?>