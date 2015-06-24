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
    $split = str_split(strtolower($user_string););

    //Check each letter of the user array to add to letter count
    foreach ($split as $letter) {

        switch ($letter) {
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
