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
var_dump($pinocchio);

$titanic = new Movie("Titanic", "James Cameron", 1997);
$titanic->setLanguage("eng");
var_dump($titanic);