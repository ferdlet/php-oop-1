<?php
require_once __DIR__ . '/classes/Movies.php';

$movies = [
    new Movie(1917, "Sam Mendes", 2019, 119, "Stati Uniti d'America, Regno Unito", "inglese, francese, tedesco", "thriller, drammatico, guerra, azione"),
    new Movie("Parasite", "Bong Joon-ho", 2019, 132, "Corea del Sud", "coreano", "thriller, commedia, drammatico"),
    new Movie("È stata la mano di Dio", "Paolo Sorrentino", 2021, 130, "Italia", "italiano", "biografico, commedia, drammatico"),
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <?php foreach ($movies as $movie) { ?>
        <h2><?php echo '- ' . $movie->title; ?></h2>
        <ul>
            <li>
                <strong>Regista: </strong><?php echo $movie->director; ?>
            </li>
            <li>
                <strong>Anno: </strong><?php echo $movie->releaseYear; ?>
            </li>
            <li>
                <strong>Durata: </strong><?php echo $movie->getDuration(); ?>
            </li>
            <li>
                <strong>Paese di produzione: </strong><?php echo $movie->country; ?>
            </li>
            <li>
                <strong>Lingua originale: </strong><?php echo $movie->originaleLanguage; ?>
            </li>
            <li>
                <strong>Genere: </strong><?php echo $movie->genre; ?>
            </li>
        </ul>
    <?php } ?>
</body>

</html>