<?php
    include_once('config.php');

    if(isset($_POST['buscaProduto']))
    {
        $marcaTenis = $_POST['buscaProduto'];
        $sql_busca = "SELECT * FROM tenis WHERE marcaTenis = '$marcaTenis'";
    }
    else
    {
        $sql_busca = "SELECT * FROM tenis ORDER BY marcaTenis";
    }

    $result = $conexao->query($sql_busca);

    if($numRows>0)
    {
        while($busca_data = mysqli_fetch_assoc($result))
        {
            $data = '<p>'.$busca_data['marcaTenis'].'</p>';
        }
    }
    else
    {
        $data = '<p>Produto nao encontrado !! :(</p>';
    }
    echo $marcaTenis
?>