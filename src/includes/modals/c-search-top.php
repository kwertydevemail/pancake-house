<?php
    if(is_max()):
        $content = array(
            'static' => array(
                'title' => 'What are you looking for?',
                'search_placeholder' => 'Search for products or locations'
            ),
            'buttons' => array(
                'search' => 'Search'
            )
        );

        $search_items = [
            [
                'name' => 'Sinigang Na Hipon',
                'category' => 'food',
            ],
            [
                'name' => 'Chicken Pancit Canton',
                'category' => 'food',
            ],
            [
                'name' => 'Sizzling Tofu',
                'category' => 'food',
            ],
            [
                'name' => 'Chicken Lumpiang Shanghai Platter',
                'category' => 'food',
            ],
            [
                'name' => 'SInigang Na Baboy',
                'category' => 'food',
            ],
            [
                'name' => 'Fresh Lumpiang Ubod',
                'category' => 'food',
            ],
            [
                'name' => 'Bataan - Balanga',
                'category' => 'location',
            ],
            [
                'name' => 'Bataan - Vista Mall',
                'category' => 'location',
            ],
            [
                'name' => 'Batangas - Lemery',
                'category' => 'location',
            ],
        ];

    endif;

    if(is_ph()):
        $content = array(
            'static' => array(
                'title' => 'What are you looking for?',
                'search_placeholder' => 'Search for products or locations'
            ),
            'buttons' => array(
                'search' => 'Search'
            )
        );

        $search_items = [
            [
                'name' => 'Sinigang Na Hipon',
                'category' => 'food',
            ],
            [
                'name' => 'Chicken Pancit Canton',
                'category' => 'food',
            ],
            [
                'name' => 'Sizzling Tofu',
                'category' => 'food',
            ],
            [
                'name' => 'Chicken Lumpiang Shanghai Platter',
                'category' => 'food',
            ],
            [
                'name' => 'SInigang Na Baboy',
                'category' => 'food',
            ],
            [
                'name' => 'Fresh Lumpiang Ubod',
                'category' => 'food',
            ],
            [
                'name' => 'Bataan - Balanga',
                'category' => 'location',
            ],
            [
                'name' => 'Bataan - Vista Mall',
                'category' => 'location',
            ],
            [
                'name' => 'Batangas - Lemery',
                'category' => 'location',
            ],
        ];

    endif;
?>

<section class="search-container" id="search-top-nav">
    <div class="search-content">
        <div class="search-container--search-details">
            <h3 class="o-header-title"><?= $content['static']['title']; ?></h3>
            <div id="groupInp" class="group-input">
                <div id="search-content" class="group-input-content">
                    <input type="text" placeholder="<?= $content['static']['search_placeholder']; ?>" id="search-input">
                    <?php foreach($search_items as $k => $v): ?>
                        <a href="search.php?name=<?= $v['name'] ?>"><i class="<?= $v['category'] == 'location' ? 'ic-max-location-search' : 'ic-max-food-search' ?>"></i> <span><?= $v['name'] ?></span></a>
                    <?php endforeach; ?>
                </div>
                <button class="o-button">
                    <a href="/search.php">
                        <span class=" [ u-dn-mb u-db-dt] "><?= $content['buttons']['search']; ?></span>
                        <i class="ic-max-search-white [ u-dn-dt u-db-mb ]"></i>
                    </a>
                </button>
            </div>

        </div>
    </div>
</section>