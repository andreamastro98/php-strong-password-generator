<?php

//array che contiene tutte le lettere, i numeri da 1 a 9 e alcuni simboli
$my_array = array_merge(range('a', 'z'), range('A', 'Z'), range(1, 9), array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')'));

//var_dump($my_array);

//prendo il valore booleano dell'input number
$PasswordLength = isset($_GET['lunghezzaPass']);

//var_dump($PasswordLength);

//mi faccio una copia del mio array originale
$ArrayCopy = $my_array;

//stringa password vuota
$PasswordString = '';

//se il valore booleano dell'input number é true e l'input non é vuoto
if(isset($_GET['lunghezzaPass']) && $_GET['lunghezzaPass'] != ''){
    
    //pusho in un array vuoto $EmptyArray tot(numero scelto dall'utente) chiavi prese dal mio array copia
    $EmptyArray = array_rand( $ArrayCopy, $_GET['lunghezzaPass']);

    //var_dump($EmptyArray);

    //per ogni elemento dell'array riempito di tot chiavi
    foreach ($EmptyArray as $elem){

        //pusho e concateno in una stringa inizialmente vuota un elemento preso dal mio array copia con indice che ha valore numerico dell'emptyArray con chiavi randomiche
        $PasswordString.= $ArrayCopy[$elem];

        
    }
    
    //var_dump($PasswordString);
    
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center mb-4">Genera una password sicura</h2>
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                  La password generata é: <b><?php echo $PasswordString ?></b> 
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                   <form action="index.php" method="GET" class="d-flex justify-content-between">
                        <label for="">Lunghezza Password:</label>
                        <input type="number" name="lunghezzaPass" class="me-3">
                        <button class="btn btn-primary" type="submit">Genera</button>
                   </form>
                </div>
            </div>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>