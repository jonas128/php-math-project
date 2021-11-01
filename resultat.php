<?php require __DIR__ . '/data.php'; ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Your results</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result</h1>


        <?php

        for ($i = 1; $i < 7; $i++) {
            $answer[$i] = $_POST["question-$i-answers"];
        }





        //$answer1 = $_POST['question-1-answers'];
        //$answer2 = $_POST['question-2-answers'];
        //$answer3 = $_POST['question-3-answers'];
        //$answer4 = $_POST['question-4-answers'];
        //$answer5 = $_POST['question-5-answers'];
        //$answer6 = $_POST['question-6-answers'];


        for ($k = 1; $k < 7; $k++) {
            echo $answer[$k];
        }

        for ($j = 1; $j < 7; $j++) {
            if ($answer[$j] == $correctAnswer[($j - 1)]) {
                $totalCorrect++;
                $correctI[$j] = true;
            }
        }



        // if ($answer[1] == "B") {
        //     $totalCorrect++;
        // }
        // if ($answer[2] == "A") {
        //     $totalCorrect++;
        // }
        // if ($answer[3] == "B") {
        //     $totalCorrect++;
        // }
        // if ($answer[4] == "C") {
        //     $totalCorrect++;
        // }
        // if ($answer[5] == "C") {
        //     $totalCorrect++;
        // }
        // if ($answer[6] == "A") {
        //     $totalCorrect++;
        // }

        echo "<div id='results'>$totalCorrect / 6 correct</div>";
        echo "Du är ett $correctAnswer[5]";
        for ($k = 1; $k < 7; $k++) {
            echo $correctI[$k];
        }

        if ($correctI[6] == true) {
            echo "Rätt på sista frågan!";
        }



        ?>




    </div>

</body>

</html>
