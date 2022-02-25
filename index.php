<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
  <style>
    body {
      background: #000;
      color: #fff;
      font-size: 2rem;
      line-height: 3rem;
      font-family: sans-serif;
    }
    li {
      margin: 50px 0;
    }
  </style>
</head>
<body>
<?php
    require_once __DIR__."./classes/Movie.php";

    $moviesArr = [
      new Movie("<strong>Titolo:</strong> Pulp Fiction<br>", "Genere: Noir, gangster, thriller, commedia, drammatico<br>", "<strong>Anno:</strong> 1994<br>", "<strong>Regista:</strong> Quentin Tarantino<br>", "<strong>Cast:</strong> John Travolta, Samuel L. Jackson, Uma Thurman, Bruce Willis, Tim Roth, Amanda Plummer, Maria de Medeiros, Ving Rhames, Eric Stoltz, Rosanna Arquette, Bronagh Gallagher, Christopher Walken, Harvey Keitel, Quentin tarantino<br>"),
      new Movie("<strong>Titolo:</strong> Interstellar<br>", "<strong>Genere:</strong> Fantascienza, avventura, drammatico<br>", "<strong>Anno:</strong> 2014<br>", "<strong>Regista:</strong> Christopher Nolan<br>", "<strong>Cast:</strong> Matthew McConaughey, Anne Hathaway, Jessica Chastain, Michael Caine, John Lithgow, Mackenzie Foy, Ellen Burstyn, Casey Affleck, Matt Damon, Topher Grace, Wes Bentley, David Gyasi, Timothée Chalamet<br>"),
      new Movie("<strong>Titolo:</strong> Taxi Driver<br>", "<strong>Genere:</strong> Noir, thriller, drammatico<br>", "<strong>Anno:</strong> 1976<br>", "<strong>Regista:</strong> Martin Scorsese<br>", "<strong>Cast:</strong> Robert De Niro, Jodie Foster, Albert Brooks, Harvey Keitel, Leonard Harris, Peter Boyle, Cybill Shepherd<br>")
    ];
  ?>

  <ul>
    <?php
      foreach($moviesArr as $movie) {
        echo "<li>{$movie->getInfo()}</li>";
      }
    ?>
  </ul>
</body>
</html>