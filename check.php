<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Flags</title>
</head>
<body>
    <h1>Check your Flags</h1>
    <form action="check.php" method="post">
        <input type="text" name="flag" placeholder="Enter your flag">
        <input type="submit" value="Check">
    </form>

    <?php
        $cookie = $_COOKIE['score'];
        $score = intval($cookie);
        if(isset($_POST['flag'])){
            $flag = $_POST['flag'];
            if($flag == "flag{this_is_a_flag}"){
                echo "Correct Flag";
                $score = $score + 15;
            }
            // else if
            else if ($flag == "flag{this_is_another_flag}"){
                echo "Correct Flag";
                $score = $score + 15;
            }
            else if ($flag == "flag{this_is_the_flag_flag}"){
                echo "Correct Flag";
                $score = $score + 15;
            }
            else if ($flag == "flag{this_is_the_lag_flag}"){

                echo "Correct Flag";

                $score = $score + 15;

            }
            else if ($flag == "flag{this_is_the_flaghag_flag}"){

                echo "Correct Flag";

                $score = $score + 15;

            }
            else{
                echo "Wrong Flag";
            }
        }
        setcookie("score", $score, time() + 3600);
    ?>

    <h1>Your Score is <?php echo $score; ?></h1>
</body>
</html>