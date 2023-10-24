<!-- Create a multidimensional array to store information about movies, including title, director, and
release year for at least two movies. Display the information for one of the movies. -->

<?php

    $movies = array(
        array(
            'title' => 'Jawan',
            'director' => 'Atlee Kumar',
            'releaseYear' => 2023
        ),
        array(
            'title' => 'Gadar 2',
            'director' => 'Anil Sharma',
            'releaseYear' => 2023
        )
    );
    
    echo "Movie Title: " . $movies[0]["title"] . "<br>";
    echo "Director: " . $movies[0]["director"] . "<br>";
    echo "Release Year: " . $movies[0]["releaseYear"] . "<br>";
    
    // print_r($movies[1]);

?>
