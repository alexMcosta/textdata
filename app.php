<?php
    //Make array to store letter counts.
    $letters = array(
        "a" => 0,
        "b" => 0,
        "c" => 0,
        "d" => 0,
        "e" => 0,
        "f" => 0,
        "g" => 0,
        "h" => 0,
        "i" => 0,
        "j" => 0,
        "k" => 0,
        "l" => 0,
        "m" => 0,
        "n" => 0,
        "o" => 0,
        "p" => 0,
        "q" => 0,
        "r" => 0,
        "s" => 0,
        "t" => 0,
        "u" => 0,
        "v" => 0,
        "w" => 0,
        "x" => 0,
        "y" => 0,
        "z" => 0,
      );

    //Get user string
    $user_string = $_POST["letter_counter"];

    //Turn user string into an array of lowercase letters
    $user_array = str_split(strtolower($user_string));

    //Check each letter of the user array to add to letter count
    foreach ($user_array as $user_letter) {

        switch ($user_letter) {
            case 'a':
                $letters["a"] = $letters["a"] + 1;
                break;
            case 'b':
                $letters["b"] = $letters["b"] + 1;
                break;
            case 'c':
                $letters["c"] = $letters["c"] + 1;
                break;
            case 'd':
                $letters["d"] = $letters["d"] + 1;
                break;
            case 'e':
                $letters["e"] = $letters["e"] + 1;
                break;
            case 'f':
                $letters["f"] = $letters["f"] + 1;
                break;
            case 'g':
                $letters["g"] = $letters["g"] + 1;
                break;
            case 'h':
                $letters["h"] = $letters["h"] + 1;
                break;
            case 'i':
                $letters["i"] = $letters["i"] + 1;
                break;
            case 'j':
                $letters["j"] = $letters["j"] + 1;
                break;
            case 'k':
                $letters["k"] = $letters["k"] + 1;
                break;
            case 'l':
                $letters["l"] = $letters["l"] + 1;
                break;
            case 'm':
                $letters["m"] = $letters["m"] + 1;
                break;
            case 'n':
                $letters["n"] = $letters["n"] + 1;
                break;
            case 'o':
                $letters["o"] = $letters["o"] + 1;
                break;
            case 'p':
                $letters["p"] = $letters["p"] + 1;
                break;
            case 'q':
                $letters["q"] = $letters["q"] + 1;
                break;
            case 'r':
                $letters["r"] = $letters["r"] + 1;
                break;
            case 's':
                $letters["s"] = $letters["s"] + 1;
                break;
            case 't':
                $letters["t"] = $letters["t"] + 1;
                break;
            case 'u':
                $letters["u"] = $letters["u"] + 1;
                break;
            case 'v':
                $letters["v"] = $letters["v"] + 1;
                break;
            case 'w':
                $letters["w"] = $letters["w"] + 1;
                break;
            case 'x':
                $letters["x"] = $letters["x"] + 1;
                break;
            case 'y':
                $letters["y"] = $letters["y"] + 1;
                break;
            case 'z':
                $letters["z"] = $letters["z"] + 1;
                break;
        }
    }
    //Make percentage calculator
    function percentage($letter, $devide_by){
      $a = $letter / $devide_by;
      $send_back = $a * 100;

      return round($send_back, 2);
    }

    //Sort letters Highest to lowest
    arsort($letters);

    //letter count.
    $total_letters = array_sum($letters);

    //count, and ignore punctuation of words
    $words = array_count_values(preg_split("/[\s,.\?;:]+/",strtolower($user_string), Null, PREG_SPLIT_NO_EMPTY));

    //Sort words from highest to lowest
    arsort($words);

    //word count
    $total_words = array_sum($words);


?>

<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--<link rel="stylesheet" href="styles.css">-->
</head>
<body>
  <div id="container">
    <div class="jumbotron">
      <h1>Letter & Word Counter</h1>
      <p>And the results are..</p>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>The total number of letters is <?php echo $total_letters;?></p>
        <ul class="list-group">
          <!--For each to cycle out -->
          <?php foreach ($letters as $key=>$letter) {?>
            <?php
                //ignore non used letters
                if($letter == 0){
                    continue;
                  } else{?>
            <li class="list-group-item" id="<?php echo $key;?>">
              <span class="badge"><?php echo $letter;?></span>
              <span class="badge">%<?php echo percentage($letter, $total_letters);?></span>
              <?php echo ucfirst($key);?>
            </li>
            <?php } ?>
          <?php } ?>
        </ul>
      </div>
      <div class="col-sm-4">
        <p>Total words: <?php echo $total_words;?></p>
        <ul class="flex-container">
          <!-- end for each word-->
          <?php foreach ($words as $key=>$word) {?>
            <li class="list-group-item" id="<?php echo $key;?>">
              <span class="badge"><?php echo $word;?></span>
              <span class="badge">%<?php echo percentage($word, $total_words);?></span>
              <?php echo ucfirst($key);?>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
