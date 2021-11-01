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

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];



        if ($answer1 == "B") {
            $totalCorrect++;
        }
        if ($answer2 == "A") {
            $totalCorrect++;
        }
        if ($answer3 == "B") {
            $totalCorrect++;
        }
        if ($answer4 == "C") {
            $totalCorrect++;
        }
        if ($answer5 == "C") {
            $totalCorrect++;
        }
        if ($answer6 == "A") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 6 correct</div>";
        echo "Du är ett $correctAnswer[5]";




        ?>




    </div>

</body>

</html>
