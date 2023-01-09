<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <!-- 1. Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.  -->
    <h1>
        <?php
        $paraOne = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium autem aut necessitatibus repellendus totam aliquam vitae, ipsam odit nulla sed tempora! Perspiciatis sequi magni, aliquid ipsam molestias quod vitae mollitia!";
        echo $paraOne;
        ?>
    </h1>
    <h2>
        <?php
        echo "La lunghezza del paragrafo è di: " . strlen($paraOne) . " parole.";
        ?>
    </h2>

    <!-- 2. Una parola da censurare viene passata dall'utente tramite parametro GET: 
        - Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare. -->
    <h1>
        <?php
        $badWord = $_GET["word"];
        echo $paraTwo = str_replace($badWord, "***", $paraOne);
        ?>
    </h1>
    <h2>
        <?php
        echo "La lunghezza del paragrafo è di: " . strlen($paraTwo) . " parole.";
        ?>
    </h2>
</body>

</html>