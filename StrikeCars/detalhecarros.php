<?php
    require_once "cabecalho.php";
?>

<br>    
<section id="catalogo">
    <div class="padding_geral">
        <h2 class="mt-8 container">Catálogo de Veículos</h2>
        <p class="container"><b>Encontre o carro dos seus sonhos com transparência e os melhores preços.</b></p>
        <p class="container" style="margin-bottom:30px;">Compromisso de transparência, deixamos sempre claros os detalhes dos veículos, sem entrelinhas.</p>

        <?php
        // Array de veículos com seus detalhes
        $veiculos = array(
            
            array (
                "modelo" => "Toyota Corolla",
                "ano" => 2022,
                "descricao" => "Um sedan popular conhecido pela sua confiabilidade e economia de combustível.",
                "preco" => "R$ 85.000,00",
                "imagem" => "corolla.jpg",
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Toyota%20Corolla%20que%20vi%20no%20site."
                
            ),
            array(
                "modelo" => "Volkswagen Golf",
                "ano" => 2021,
                "descricao" => "Um hatchback esportivo com ótima dirigibilidade e tecnologia embarcada.",
                "preco" => "R$ 75.000,00",
                "imagem" => "Golf.jpg",
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Volkswagen%20Golf%20que%20vi%20no%20site."

            ),
            array(
                "modelo" => "Volkswagen Golf",
                "ano" => 2021,
                "descricao" => "Um hatchback esportivo com ótima dirigibilidade e tecnologia embarcada.",
                "preco" => "R$ 75.000,00",
                "imagem" => "Golf.jpg",
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Volkswagen%20Golf%20que%20vi%20no%20site."

            ),
            array(
                "modelo" => "Ford Mustang",
                "ano" => 2020,
                "descricao" => "Um ícone dos muscle cars, conhecido pelo seu poderoso motor e design marcante.",
                "preco" => "R$ 150.000,00",
                "imagem" => "mustang2.jpeg",
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Ford%20Mustang%20que%20vi%20no%20site."
            ),
            array(
                "modelo" => "Ford Ka",
                "ano" => 2020,
                "descricao" => "Um compacto versátil e econômico, ideal para uso urbano.",
                "preco" => "R$ 60.000,00",
                "imagem" => "fordka.jpg" ,
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Volkswagen%20Golf%20que%20vi%20no%20site."
            ),
          
            array(
                "modelo" => "Lamborghini",
                "ano" => 2023,
                "descricao" => "A Lamborghini de 2023 é um símbolo de velocidade, luxo e design italiano inigualável.",
                "preco" => "R$ 70.000,00",
                "imagem" => "lamborghini.jpg" ,
                "whatsapp" => "https://api.whatsapp.com/send?phone=55123456789&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20Honda%20Civic%20que%20vi%20no%20site."
            )         
            
        );
        
        // Loop pelos veículos para exibir suas informações
        foreach  ($veiculos as $veiculo) {
            echo "<div class='veiculo'>";
            echo "<img src ='imagens/{$veiculo ['imagem']}' alt='{$veiculo['modelo']}' >" ; 
            echo "<div class='info'>";
            echo "<h3>{$veiculo['modelo']}</h3>";
            echo "<p>Ano: {$veiculo['ano']}</p>";
            echo "<p>Preço: {$veiculo['preco']}</p>";
            echo "<p>{$veiculo['descricao']}</p>";
            echo "<form action='comprar.php' method='post'>";
            echo "<input type='hidden' name='modelo' value='{$veiculo['modelo']}'>";
            echo "<input type='hidden' name='ano' value='{$veiculo['ano']}'>";
            echo "<input type='hidden' name='descricao' value='{$veiculo['descricao']}'>";
            echo "<input type='hidden' name='preco' value='{$veiculo['preco']}'>";
            echo "<input type='hidden' name='imagem' value='{$veiculo['imagem']}'>";
            echo "<button type='submit' name='comprar' class='botao'>Comprar</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
        ?>

        <div class="clear"></div>
       
        
    </div>
</section>
<br>
<br>
<br>

<p style="text-align: center; font-weight: bold">A Strike Cars está disponível para clientes do Brasil e Portugal.</p>


<?php

    require_once "rodape.php";
?>
