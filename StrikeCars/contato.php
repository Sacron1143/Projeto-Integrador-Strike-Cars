<?php
    require_once "cabecalho.php";
?>

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