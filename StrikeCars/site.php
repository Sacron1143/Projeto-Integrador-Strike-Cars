<?php
    require_once "cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strike Cars</title>
</head>
<body>
    <div class="container">
        <section id="banner">
            <div  id="leftBanner" style="text-align: center; font-weight: bold">
                <img src="strikecars3.jpg" width="400" class="mb-3 foto">
                <h1 class="text-center" id="mainTitle">Strike Cars</h1>
                <h2 class="text-center" id="mainTittle">Encontre os melhores veículos para você!</h2>
                <div class="car-info">
                    <div class="car-info-left">
                        
                </div>
            </div>
        </section>

        <section id="mais-vendidos" class="carros" >
            <div class="padding_geral">
                <h2 class="titulos mb-5 mt-5">Carros Mais Vendidos</h2>
                <div class="carros-vendidos">
                    <div class="carro">
                        <img src="../imagens/corolla.jpg" class="mb-3 foto" alt="Toyota Corolla" width="400">
                        <div class="info-carro">
                            <h3>Toyota Corolla</h3>
                            <p><b>Ano: 2022</b></p>
                            <p>Preço: R$ 85.000,00</p>
                            <p>Descrição: Um sedan popular conhecido pela sua confiabilidade e economia de combustível.</p>
                            <a href="detalhecarros.php" class="botao">Ver Detalhes</a>
                        </div>
                    </div>
                    <div class="carro">
                        <img src="../imagens/lamborghini.jpg" class="mb-3 foto" alt="Lamborghini" width="400">
                        <div class="info-carro">
                            <h3>Lamborghini 2023</h3>
                            <p>Ano: 2023</p>
                            <p>Preço: R$ 70.000,00</p>
                            <p>Descrição: Um hatchback popular com ótimo custo-benefício e tecnologia embarcada.</p>
                            <a href="detalhecarros.php" class="botao">Ver Detalhes</a>
                        </div>
                    </div>
                    <div class="carro">
                        <img src="../imagens/fordka.jpg" class="mb-3 foto" alt="Ford Ka" width="400">
                        <div class="info-carro">
                            <h3>Ford Ka</h3>
                            <p>Ano: 2020</p>
                            <p>Preço: R$ 60.000,00</p>
                            <p>Descrição: Um compacto versátil e econômico, ideal para uso urbano.</p>
                            <a href="detalhecarros.php" class="botao">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Interessado em algum veículo? Clique no botão abaixo<br>👇</h4>
                <p style="margin-top:50px;"><a href="detalhecarros.php" target="_blank" class="botao" data-lity>Ver Veículos Disponíveis</a></p>
        </section>

        <h5>Alguma dúvida? Entre em contato!<br></h5>
        <p style="margin-top:50px;"><a href="contato.php" target="_blank" class="botao" data-lity>Entrar em contato!</a></p>
        <section id="Contato">
            <div class="padding_geral contato">
                <h2>Contato </h2>
                <p>Tem alguma dúvida? Entre em contato conosco.</p>
                <input name="nome" type="text" class="camposContato2" id="nome" maxlength="400" placeholder="Nome" require/>
                <div class="clear"></div>
                <input name="email2" type="text" class="camposContato2" id="email2" maxlength="400" placeholder="E-mail" require/>
                <div class="clear"></div>
                <textarea name="msg" cols="45" rows="5" class="camposContato" id="msg" placeholder="Mensagem"></textarea>
                <p id="status2">&nbsp;</p>
                <a href="./sobre.php"><button type="submit">Enviar</button></a>
            </div>
        </section>

</div>
    <?php
        require_once "rodape.php";
    ?>

</body>
</html>
