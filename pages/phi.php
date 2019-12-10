<!doctype html>
<html>
<?php
$page_title = 'Correlaciones';
$css = 'phi';
include_once "head.php";
?>
<body>
    <?php
    include_once "header.php";

    echo '<h2>Correlaciones</h2>';
    echo '<script>
                if(checkPrecondiciones(DIARIO)){
                    var list = leerDiario(DIARIO);
                    var correlaciones = new Map();
                    
                    for(item of list){
                        correlaciones.set(item[0],phi(item[1].matriu));
                    };
                    
                    function listarCorrelaciones() {
                        var div = document.createElement("div");
                        div.className = "correlacion";
                        var dl =document.createElement("dl");
                        for(e of correlaciones){
                          var dd = document.createElement("dd");
                          dd.className = "graphicPhi";
                          dd.title = e[1];
                          var span = document.createElement("span");
                          span.className = "nombreEvento";
                          var nombreE = document.createTextNode(e[0].split("_").join(" ") );
                          span.appendChild(nombreE);
                          dd.appendChild(span);
                          dl.appendChild(dd);
                          div.appendChild(dl);
                          }
                        document.body.appendChild(div);
                    }
                    listarCorrelaciones();  
                    var id = 0;
                    for(e of correlaciones){
                        var width = (e[1] - (-1)) * ((50-0)/1+1).toString() + "%";
                        document.getElementsByClassName("graphicPhi")[id].style.width = width;
                        if((e[1] - (-1)) * ((50-0)/1+1) > 57.9){
                            document.getElementsByClassName("graphicPhi")[id].style.background = "#4D186C";
                        }else{
                            document.getElementsByClassName("graphicPhi")[id].style.background = "#704070";
                        }
                        id++;
                    }
                }
                
            </script>';

    include_once "footer.php";
    ?>

</body>
</html>
