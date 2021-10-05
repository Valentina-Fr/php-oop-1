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
}