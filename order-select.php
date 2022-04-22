<?php
    session_start();
    if (isset($_GET['purchaseType'])) {
        $purchaseType = $_GET['purchaseType'];
        $_SESSION['purchaseType'] = $purchaseType;
        header("Location: ".$_SERVER['PHP_SELF'].'?type='.$_GET['type'].'&name='.$_GET['name']);
    }
    $currentUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $explodedUrl = explode('/',$currentUrl);
    $withAddress = '';
    $purchaseType = '';
    if (isset($_SESSION['purchaseType'])) {
        $withAddress = 'with-address';
        $purchaseType = $_SESSION['purchaseType'];
    }
?>

<?php include 'src/includes/header.php';?>
<div class="main-wrapper <?= $withAddress?> <?php if(is_ph()): ?>bg-yellow<?php endif; ?>">
    <?php
        $type = isset($_GET['type']) ? $_GET['type'] : '';
        if ($type == 'promo') {
            if(is_ph()):
                $breadcrumbs = [
                    'Promos',
                    '2-in-1 Welcome to ‘21'
                ];
                include 'src/includes/c-breadcrumbs.php';
                include 'src/includes/c-default-details.php';
            endif;
            if(is_max()):
                $breadcrumbs = [
                    'Pancit, Lumpia, & Rice',
                    'Chicken Lumpiang Shanghai'
                ];
                include 'src/includes/c-breadcrumbs.php';
                include 'src/includes/c-product-details.php';
            endif;
        } elseif ($type == 'bundle') {
            if(is_ph()):
                $breadcrumbs = [
                    'Promos',
                    '2-in-1 Welcome to ‘21'
                ];
                include 'src/includes/c-breadcrumbs.php';
                include 'src/includes/c-default-details.php';
            endif;
            if(is_max()):
                $breadcrumbs = [
                    'Bundle & Promo',
                    'Standard Bundle'
                ];
                include 'src/includes/c-breadcrumbs.php';
                include 'src/includes/c-product-details.php';
            endif;
        } elseif ($type == 'pizza') {
            $breadcrumbs = [
                'NY-Style Original Crust',
                'Roasted Garlic & Shrimp'
            ];
            include 'src/includes/c-breadcrumbs.php';
            include 'src/includes/c-product-details.php';
        } elseif ($type == 'fried_chicken') {
            $breadcrumbs = [
                'Max’s Fried Chicken',
                'Whole Fried Chicken'
            ];
            include 'src/includes/c-breadcrumbs.php';
            include 'src/includes/c-product-details.php';
        } else {
            switch ($type) {
                case 'pasta':
                    $breadcrumbs = [
                        'Pasta',
                        'Charlie Chan®'
                    ];
                    break;
                case 'chicken':
                    $breadcrumbs = [
                        'Chicken',
                        'Wings'
                    ];
                    break;
                case 'desserts-beverages':
                    $breadcrumbs = [
                        'Desserts & Beverages',
                        $_GET['name']
                    ];
                    break;
            }
            
            include 'src/includes/c-breadcrumbs.php';
            include 'src/includes/c-standard-details.php';
        }
    ?>
    <?php include 'src/includes/c-related-products.php';?>
    <?php include 'src/includes/footer.php';?>
</div>