<!doctype html>
<html>
<?php
$page_title = 'Diario';
$css = 'diario';
include_once "head.php";
?>
<body>
    <?php
    include_once "header.php";
    ?>
        <?php
        $diarioJson = file_get_contents('../elements/diarioMariano.json');
        $diario = json_decode($diarioJson, true);

        echo '<div class="diario">';
        for($mes=1; $mes <= sizeof($diario)/30; $mes++) {
            $long = 30*$mes;
            $diaActual = 1;
            echo '<div class="mes">';
                echo '<p class="mesTitle">Mes ' . $mes . '</p>';
                for ($dia = $long-30; $dia < $long; $dia++) {
                    echo '<p class="diaTitle"> Dia ' . $diaActual . '</p>';
                    echo '<div class="diaContent"><div class="eventos">';
                    foreach ($diario[$dia]['eventos'] as $evento) {
                        echo '<p class="evento">' . $evento . '</p>';
                    }
                    $diaActual++;
                    echo '</div>';
                    $pulpo = ($diario[$dia]['pulpo']) ? 'pulpito.gif' : 'mariano.gif';
                    echo '<div class="trans"><img src="../img/'. $pulpo . '"/></div></div>';
                }
            echo '</div>';
        }
        echo '</div>';
        ?>

    <?php
    include_once "footer.php";
    ?>
</body>
</html>
