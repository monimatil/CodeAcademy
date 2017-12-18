<?php

function writeMsg() {
    echo "Hello world!" . '<br>';
}

writeMsg(); //1. iskviecia funkcija
writeMsg(); //2. antra karta iskviecia funkcija

function familyName($fname ='Nezinomas', $lname ='Neduotas') {   /// Nezinomas ismes tada kai nepriskirsim pavardes po funkcijos
    echo "$fname $lname. <br>";
}

familyName( 'Jonas'/*, 'Jonaitis' */);   //3. reiksmes priskyrimas
familyName();    //4.  galima rasyti daug skirtingu priskyrimu. naudos ta pacia funkcija, duos skirtynga rezultata priklausomai nuo to kaip ka priskyrsi
familyName('Tomas', 'Tomaitis'); //5.

call_user_func('familyname', 'Vladas', 'Vladaitis'); //6. iskviete funkcija ir jai dave kitas reiksmes(varda ir pavarde)

$fn = 'familyname';   // sukurem kintamaji funkcijai
call_user_func($fn,'Petras', 'Petraitis'); //7.

function familyNameRet($fname ='Nezinomas', $lname ='Neduotas') {
    return "$fname $lname. <br>";  //grazina reiksme
}
   echo familyNameRet('Matas', 'Mataitis');  //8. reikai rasyti tam kad priskyrtu reiksme

$fnc = 'familyNameRet';
echo $fnc("Jonas", "Jonaitis");  // 9.

$fm = function($fname ='Nezinomas', $lname ='Neduotas'){
    return "$fname $lname. <br>";
};                                                           //funkcija kuri yra priskiriama kintamajam. butina deti kabutes po lauztiniu } skliaustu
echo $fm("Ana", "Anaite");                    //10.

$fm = function($a = '', $b = ''){
    return 'Belekas';
};
echo $fm("Ana", "Anaite");            //11. kai funkcija neturi pavadinimo ja galima perrasyti( cia jos perrasymo pvz)

?>