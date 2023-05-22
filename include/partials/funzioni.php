<?php

GetPassword($arg1){
    //array che contiene tutte le lettere, i numeri da 1 a 9 e alcuni simboli
$my_array = array_merge(range('a', 'z'), range('A', 'Z'), range(1, 9), array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')'));

//var_dump($my_array);

//prendo il valore booleano dell'input number
$PasswordLength = isset($arg1);

//var_dump($PasswordLength);

//mi faccio una copia del mio array originale
$ArrayCopy = $my_array;

//stringa password vuota
$PasswordString = '';

//se il valore booleano dell'input number é true e l'input non é vuoto
if(isset($arg1) && $arg1 != ''){
    
    //pusho in un array vuoto $EmptyArray tot(numero scelto dall'utente) chiavi prese dal mio array copia
    $EmptyArray = array_rand( $ArrayCopy, $arg1);

    //var_dump($EmptyArray);

    //per ogni elemento dell'array riempito di tot chiavi
    foreach ($EmptyArray as $elem){

        //pusho e concateno in una stringa inizialmente vuota un elemento preso dal mio array copia con indice che ha valore numerico dell'emptyArray con chiavi randomiche
        $PasswordString.= $ArrayCopy[$elem];

        
        }
    
    echo($PasswordString);
    
    }
}