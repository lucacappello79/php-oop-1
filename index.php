<?php

class Genre {
    public $subGenre1;
    public $subGenre2;
    public $subGenre3;

    function __construct(string $subGenre1, string $subGenre2, string $subGenre3) {

        $this->subGenre1 = $subGenre1;
        $this->subGenre2 = $subGenre2;
        $this->subGenre3 = $subGenre3;

    }
}


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

    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre->subGenre1 . " " . $this->genre->subGenre2 . " " .$this->genre->subGenre3;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}


$movie01 = new Movie("Interstellar", new Genre ("Adventure", "Drama", "Sci-fi"), "CHristopher Nolan", 2014);
$movie02 = new Movie("Old Boy", new Genre ("Action", "Drama", "Mystery"), "Park Chan-wook", 2003);



/*
$movie01->title = "Interstellar";
$movie01->genre = "Sci-fi";
$movie01->director = "C. Nolan";
*/

/*
$titolo01 = $movie01->title;
$titolo02 = $movie02->title;

var_dump($movie01);
var_dump($movie02);
var_dump($titolo01);
var_dump($titolo02);
*/

echo "Movie 1: <br>";
echo $movie01->getTitle() . "<br>";
echo $movie01->getGenre() . "<br>";
echo $movie01->getDirector() . "<br>";
echo $movie01->getReleaseYear() . "<br>";
echo Movie::$type . "<br><br>";

echo "Movie 2: <br>";
echo $movie02->getTitle() . "<br>";
echo $movie02->getGenre() . "<br>";
echo $movie02->getDirector() . "<br>";
echo $movie02->getReleaseYear() . "<br>";
echo Movie::$type . "<br><br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ---BOOTSTRAP---  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP OOP</title>
</head>



<body>

    
<!-- ---BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>