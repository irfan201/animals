<?php

    require_once('connection.php');

    $query = mysqli_query($connection, "SELECT * FROM animalsdata");

    $result = array();
    while($row = mysqli_fetch_array($query)){
        array_push($result, array(
            'id' => $row['id'],
            'name' => $row['name'],
            'image_link' => $row['image_link'],
            'habitat' => $row['habitat'],
            'weight_min' => $row['weight_min'],
            'latin_name' => $row['latin_name'],
            'animal_type' => $row['animal_type'],
            'active_time' => $row['active_time'],
            'lifespan' => $row['lifespan'],
            'geo_range' => $row['geo_range'],
            'lenght_min' => $row['length_min'],
            'weight_max' => $row['weight_max'],

        ));
    }

    echo json_encode(
        array( 'AnimalsResponse' => $result )
    );


?>