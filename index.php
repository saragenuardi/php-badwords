<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Creo una variabile con un paragrafo di testo
    $variabile = "oggi è il 7 giugno";
    $variabile2 = "e sono le ore 17:00";
    $badword = $_GET['badword'];

    ?>

    <!-- Stampo il paragrafo -->
    <h2>
        Stampo il paragrafo
    </h2>

    <p>
        Mi chiamo Sara ed <?php echo $variabile; ?>
    </p>

    <!-- Stampo la lunghezza del paragrafo -->
    <h2>
        Stampo la lunghezza del paragrafo
    </h2>

    <p>
        <?php
        //Utilizzo "strlen" per contare la lunghezza della stringa
        $variabile_lunghezza = strlen($variabile);
        //Stampo in html la lunghezza
        echo "Il paragrafo è lungo " . $variabile_lunghezza . " caratteri";
        ?>
    </p>

    <!-- /Stampo la lunghezza del paragrafo -->



    <!-- Utilizzo GET per censurare una parola fornita dall'utente -->
    <h2>
        Questa è la parola da censurare
    </h2>

    <p><?php  echo $badword;?></p>

</body>

</html>