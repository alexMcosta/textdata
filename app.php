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
    $user_string = $_GET["letter_counter"];

    //Turn user string into an array of lowercase letters
    $user_array = str_split(strtolower($user_string));

    //Check each letter of the user array to add to letter count
    foreach ($user_array as $user_letter) {

        switch ($user_letter) {
            case 'a':
                $letter["a"] = $letter["a"] + 1;
                break;
            case 'b':
                $letter["b"] = $letter["b"] + 1;
                break;
            case 'c':
                $letter["c"] = $letter["c"] + 1;
                break;
            case 'd':
                $letter["d"] = $letter["d"] + 1;
                break;
            case 'e':
                $letter["e"] = $letter["e"] + 1;
                break;
            case 'f':
                $letter["f"] = $letter["f"] + 1;
                break;
            case 'g':
                $letter["g"] = $letter["g"] + 1;
                break;
            case 'h':
                $letter["h"] = $letter["h"] + 1;
                break;
            case 'i':
                $letter["i"] = $letter["i"] + 1;
                break;
            case 'j':
                $letter["j"] = $letter["j"] + 1;
                break;
            case 'k':
                $letter["k"] = $letter["k"] + 1;
                break;
            case 'l':
                $letter["l"] = $letter["l"] + 1;
                break;
            case 'm':
                $letter["m"] = $letter["m"] + 1;
                break;
            case 'n':
                $letter["n"] = $letter["n"] + 1;
                break;
            case 'o':
                $letter["o"] = $letter["o"] + 1;
                break;
            case 'p':
                $letter["p"] = $letter["p"] + 1;
                break;
            case 'q':
                $letter["q"] = $letter["q"] + 1;
                break;
            case 'r':
                $letter["r"] = $letter["r"] + 1;
                break;
            case 's':
                $letter["s"] = $letter["s"] + 1;
                break;
            case 't':
                $letter["t"] = $letter["t"] + 1;
                break;
            case 'u':
                $letter["u"] = $letter["u"] + 1;
                break;
            case 'v':
                $letter["v"] = $letter["v"] + 1;
                break;
            case 'w':
                $letter["w"] = $letter["w"] + 1;
                break;
            case 'x':
                $letter["x"] = $letter["x"] + 1;
                break;
            case 'y':
                $letter["y"] = $letter["y"] + 1;
                break;
            case 'z':
                $letter["z"] = $letter["z"] + 1;
                break;
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="container">
    <div id="flex-container">
      <div class="letter" id="a">
        <p>A: <?php echo $letter["a"];?></p>
      </div>
      <div class="letter" id="b">
        <p>B: <?php echo $letter["b"];?></p>
      </div>
      <div class="letter" id="c">
        <p>C: <?php echo $letter["c"];?></p>
      </div>
      <div class="letter" id="d">
        <p>D: <?php echo $letter["d"];?></p>
      </div>
      <div class="letter" id="e">
        <p>E: <?php echo $letter["e"];?></p>
      </div>
      <div class="letter" id="f">
        <p>F: <?php echo $letter["f"];?></p>
      </div>
      <div class="letter" id="g">
        <p>G: <?php echo $letter["g"];?></p>
      </div>
      <div class="letter" id="h">
        <p>H: <?php echo $letter["h"];?></p>
      </div>
      <div class="letter" id="i">
        <p>I: <?php echo $letter["i"];?></p>
      </div>
      <div class="letter" id="j">
        <p>J: <?php echo $letter["j"];?></p>
      </div>
      <div class="letter" id="k">
        <p>K: <?php echo $letter["k"];?></p>
      </div>
      <div class="letter" id="l">
        <p>L: <?php echo $letter["l"];?></p>
      </div>
      <div class="letter" id="m">
        <p>M: <?php echo $letter["m"];?></p>
      </div>
      <div class="letter" id="n">
        <p>N: <?php echo $letter["n"];?></p>
      </div>
      <div class="letter" id="o">
        <p>O: <?php echo $letter["o"];?></p>
      </div>
      <div class="letter" id="p">
        <p>P: <?php echo $letter["p"];?></p>
      </div>
      <div class="letter" id="q">
        <p>Q: <?php echo $letter["q"];?></p>
      </div>
      <div class="letter" id="r">
        <p>R: <?php echo $letter["r"];?></p>
      </div>
      <div class="letter" id="s">
        <p>S: <?php echo $letter["s"];?></p>
      </div>
      <div class="letter" id="t">
        <p>T: <?php echo $letter["t"];?></p>
      </div>
      <div class="letter" id="u">
        <p>U: <?php echo $letter["u"];?></p>
      </div>
      <div class="letter" id="v">
        <p>V: <?php echo $letter["v"];?></p>
      </div>
      <div class="letter" id="w">
        <p>W: <?php echo $letter["w"];?></p>
      </div>
      <div class="letter" id="x">
        <p>X: <?php echo $letter["x"];?></p>
      </div>
      <div class="letter" id="y">
        <p>Y: <?php echo $letter["y"];?></p>
      </div>
      <div class="letter" id="z">
        <p>Z: <?php echo $letter["z"];?></p>
      </div>
    </div>
  </div>
</body>
</html>
