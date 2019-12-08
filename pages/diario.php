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
    <div>
        <?php
        $diario = file_get_contents('../elements/diarioMariano.json');
        $diario = json_encode($diario);
        echo $diario{0};
        ?>
    </div>

    <?php
    include_once "footer.php";
    ?>
</body>
</html>
