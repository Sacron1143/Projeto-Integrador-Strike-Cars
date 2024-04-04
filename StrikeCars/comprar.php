<?php
        require_once "cabecalho.php";
    ?>
<?php
if(isset($_POST['comprar'])) {
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $imagem = $_POST['imagem']; 


    echo "<h1>Compra Confirmada!</h1>";
    echo "<h2>Detalhes do Veículo:</h2>";
    echo "<p>Modelo: $modelo</p>";
    echo "<p>Ano: $ano</p>";
    echo "<p>Descrição: $descricao</p>";
    echo "<p>Preço: $preco</p>";
    echo "<img src='imagens/$imagem' alt='$modelo' style='max-width: 50%; height: align-center;'>";
} else {
    echo "<h1>Erro ao processar compra!</h1>";
    echo "<p>Por favor, volte e tente novamente.</p>";
}
?>
