QUnit.module("Casos test precondicions", function() {
    QUnit.test('Test checkPrecondiciones()', function(assert) {

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

        assert.equal(checkPrecondiciones(diari), true, "Check precondicions ok");

        assert.equal(checkPrecondiciones(diari2), false, "La propiedad debe llamarse 'eventos'");

        // Debe dar false, ya que la 1a propiedad debe contener solo strings
        assert.equal(checkPrecondiciones(diari3), false, "La propiedad eventos debe contener solo strings");

        // Debe dar false, ya que la 2a propiedad debe contener solo booleanos
        assert.equal(checkPrecondiciones(diari4), false, "La propiedad pulpo solo debe contener booleanos");

        // Debe dar true ya que puede haber solo 1 evento
        assert.equal(checkPrecondiciones(diari5), true, "Existe la posibilidad de que el diario contenga un único evento");

    });
});

QUnit.module("Casos test postcondicions", function() {
    QUnit.test('Test checkPostcondiciones()', function(assert) {

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


        assert.equal(checkPostcondiciones(lista), true, "Postcondiciones estructura correcta");
        assert.equal(checkPostcondiciones(lista2), false, "El valor de la clave del Map resultante debe ser un objeto");


    });
});

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

        // toFixed(x) manté un nombre x especific de decimals
        assert.equal(phi(matriu).toFixed(3), 0.069, "Correlación correcta");

        assert.equal(phi(matriu2).toFixed(9), 0.316227766, "Correlación correcta");

    });
});