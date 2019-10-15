/**Funció phi
 *
 * S'utilitza per saber quina correlació existeix entre 2 events.
 * A n'aquest cas per saber quina correlació hi ha entre convertir-se en pop i entre un event x.
 *
 * **/


function phi(matriu) {

    var event00 = matriu[0][0]; // NO pop, NO x
    var event01 = matriu[0][1]; // NO pop, SI x
    var event10 = matriu[1][0]; // SI pop, NO x
    var event11 = matriu[1][1]; // SI pop, SI x


    var dividendo = event11 * event00 - event10 * event01;

    // (NO pop + NO pop) * (NO pizza + NO pizza) * (SI pop + SI pop) * (SI pizza + SI pizza)
    var divisor = Math.sqrt((event01 + event11) * (event00 + event10) * (event10 + event11) * (event00 + event01));

    var phi = dividendo / divisor;

    return phi;

}


// Cas test
var matriu = [
    [76, 9],
    [4, 1]
];

console.log(phi(matriu));