<?php 
require_once './Models/Genre.php';
require_once './Models/Movie.php';

$movie01 = new Movie("Interstellar", new Genre ("Adventure", "Drama", "SciFi"), "CHristopher Nolan", 2014);
$movie02 = new Movie("Old Boy", new Genre ("Action", "Drama", "Mystery"), "Park Chan-wook", 2003);
$movie03 = new Movie("The Last Samurai", new Genre ("Action", "Drama", "Inspirational"), "Edward Zwick", 2003);
$movie04 = new Movie("The Curious Case of Benjamin Button", new Genre ("Romance", "Drama", "Fantasy"), "David Fincher", 2008);

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
    <div class="container mt-5">


        <!-- <div class="row">
            <div class="col">
                <h2>Movie 1:</h2>
                <p>Title: <?= $movie01->getTitle(); ?></p>
                <p>Genre: <?= $movie01->getGenre(); ?></p>
                <p>Director: <?= $movie01->getDirector(); ?></p>
                <p>Release Year: <?= $movie01->getReleaseYear(); ?></p>
                <p>Type: <?= $movie01->getType(); ?></p>
            </div>

            <div class="col">
                <h2>Movie 2:</h2>
                <p>Title: <?= $movie02->getTitle(); ?></p>
                <p>Genre: <?= $movie02->getGenre(); ?></p>
                <p>Director: <?= $movie02->getDirector(); ?></p>
                <p>Release Year: <?= $movie02->getReleaseYear(); ?></p>
                <p>Type: <?= $movie02->getType(); ?></p>
            </div>
        </div> -->

        <h2>Movies</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Director</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $movie01->getTitle(); ?></td>
                    <td><?= $movie01->getGenre(); ?></td>
                    <td><?= $movie01->getDirector(); ?></td>
                    <td><?= $movie01->getReleaseYear(); ?></td>
                    <td><?= $movie01->getType(); ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?= $movie02->getTitle(); ?></td>
                    <td><?= $movie02->getGenre(); ?></td>
                    <td><?= $movie02->getDirector(); ?></td>
                    <td><?= $movie02->getReleaseYear(); ?></td>
                    <td><?= $movie02->getType(); ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?= $movie03->getTitle(); ?></td>
                    <td><?= $movie03->getGenre(); ?></td>
                    <td><?= $movie03->getDirector(); ?></td>
                    <td><?= $movie03->getReleaseYear(); ?></td>
                    <td><?= $movie03->getType(); ?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?= $movie04->getTitle(); ?></td>
                    <td><?= $movie04->getGenre(); ?></td>
                    <td><?= $movie04->getDirector(); ?></td>
                    <td><?= $movie04->getReleaseYear(); ?></td>
                    <td><?= $movie04->getType(); ?></td>
                </tr>
            </tbody>
        </table>



    </div>

    
<!-- ---BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>