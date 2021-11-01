<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Ditt resultat</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>resultat</h1>


        <?php


        // load answers from questions.php into indexed array $answer[]
        for ($i = 1; $i < 7; $i++) {
            $answer[$i] = $_POST["question-$i-answers"];
        }


        // echo $answer[]
        // for ($k = 1; $k < 7; $k++) {
        //     echo $answer[$k];
        // }




        // bulid $correctI[] array
        for ($j = 1; $j < 7; $j++) {
            if ($answer[$j] == $correctAnswer[($j - 1)]) {
                $totalCorrect++;
                $correctI[$j] = true;
            }
        }

        // main feedback loop
        for ($k = 1; $k < 7; $k++) {
            if ($correctI[$k] == true) {
                echo "<br>Du svarade RÄTT på fråga nummer $k:<br>";
                echo $feedback[($k - 1)]['right'];
                echo "<br>";
            } else {
                echo "<br>Du svarade FEL på fråga nummer $k:<br>";
                echo $feedback[($k - 1)]['wrong'];
                echo "<br>";
            }
        }





        // PRINT TOTAL CORRECT ANSWERS
        echo "<br>";
        echo "<br>";
        echo "<div id='results'>$totalCorrect poäng av 6 möjliga</div>";

        echo "<br>";
        $procent = percentage($totalCorrect, 6);
        echo "Det innebär procentuellt: $procent %";


        echo "<br>";
        echo "<br>Dagens matte citat =<br>";
        $randIndex = getRandomIndex($mathQuotes);
        echo $mathQuotes[$randIndex];


        ?>





    </div>

</body>

</html>
