<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Php Hotel</title>
</head>
<body>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    echo '<h1>Hotels</h1>';

    echo '<div><div class="row mt-5 mb-1">';
    //Printer della tabella
    for ($i=0; $i < count($hotels); $i++) {
        //Printer dell'intestazione della tabella
        if ($i==0){
            foreach ($hotels["$i"] as $key => $value) {
                echo "<div class='col-2'><strong>" . ucwords($key) . "</strong></div>";
            };
            echo '</div>';
        };
        echo '<div class="row">';

        //Printer del contenuto della tabella
        foreach ($hotels["$i"] as $key => $value) {   
            if ($value===true||$value===false){
                if ($value===true){
                echo "<div class='col-2'>Presente</div>";
                } else{
                    echo "<div class='col-2'>Assente</div>";
                }
            } else {      
            echo "<div class='col-2'>" . ucwords($value) . "</div>"; 
            }        
        }
        echo '</div>';
    }

    

    // foreach ($hotels as $hotel) {
    //     foreach ($hotel as $key => $value) {
    //         echo "<div> $key: $value </div>";
    //     }
    //     echo '<br>';
    // }
    echo '</div>';
?>
    
</body>
</html>