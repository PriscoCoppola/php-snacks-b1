<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
    <h2>Snack 1 PHP</h2>
    <?php 
    /**
    * PHP Snack 1:
    * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    * Stampiamo a schermo tutte le partite con questo schema:
    * Olimpia Milano - Cantù | 55-60
    */

    $matches = [
        [
            'teamHome' => 'Treviso',
            'teamVisiting' => 'Trentino',
            'homePoint' => 84,
            'visitingPoint' => 80,
        ],
        [
            'teamHome' => 'Varese',
            'teamVisiting' => 'Brescia',
            'homePoint' => 94,
            'visitingPoint' => 89,
        ],
        [
            'teamHome' => 'Reggio Emilia',
            'teamVisiting' => 'Milano',
            'homePoint' => 71,
            'visitingPoint' => 87,
        ],
        [
            'teamHome' => 'Trieste',
            'teamVisiting' => 'Cremona',
            'homePoint' => 102,
            'visitingPoint' => 77,
        ],
    ];

    for ($i = 0; $i < count($matches); $i++) { ?>
        <div><?php echo $matches[$i]['teamHome']; ?> - 
        <?php echo $matches[$i]['teamVisiting']; ?> | 
        <?php echo $matches[$i]['homePoint']; ?> - 
        <?php echo $matches[$i]['visitingPoint']; ?></div>
    <?php } ?>

    <h2>Snack 2 PHP</h2>
    <?php 
    /*
    PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) <= 3) {
        echo 'Accesso Negato';
    } 
    elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
        echo 'Accesso Negato';
    } 
    elseif (is_numeric($age) === false) {
        echo 'Accesso Negato';
    }
    else {
        echo 'Accesso Riuscito';
    }
    ?>

    

</body>
</html>