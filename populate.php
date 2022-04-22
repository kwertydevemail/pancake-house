<?php
    $countries = json_decode(file_get_contents("src/js/countries.json"), true);
    $phCities = json_decode(file_get_contents("src/js/ph-cities.json"), true);
    $phProvinces = json_decode(file_get_contents("src/js/ph-provinces.json"), true);

    sort($phProvinces);
    sort($phCities);

    $cities = [];
    $provinces = [];

    if (isset($_GET['fetch-data']) && $_GET['fetch-data'] == 'country') {
        $countries = [
            [
                "name" => "Afghanistan",
                "code" => "AF"
            ],
            [
                "name" => "Albania",
                "code" => "AL"
            ],
            [
                "name" => "Philippines",
                "code" => "PH"
            ],
            [
                "name" => "United States",
                "code" => "US"
            ]
        ];
        echo json_encode($countries);
    }
    if (isset($_GET['fetch-country']) && isset($_GET['fetch-country'])) {
        // this can be replaced by database queries
        if ($_GET['fetch-country'] == 'Philippines') {
            $cities = $phCities;
            $provinces = $phProvinces;
        }
        echo json_encode([
            'cities' => $cities,
            'provinces' => $provinces
        ]);
    }
?>