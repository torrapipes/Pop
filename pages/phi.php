<!doctype html>
<html>
<?php
$page_title = 'Correlaciones';
$css = 'phi';
include_once "head.php";
?>
<body>
    <?php include_once "header.php";?>

    <h2>Correlaciones</h2>
    <script>
                if (checkPrecondiciones(DIARIO)) {

                    var list = leerDiario(DIARIO);
                    var correlaciones = new Map();

                    // calculamos el coeficiente phi de cada evento y lo guardamos en el Map
                    for (item of list) {
                        correlaciones.set(item[0], phi(item[1].matriu));
                    };

                    listarCorrelaciones(correlaciones);

                }
                
    </script>

  <?php  include_once "footer.php";?>

</body>
</html>
