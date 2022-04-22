<?php
    $data = [
        'order_number' => 'YC6543370',
        'subtotal' => 450,
        'extra_charges' => 80,
        'grand_total' => 885,
        'order_details' => [
            [
                'title' => 'Garden Special',
                'total' => 210,
                'options' => [
                    [
                        'name' => 'Garden Special 15” Large',
                        'qty' => 1,
                        'price' => 790,
                        'options' => [
                            [
                                'name' => 'Regular Cut'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Parmesan Cheese',
                        'qty' => 1,
                        'price' => 35,
                    ]
                ]
            ],
            [
                'title' => 'Charlie Chan ®',
                'total' => 210,
                'options' => [
                    [
                        'name' => 'Regular',
                        'qty' => 1,
                        'price' => 210,
                    ],
                ]
            ],
            [
                'title' => 'Wings',
                'total' => 450,
                'options' => [
                    [
                        'name' => '1/2-Pound',
                        'qty' => 1,
                        'price' => 450,
                        'options' => [
                            [
                                'name' => 'Sweet Soy'
                            ],
                            [
                                'name' => 'Sweet Soy'
                            ],
                            [
                                'name' => 'Hot Chix'
                            ],
                            [
                                'name' => 'Hot Chix'
                            ]
                        ]
                    ],
                ]
            ]
        ]
    ];

    echo json_encode($data);
?>