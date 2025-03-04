<?php

include_once("salvar_musica.php");

//Array que armazena os livros já salvos no arquivo JSON
$musicas = buscarDados("musicas.json");

$msgErro = "";
$nomeM = "";
$cantor = "";
$compositor = "";
$genero = "";

//Verificar se o usuário já submeteu o formulário
if(isset($_POST["nomeM"])) {
    $nomeM = $_POST["nomeM"];
    $cantor = $_POST["cantor"];
    $compositor = $_POST["compositor"];
    $genero = $_POST["genero"];

    //Validar os dados informados pelo usuário
    $mensagens = array();
    if($nomeM == "")
        array_push($mensagens, "Informe o nome da música!");
    if($cantor == "")
        array_push($mensagens, "Informe o cantor!");
    if($compositor == "")
        array_push($mensagens, "Informe o compositor!");
    if($genero == "")
        array_push($mensagens, "Informe o gênero musical!");
     
    if(!$mensagens){
        $id = vsprintf( '%s%s-%s-%s-%s-%s%s%s',
        str_split(bin2hex(random_bytes(16)), 4) ); 

        $musica = array("id"  => $id,
                    "nomeM" => $nomeM,
                    "cantor"  => $cantor,
                    "compositor" => $compositor,
                    "genero" => $genero);

        array_push($musicas, $musica);

        print_r($musicas);

        //Persistência dos dados no arquivo JSON
        salvarDados($musicas, "musicas.json");

        //Redirecionar para evitar o reenvio do formulário
        header("location: musicas.php");
    } else
        $msgErro = implode("<br>", $mensagens);
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de músicas</title>
</head>
<body>


    <h1 style="color: blueviolet;">Cadastro de músicas</h1>

    <h3 style="color: blueviolet;">Formulário musical</h3>

    <form method="POST" action="">
    <!--form method="POST" action="" onsubmit="return validarDados();"-->
        <input type="text" name="nomeM" id="nomeM"
            placeholder="Informe o nome da música" 
            value="<?php echo $nomeM; ?>"
            style="border-radius: 2px;">

        <br><br>
        
        <input type="text" name="cantor" id="cantor"
            placeholder="Informe o cantor"
            value="<?php echo $cantor; ?>"
            style="border-radius: 2px;">

        <br><br>

        <input type="text" name="compositor" id="compositor"
            placeholder="Informe o compositor" 
            value="<?php echo $compositor; ?>"
            style="border-radius: 2px;">

    <br><br>

        <select name="genero" id="genero" >
            <option value="">---Selecione o gênero---</option>
            <option value="P" <?php echo  ( $genero == "P" ? "selected" : ""); ?> >
                Pop</option>
            <option value="R"  <?php echo  ( $genero == "R" ? "selected" : ""); ?> >
                Rock</option>
            <option value="H"  <?php echo  ( $genero == "H" ? "selected" : ""); ?> >
                Hip-hop</option>
            <option value="M"  <?php echo  ( $genero == "M" ? "selected" : ""); ?> >
                MPB</option>
            <option value="O"  <?php echo  ( $genero == "O" ? "selected" : ""); ?> >
                Outros</option>
        </select>

        <br><br>

        <button>Cadastrar</button>

    </form>

    <div id="divMsg" style="color: red;">
        <?php echo $msgErro; ?>
    </div>

    <h3 style="color: blueviolet;">Listagem</h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome da música</th>
            <th>Cantor</th>
            <th>Compositor</th>
            <th>Gênero musical</th>
            <th></th>
        </tr>

        <!-- Dados das músicas -->
        <?php foreach($musicas as $m): ?>
            <tr>
                <td><?php echo $m["id"]; ?></td>
                <td><?php echo $m["nomeM"]; ?></td>
                <td><?php echo $m["cantor"]; ?></td>
                <td><?php echo $m["compositor"]; ?></td>
                <td>
                    <?php 
                        switch($m["genero"]) {
                            case "P":
                                echo "Pop";
                                break;

                            case "R":
                                echo "Rock";
                                break;

                            case "H":
                                echo "Hip-hop";
                                break;

                            case "M":
                                echo "MPB";
                                break;

                            case "O":
                                    echo "Outros";
                                    break;

                            default:
                                echo $m["genero"];

                        } 
                    ?>
                </td>
                <td><a href="exc_musica.php?id=<?php echo $m['id'] ?>"
                        onclick="return confirm('Confirma a exclusão dessa música');" >
                        Excluir</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <script src="validar.js"></script>
</body>
</html>