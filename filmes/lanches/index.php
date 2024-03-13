<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rato Food</title>
</head>
<body>
    <h1>Cardápio</h1>
    <form method="post" action="save.php">
        <fieldset>
            <legend>Lanches</legend>

            <input type="checkbox" name="burguer_simples"> Hanburguer Simples <br>
            <input type="checkbox" name="x-burguer"> X-Burguer <br>
            <input type="checkbox" name="misto_quente"> Misto Quente <br>
            <input type="checkbox" name="pizza_calabresa"> Pizza Calabresa <br>
            <input type="checkbox" name="pizza_portuguesa"> pizza Portuguesa <br>
            <input type="checkbox" name="pizza_4_queijos"> Pizza 4 Qeijos <br>
            <input type="checkbox" name="pizza_muzzarela"> Pizza Muzzarela<br>
            <input type="checkbox" name="pizza_acai_com_charque"> Pizza Açaí Com Charque<br>
        </fieldset>

        <fieldset>
            <legend>Bebidas</legend>
            <input type="checkbox" name="coca-cola_2l"> Coca-Cola 2 L <br>
            <input type="checkbox" name="coca-cola_1l"> Coca-Cola 1 L<br>
            <input type="checkbox" name="coca-cola_latinha"> Coca_cola Latinha<br>
            <input type="checkbox" name="guarana_1l"> Guaraná 1 L<br>
            <input type="checkbox" name="guarana_latinha"> Guaraná Latinha<br>
            <input type="checkbox" name="soda_latinha"> Soda Limonada Latinha<br>
            <input type="checkbox" name="fanta_uva_latinha"> Fanta Uva Latinha <br>
            <input type="checkbox" name="fanta_laranja_latinha"> Fanta Laranja Latinha <br>

        </fieldset>
    



        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>