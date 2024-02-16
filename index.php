<?php

class Movie
{
    public $title;
    public $language;
    public $genre;
    public $yearRelease;

    public function __construct($h, $lang, $gen, $year = 0)
    {
        $this->title = $h;
        $this->language = $lang;
        $this->genre = $gen;
        $this->setYear($year);
    }

    public function setYear($year)
    {
        if (is_numeric($year)) {
            $this->yearRelease = $year;
        }
    }
};

// Assegnazione dei valori delle prop tramite la funzione construct
$interstellar = new Movie('Interstellar', 'en', 'sci-fi', 2014);
$men_in_black = new Movie('Men in Black', 'en', 'action', 1997);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <h1>
        Movies
    </h1>

    <div>
        <h1>
            Film 1
        </h1>
        <h2>
            Titolo del Film: <br>
            <?php
            echo $interstellar->title;
            ?>
        </h2>

        <h3>
            <span>Lingua originale:</span>
            <?php
            echo $interstellar->language;
            ?>
        </h3>

        <h4>
            <span>Genere:</span>
            <?php
            echo $interstellar->genre;
            ?>
        </h4>

        <h4>
            <span>Anno:</span>
            <?php
            echo $interstellar->yearRelease;
            ?>
        </h4>
    </div>

    <!-- ------------------------------------------------- -->
    <hr>

    <div>
        <h1>
            Film 2
        </h1>
        <h2>
            Titolo del Film: <br>
            <?php
            echo $men_in_black->title;
            ?>
        </h2>

        <h3>
            <span>Lingua originale:</span>
            <?php
            echo $men_in_black->language;
            ?>
        </h3>

        <h4>
            <span>Genere:</span>
            <?php
            echo $men_in_black->genre;
            ?>
        </h4>

        <h4>
            <span>Anno:</span>
            <?php
            echo $men_in_black->yearRelease;
            ?>
        </h4>
    </div>
</body>

</html>