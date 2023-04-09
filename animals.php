<?php
    header('Access-Control-Allow-Origin: *');

    $animals = array(
        array(
            'img'               => "rawr.jpg",
            'name'              => "Lion",
            'scientific_name'   => "Panthera leo",
            'diet'              => "Carinvore",
            'average_lifespan'  => "15 to 16 years",
            'habitats' => array(
                "Tanzania",
                "Botswana",
                "Kenya",
                "South Africa",
                "Zambia"
                
            )

        ),
        array(
            'img'               => "leo.jpg",
            'name'              => "Leopard",
            'scientific_name'   => "Panthera pardus",
            'diet'              => "Carinvore",
            'average_lifespan'  => "12 to 17 years",
            'habitats' => array(
                "Sub-Saharan Africa",
                "Arabian Peninsula",
                "Southwestern and eastern Turkey",
                "Sinai Judean Desert",
                "Russia"
            )
        
        ),
        array(
            'img'               => "sheep.jpg",
            'name'              => "Sheep",
            'scientific_name'   => "Ovis aries",
            'diet'              => "Herbivore",
            'average_lifespan'  => "10 to 12 years",
            'habitats' => array(
                "China",
                "Australia",
                "India",
                "Chad",
                "Sudan"
            )
        
        ),
        array(
            'img'               => "deer.jpg",
            'name'              => "Deer",
            'scientific_name'   => "Cervidae",
            'diet'              => "Herbivore",
            'average_lifespan'  => "6 to 14 years",
            'habitats' => array(
                "Alabama",
                "Alaska",
                "Arkansas",
                "Arizona",
                "California"
            )
        
        ),
        array(
            'img'               => "tiger.jpg",
            'name'              => "Tiger",
            'scientific_name'   => "Panthera tigris",
            'diet'              => "Carinvore",
            'average_lifespan'  => "8 to 10 years",
            'habitats' => array(
                "Vietnam",
                "Cambodia",
                "India",
                "Bangladesh",
                "Bhutan"
            )
        
        )
    );
    $myJSON = json_encode($animals);

    echo $myJSON;
?>
    