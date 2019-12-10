


var diarioMariano2 = [
    { "eventos": ["mejillones", "caminar", "siesta con La Vuelta"], "pulpo": false },
    { "eventos": ["pan de millo"], "pulpo": false },
    { "eventos": ["mejillones", "chinchos", "me lave los dientes", "Panorama", "siesta con La Vuelta"], "pulpo": true }
];


/**
 * Función que recorre el diario y crea matrices dinámicamente
 */
function leerDiario(diario) {

    try {
        var lista_eventos = new Map();
        var numDias = 0; // Número de días que HAN PASADO
        var numPulpo = 0; // Numero de veces que pulpo HA SIDO TRUE

        for (const dia of diario) {

            var eventosDia = new Array(); // Lista de eventos que ocurren un día determinado. Se construye cada día.

            for (const evento of dia.eventos) {

                // Construimos el nombre del evento y lo incluimos en la lista de eventos de ese día
                var nombre_evento = evento.split(" ").join("_");
                eventosDia.push(nombre_evento);

                // Si el evento no existe...
                if (!lista_eventos.get(nombre_evento)) {

                    var objeto_evento = {
                        matriu: new Array(new Array(), new Array())
                            /*phi: phi()*/
                    };

                    // Incluimos el evento con su objeto en el map
                    lista_eventos.set(nombre_evento, objeto_evento);

                    // Inicializamos la matriz
                    lista_eventos.get(nombre_evento).matriu[0][0] = numDias - numPulpo;
                    lista_eventos.get(nombre_evento).matriu[0][1] = 0;
                    lista_eventos.get(nombre_evento).matriu[1][0] = numPulpo;
                    lista_eventos.get(nombre_evento).matriu[1][1] = 0;

                }

                if (dia.pulpo) {
                    lista_eventos.get(nombre_evento).matriu[1][1] += 1;
                } else {
                    lista_eventos.get(nombre_evento).matriu[0][1] += 1;
                }

            }

            // Comprobamos que eventos no han estado presentes en ese día
            for (const item of lista_eventos) {

                var nombre_item = item[0];

                if (!eventosDia.includes(nombre_item)) {

                    if (dia.pulpo) {
                        lista_eventos.get(nombre_item).matriu[1][0] += 1;
                    } else {
                        lista_eventos.get(nombre_item).matriu[0][0] += 1;
                    }

                }

            }

            // Contabilizamos los días totales
            numDias += 1;

            // Contabilizamos los días que se ha convertido en pulpo
            if (dia.pulpo) {
                numPulpo += 1;
            }

        }

        return lista_eventos;

    } catch (error) {
        console.log("Error en leerDiario: " + error);
        throw error;
    }

}

function mapToJson(map) {
    var mapJson = JSON.stringify(map);
    return mapJson;
}


/**
 * Precondiciones para la estructura de datos
 *  
 * Tendrá que ser un objeto con 2 propiedades llamadas eventos y pulpo
 * La propiedad pulpo tendrá que contener un booleano
 * La propiedad de eventos tendrá que contener una numero indefinido de strings  
 * 
 * Quedará así ["eventos":[""], "pulpo":false/true]
 * 
 * Función que recorre la estructura de datos para comprobar
 * que esta cumple con las precondiciones 
 * @param {*} estructuraDeDatos
 * */
function checkPrecondiciones(estructuraDeDatos) {

    try {
        for (const dia of estructuraDeDatos) {

            // Comprobamos que la estructura contiene las propiedades eventos y pulpo
            if (dia.hasOwnProperty("pulpo") && dia.hasOwnProperty("eventos")) {

                // Comprobamos que la propiedad pulpo contiene un booleano
                if (typeof dia.pulpo != "boolean") {
                    console.log("Error en la introducción de la estructura de datos: la propiedad pulpo solo puede contener booleanos");
                    return false;
                }

                // Comprobamos que la propiedad eventos solo contiene strings
                for (const evento of dia.eventos) {

                    if (typeof evento != "string") {
                        console.log("Error en la introducción de la estructura de datos: la propiedad evento solo puede contener strings");
                        return false;
                    }

                }

                return true;

            } else {
                console.log("Error en la introducción de la estructura de datos: ¡la estructura de datos es incorrecta!");
                return false;
            }
        }
    } catch (error) {
        console.log("Error en checkPrecondiciones: " + error);
        throw error;
    }

}


/**
 * Postcondiciones para la estructura de datos resultante
 * 
 * Tendrá que ser un objeto que contenga como clave una string y como valor un objeto que contenga 1 propiedad llamada matriz
 * La matriz será una lista con 2 listas con únicamente 2 elementos cada una
 * Estas solo podrán contener números
 * 
 * 
 * Función que comprueba que esta cumple con las postcondiciones
 * 
 *  @param {*} estructuraDeDatos 
 */
function checkPostcondiciones(estructuraDeDatos) {

    try {
        // Comprobamos que la estructura de datos sea un objeto
        if (typeof estructuraDeDatos === "object") {

            for (const evento of estructuraDeDatos) {

                // Comprobamos que la clave de nuestro objeto sea una string
                if (typeof evento[0] != "string") {
                    console.log("Error en la estructura de datos resultante: la clave debe ser una string");
                    return false;
                }


                // Comprobamos que la matriz sea una lista
                if (typeof evento[1] != "object") {
                    console.log("Error en la estructura de datos resultante: el valor debe ser un objeto");
                    return false;
                }

                // Comprobamos que la matriz solo contenga 2 listas
                if (evento[1].matriu.length != 2) {
                    console.log("Error en la estructura de datos resultante: el valor debe estar compuesto por dos listas");
                    return false;
                }

                // Comprobamos que la matriz solo contenga números
                for (const lista of evento[1].matriu) {
                    for (const numero of lista) {
                        if (typeof numero != "number") {
                            console.log("Error en la estructura de datos resultante: la matriz solo puede contener números");
                            return false;
                        }
                    }
                }


            }

            return true;

        } else {
            console.log("Error en la estructura de datos resultante: debería ser un Map");
            return false;
        }
    } catch (error) {
        console.log("Error en checkPostcondiciones: " + error);
        throw error;
    }


}

// var estructura = leerDiario();
// checkPostcondiciones(estructura);


QUnit.module("Casos test precondicions", function() {
    QUnit.test('Test checkPrecondiciones()"', function(assert) {

        let diari = [
            { "eventos": ["hola", "hey", "ho"], "pulpo": false }
        ];
        let diari2 = [
            { "ajkhflsa": ["hola", "hey", "ho"], "pulpo": false }
        ];
        let diari3 = [
            { "eventos": ["hola", 5, "ho"], "pulpo": true }
        ];
        let diari4 = [
            { "eventos": ["hola", "hol", "ho"], "pulpo": 2 }
        ];
        let diari5 = [
            { "eventos": ["hola"], "pulpo": true }
        ];

        assert.equal(checkPrecondiciones(diari), true);

        // Debe dar false, ya que la 1a propiedad debe llamarse "eventos"
        assert.equal(checkPrecondiciones(diari2), false);

        // Debe dar false, ya que la 1a propiedad debe contener solo strings
        assert.equal(checkPrecondiciones(diari3), false);

        // Debe dar false, ya que la 2a propiedad debe contener solo booleanos
        assert.equal(checkPrecondiciones(diari4), false);

        // Debe dar true ya que puede haber solo 1 evento
        assert.equal(checkPrecondiciones(diari5), true);

    });
});

QUnit.module("Casos test postcondicions", function() {
    QUnit.test('Test checkPostcondiciones()"', function(assert) {

        var lista = new Map();
        var array = [
            [777, 222],
            [222, 777]
        ];
        var objeto = {
            matriu: array
        };
        lista.set("mejillones", objeto);


        var lista2 = new Map();
        lista2.set("mejillones", "patata");


        assert.equal(checkPostcondiciones(lista), true);
        assert.equal(checkPostcondiciones(lista2), false);


    });
});