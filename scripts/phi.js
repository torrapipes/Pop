/**
 *
 * Funció que calcula quina correlació existeix entre 2 events.
 * A n'aquest cas per saber quina correlació hi ha entre convertir-se en pop i entre un event x.
 * @param {*} matriu 
 * 
 * **/
function phi(matriu) {

    try {

        var event00 = matriu[0][0]; // NO pop, NO x
        var event01 = matriu[0][1]; // NO pop, SI x
        var event10 = matriu[1][0]; // SI pop, NO x
        var event11 = matriu[1][1]; // SI pop, SI x


        var dividendo = event11 * event00 - event10 * event01;

        var divisor = Math.sqrt((event01 + event11) * (event00 + event10) * (event10 + event11) * (event00 + event01));

        var phi = dividendo / divisor;

        return phi;

    } catch (error) {
        console.log("Ha ocurrido un error en el sistema, por favor contacte con el administrador");
        throw "Error en función phi, " + error;
    }


}


QUnit.module("Casos test correlació", function() {
    QUnit.test('Testing phi()', function(assert) {
        let matriu = [
            [76, 9],
            [4, 1]
        ];
        let matriu2 = [
            [2, 3],
            [0, 1]
        ];
        let matriu3 = [
            [777, 222],
            [222, 777]
        ];

        // toFixed(x) manté un nombre x especific de decimals
        assert.equal(phi(matriu).toFixed(3), 0.069);

        assert.equal(phi(matriu2).toFixed(9), 0.316227766);

    });
});
