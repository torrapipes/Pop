/**
 * Función que lista las correlaciones mediante la creación dinámica de los elementos html
 * @param correlaciones
 */
function listarCorrelaciones(correlaciones) {

    var div = document.createElement("div");
    var dl = document.createElement("dl");
    var id = 0;

    div.className = "correlacion";


    for (let e of correlaciones) {

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

    // una vez creados, generamos dinámicamente el width de cada evento segun su correlación mediante una fórmula
    for (let e of correlaciones) {

        var width = (e[1] - (-1)) * ((50-0)/1+1).toString() + "%";

        document.getElementsByClassName("graphicPhi")[id].style.width = width;

        // destacamos los 3 eventos más importantes
        if ((e[1] - (-1)) * ((50-0)/1+1) > 57.9) {
            document.getElementsByClassName("graphicPhi")[id].style.background = "#4D186C";
        } else {
            document.getElementsByClassName("graphicPhi")[id].style.background = "#704070";
        }

        id++;

    }

}