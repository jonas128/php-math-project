<!DOCTYPE html&gt;>

<head>
    <meta charset=UTF-8" />
    <title>PHP MATH QUIZ</title>
    <link rel="stylesheet" type="text/css" href="stylex.css" />
</head>

<body>

    <div id="page-wrap">
        <h1>JONAS' MATH QUIZ</h1>
        <form action="result.php" method="post" id="quiz">

            <ol>
                <img src="J1.JPG" alt="" width="300" height="250" />
                <li>
                    <h3>0, 1, 2, 3 är exempel på</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Romerska siffror </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Arabiska siffror</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) En kryptovaluta</label>
                    </div>
                </li>




            </ol>

            <input type="submit" value="Submit" class="submitbtn" />

        </form>

    </div>


</body>

</html>
