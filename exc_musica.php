<?php

include_once("salvar_musica.php");

//1- Capturar o ID recebido por GET
$id = "";
if(isset($_GET['id']))
    $id = $_GET['id'];

//1.1- Validar se o ID foi enviado na requisição
if(! $id) {
    echo "ID da música não informado!<br>";
    echo "<a href='musicas.php'>Voltar</a>";
    exit;
}

//2- Carregar os livros do arquivo JSON como um array
$musicas = buscarDados("musicas.json");
//print_r($livros);

//3- Encontrar o índice do livro no array (procurar pelo ID recebido)
$idMExcluir = 0;
for($i=0; $i<count($musicas); $i++) {
    if($musicas[$i]['id'] == $id) {
        $idMExcluir = $i;
        break;
    }
}

//3.1- Validar se o ID corresponde a um dos livros salvo no JSON
if(! $idMExcluir) {
    echo "ID da música não encontrado!<br>";
    echo "<a href='musicas.php'>Voltar</a>";
    exit;
}

//4- Excluir o livro do array
array_splice($musicas, $idMExcluir, 1);

//5- Salvar o array como JSON
salvarDados($musicas, "musicas.json");

//6- Redirecionar para o formulário de livros
header("location: musicas.php");