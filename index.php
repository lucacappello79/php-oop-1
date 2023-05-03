<?php 
class Movie {
    public $title;
    public $genre;
    public $director;
    public $releaseYear;



    function __construct(string $title, string $genre, string $director, int $releaseYear) {

        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}


$movie = new Movie("Interstellar", "Sci-fi", "C. Nolan", 2015);


/*
$movie->title = "Interstellar";
$movie->genre = "Sci-fi";
$movie->director = "C. Nolan";
*/


$titolo = $movie->title;

var_dump($movie);
var_dump($titolo);

echo $movie->getTitle();
echo $movie->getGenre();
echo $movie->getDirector();
echo $movie->getReleaseYear();
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