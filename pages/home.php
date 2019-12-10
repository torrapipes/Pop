<!doctype html>
<html>
<?php
$page_title = 'Home';
$css = 'home';
include_once "head.php";
?>
<body>
    <?php
    include_once "header.php";
    ?>
    <div class="flex-container">
        <div class="flex-card">
            <img src="../img/diario.png" alt="diario">
            <div>
                <h2 class="card-title">Diario</h2>
                <p class="line">______________________________________________</p>
                <p class="card-text">Toda la actividad que ha tenido lugar en un periodo concreto</p>
                <a href="diario.php" class="card-btn">Visitar</a>
            </div>
        </div>
        <div class="flex-card">
            <img src="../img/correlaciones.png" alt="correlaciones">
            <div>
                <h2 class="card-title">Correlaciones</h2>
                <p class="line">______________________________________________</p>
                <p class="card-text">Relación de cada evento con las transformaciones en pulpo</p>
                <a href="phi.php" class="card-btn">Calcular</a>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>

