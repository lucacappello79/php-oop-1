<?php

class Movie {
    public $title;
    public $genre;
    public $director;
    public $releaseYear;
    public static $type = "Movie";

    function __construct(string $title, Genre $genre, string $director, int $releaseYear) {

        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }

    public function getType(){
        return self::$type;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
       return $this->genre->subGenre1 . " - " . $this->genre->subGenre2 . " - " . $this->genre->subGenre3;
       // return "{$this->genre->subGenre1} - {$this->genre->subGenre2} - {$this->genre->subGenre3}";
    }

    public function getDirector() {
        return $this->director;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}

?>