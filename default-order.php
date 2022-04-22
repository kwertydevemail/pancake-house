<?php
    session_start();
    $currentUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $explodedUrl = explode('/',$currentUrl);
    $withAddress = false;
    $purchaseType = '';
    if (isset($_SESSION['purchaseType'])) {
        $withAddress = 'with-address';
        $purchaseType = $_SESSION['purchaseType'];
    }
    $breadcrumbs = [
        'Promos',
        '2-in-1 Welcome to ‘21'
    ];
?>

<?php include 'src/includes/header.php';?>
<div class="main-wrapper <?= $withAddress?> bg-yellow">
    <?php include 'src/includes/c-breadcrumbs.php'?>
    <?php include 'src/includes/c-default-details.php'?>
    <?php include 'src/includes/c-related-products.php';?>
    <?php include 'src/includes/footer.php';?>
</div>