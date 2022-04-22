<?php

    $address = '';
    if (isset($_GET['fetch-address'])) {
        // fetch data on database
        $address = 'KDC Plaza, Wilcon Bldg, Legazpi St, San Lorenzo';
    }
    echo json_encode([
        'address' => $address
    ]);
?>