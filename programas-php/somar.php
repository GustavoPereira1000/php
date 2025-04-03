<!DOCTYPE html>
<html lang="pt-BR">
    <body>
        <form method="GET">
            
            <h1>Soma</h1>


            <input placeholder="Digite um valor" type="number" name="n1" required> 
            <input placeholder="Digite o outro valor"  type="number" name="n2" required>
            <button type="submit">Somar</button>
        </form>

        <?php
        function somar($a, $b) {
            return $a + $b;
        }

        if (isset($_GET['n1']) && isset($_GET['n2'])) {
            $x = (int) $_GET['n1'];
            $y = (int) $_GET['n2'];
            $resultado = somar($x, $y);
            echo "<p>Resultado: $resultado</p>";
        }

        ?>
    </body>
</html>
