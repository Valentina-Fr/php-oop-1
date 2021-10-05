<?php 
class Movie {
    public $title;
    public $director;
    public $year;
    public $length; 
    public $language;

    function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function setLanguage($lang) {
        if($lang == "ita") {
            $this->language = "Italian";
        } elseif ($lang == "eng") {
            $this->language = "English";
        } else {
            $this->language = "unknown";
        }
    }
}

$pinocchio = new Movie("Pinocchio", "Matteo Garrone", 2019);
$pinocchio->setLanguage("ita");

$titanic = new Movie("Titanic", "James Cameron", 1997);
$titanic->setLanguage("eng");

// Stampo in html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <div><strong>Titolo: </strong><?= $pinocchio->title ?></div>
    <div><strong>Regista: </strong><?= $pinocchio->director ?></div>
    <div><strong>Anno: </strong><?= $pinocchio->year ?></div>
    <div><strong>Lingua: </strong><?= $pinocchio->language ?></div>
    <hr>
    <div><strong>Titolo: </strong><?= $titanic->title ?></div>
    <div><strong>Regista: </strong><?= $titanic->director ?></div>
    <div><strong>Anno: </strong><?= $titanic->year ?></div>
    <div><strong>Lingua: </strong><?= $titanic->language ?></div>
</body>
</html>