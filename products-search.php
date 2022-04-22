<?php

$data               = array();
$errors             = array();
$data['success']    = true;

if ( ! empty($errors)) {
    http_response_code(400);
    $data['success'] = false;
    $data['errors']  = $errors;
}

// use this to query the DB
$keyword = $_POST['searchKeyword'];

// Sample Content of DB Here
$data['products'] = array();
$data['products'][] = array( "product" => array(
        "product_name" => "Chicken Alfredo",
        "product_description" => "Creamy pasta with chicken strips, olives, and basil chiffonade.\r\n<br><br>\r\n<font size = \"1\"><i>Note: Image shown is large serving.</i></font>",
        "category_name" => "Pasta",
        "brand_id" => 17,
        "price" => 0,
        "availability" => null
    )
);
$data['products'][] = array( "product" => array(
        "product_name" => "Wings",
        "product_description" => "Expertly fried wingettes and drumettes – Crispy on the outside and juicy on the inside.<br><br>\r\n\r\n\r\nChoose up to four flavors per order: Sweet and tangy Sriracha, lip-smacking Sweet Soy, buttery Garlic Parmesan, or original Hot Chix (spicy)<br><br>\r\n\r\n\r\n<font><i>Note: Product in image is 1-pound Hot Chix wings.</font></i>\r\n\r\n\r\n\r\n\r\n\r\n",
        "category_name" => "Chicken",
        "brand_id" => 17,
        "price" => 0,
        "availability" => null
    )
);
$data['products'][] = array( "product" => array(
        "product_name" => "P100 Off On Four Seasons™!",
        "product_description" => "Get P100 off on all sizes of Four Seasons™ Original or Four Seasons™ All Meat. Offer\r\nis available for delivery, take-out, Curbside® pick-up, drive thru, and dine-in orders from\r\nMarch 1 to 13, 2022. Also available on GrabFood and Foodpanda.<br><br>\r\n\r\n<i><font size=1>Promo is available from March 1 to 13, 2022.<br>\r\nOffer is available for delivery, take-out, Curbside® pick-up, drive-thru, and dine-in orders from\r\nMarch 1 to 13, 2022. Also available on GrabFood and FoodPanda.<br>\r\nPer DTI Fair Trade Permit No. FTEB-137284 Series of 2022\r\n</font></i>.",
        "category_name" => "Promo",
        "brand_id" => 17,
        "price" => 0,
        "availability" => null
    )
);
$data['products'][] = array( "product" => array(
        "product_name" => "Solo Snack Steals! - Slice + Wedges",
        "product_description" => "Make boring snack times a thing of the past with our Solo Snack Steals! Enjoy a slice of a 12\" Classic Original Crust Pizza with any flavor of our Sloppy Wedges.<br><br>\r\n\r\n<i><font size =1>Offer is available for delivery, take-out, Curbside® pick-up, drive-thru, and dine-in from January 1 to December 31, 2022.\r\n<br>\r\nPer DTI Fair Trade Permit No. FTEB-130582 Series of 2021</i></font>",
        "category_name" => "Promo",
        "brand_id" => 17,
        "price" => 0,
        "availability" => null
    )
);

// Return of DB Here
header('Content-Type: application/json');
echo json_encode($data);