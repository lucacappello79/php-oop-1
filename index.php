<?php 
require_once './Models/Genre.php';
require_once './Models/Movie.php';

$movie01 = new Movie("Interstellar", new Genre ("Adventure", "Drama", "Sci-fi"), "CHristopher Nolan", 2014);
$movie02 = new Movie("Old Boy", new Genre ("Action", "Drama", "Mystery"), "Park Chan-wook", 2003);

echo "Movie 1: <br>";
echo $movie01->getTitle() . "<br>";
echo $movie01->getGenre() . "<br>";
echo $movie01->getDirector() . "<br>";
echo $movie01->getReleaseYear() . "<br>";
// echo Movie::$type . "<br><br>";
echo $movie01->getType() . "<br><br>";

echo "Movie 2: <br>";
echo $movie02->getTitle() . "<br>";
echo $movie02->getGenre() . "<br>";
echo $movie02->getDirector() . "<br>";
echo $movie02->getReleaseYear() . "<br>";
// echo Movie::$type . "<br><br>";
echo $movie02->getType() . "<br><br>";
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