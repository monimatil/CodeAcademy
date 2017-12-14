function daugyba (a, b) {
    return a * b;

}

var auto = ['BMW', 'Audi', 'Honda', 'Hyundai'];
var numeris = null;
for (var i = 0; i < auto.length; i++){
    var masina = auto[i];
    if (masina == 'Honda') numeris = i;
}

function surastiauto (masina){
    var rezultatas = null;
    var n = auto.length;
    var i= 0;
    while (rezultatas == null || i<n) {
        if (auto[i] == masina) rezultatas = i;
        i++;
    }
    return rezultatas;
}

function surasti(arg) {
    var rezultatas;
    switch (arg){
        case 'BMW' : rezultatas = 'Vokieciu'; break;
        case 'Honda' : rezultatas = 'Japonu'; break;
        default: rezultatas = 'nezinomas';
    }

}