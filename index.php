<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-main">
        <form action="" method="POST">
            <div class="form-control">
                <?php
                    $word_list = array("plane", "car", "ship", "bus", "train");
                    $word = $word_list[array_rand($word_list)];
                    // $word = 'plane';

                    $word_shuffled = str_shuffle($word);

                    echo "Shuffled word is $word_shuffled";

                    function try_again(){
                        header('Location: '.$_SERVER['PHP_SELF']);
                        die;
                    }

                    if (array_key_exists('button_check', $_POST)) {
                        $usr_word = $_POST['g_word'];
                        
                        echo "<br> You answered $usr_word";

                        if ($usr_word == $_POST['cor_word']) {
                            echo "<p id='result'> You win! </p>";
                        }
                        else {
                            echo "<p id='result'> Incorrect </p>";
                        }
                    }
                    
                    if (array_key_exists('button_try_again', $_POST)) {
                        try_again();
                    }


                ?>
            </div>
            <input type="hidden" name="cor_word" value="<?php echo $word?>">
            <div class="form-control">
                <label>Guess the word</label>
                <input type='textbox' name='g_word' id='g_word'>
            </div>
            <div class="form-control btn">
                <input type="submit" name='button_check' value='Submit'>
            </div>
            <div class="form-control btn">
                <input type="submit" name='button_try_again' value='Try again'>
            </div>
        </form>  
    </div>
</body>
</html>
