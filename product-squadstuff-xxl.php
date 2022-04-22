<?php
    session_start();
    $currentUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $explodedUrl = explode('/',$currentUrl);
    $withAddress = '';
    $purchaseType = '';
    if (isset($_SESSION['purchaseType'])) {
        $withAddress = 'with-address';
        $purchaseType = $_SESSION['purchaseType'];
    }
    $breadcrumbs = [
        'Group Bundles',
        'Squad Stuff XXL'
    ];
?>

<?php include 'src/includes/header.php';?>
<div class="main-wrapper <?= $withAddress?>">
    <?php include 'src/includes/c-breadcrumbs.php'?>
    <?php include 'src/includes/c-product-squadstuff-xxl.php'?>
    <?php include 'src/includes/c-related-products.php';?>
    <?php include 'src/includes/footer.php';?>
</div>