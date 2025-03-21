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

    echo '<h1>Hotels</h1>'; ?>

    <form method="GET" action="./index.php" class="row align-items-center myform">
        <div class="col-2">
            <label for="vote">Voto</label>
            <select name="vote" id="vote">
                <option value="">Tutti</option>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-2">
            <input type="checkbox" name="parking" id="parking">
            <label for="parking">Parcheggio</label>
        </div>
        <div class="col-2">
            <button class="btn btn-primary">Cerca</button>
        </div>
    </form>

    <?php echo '<div class="tabella"><div class="row mt-2 mb-3">';
    $parking = $_GET['parking'] ?? "off";
    $vote = $_GET['vote'] ?? "0";

    //Printer della tabella
    for ($i = 0; $i < count($hotels); $i++) {
        //Printer dell'intestazione della tabella
        if ($i == 0) {
            foreach ($hotels["$i"] as $key => $value) {
                if ($key === "vote" || $key === "parking") {
                    echo "<div class='col-1'><strong>" . ucwords($key) . "</strong></div>";
                } elseif ($key === "distance_to_center") {
                    echo "<div class='col-3'><strong> Distance to Center</strong></div>";
                } elseif ($key === "description") {
                    echo "<div class='col-3'><strong>" . ucwords($key) . "</strong></div>";
                } else {
                    echo "<div class='col-2'><strong>" . ucwords($key) . "</strong></div>";
                }
            };
            echo '</div><hr>';
        };

        $hotel = $hotels["$i"];

        if (($parking === "on" && $hotel['parking'] == 0) || $hotel['vote'] < $vote) {
        } else {
            //Printer del contenuto della tabella
            echo '<div class="row">';
            foreach ($hotels["$i"] as $key => $value) {
                if ($key === "vote" || $key === "parking") {
                    if ($value === true) {
                        echo "<div class='col-1'>Presente</div>";
                    } elseif ($value === false) {
                        echo "<div class='col-1'>Assente</div>";
                    } else {
                        echo "<div class='col-1'>" . ucwords($value) . "</div>";
                    }
                } elseif ($key === "distance_to_center" || $key === "description") {
                    echo "<div class='col-3'>" . ucwords($value) . "</div>";
                } else {
                    echo "<div class='col-2'>" . ucwords($value) . "</div>";
                }
            }
            echo '</div><hr>';
        }
    }

    echo '</div>'; ?>

</body>

</html>