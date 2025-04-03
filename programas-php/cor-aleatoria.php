<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuleiro de Cores</title>
    <style>
        td {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <table width="100%" border="1">
        <?php
            for($i = 0; $i < 250; $i += 5) {
                echo("<tr>");
                for($j = 0; $j < 250; $j += 5) { // Alterado de 250 para 255 para preencher corretamente
                    $r = random_int(0, 255); 
                    $g = random_int(0, 255);
                    $b = random_int(0, 255); 
                    $cor = "rgb($r,$g,$b)";
                    echo("<td style='background-color:$cor'>&nbsp;</td>"); 
                }
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>
