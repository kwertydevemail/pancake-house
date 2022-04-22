<?php
    session_start();
    if (isset($_GET['purchaseType'])) {
        $purchaseType = $_GET['purchaseType'];
        $_SESSION['purchaseType'] = $purchaseType;
        header("Location: .");
    }
    $currentUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $explodedUrl = explode('/',$currentUrl);
    $withAddress = '';
    $purchaseType = '';
?>

<?php include 'src/includes/header.php';?>
<div class="main-wrapper <?= $withAddress?>">
    <?php
    include 'src/includes/c-hero-banner.php';
    if(is_yc()): include 'src/includes/c-you-do-you-rewards-home.php'; endif;
    if(is_max()): include 'src/includes/modals/c-modal-popup.php'; endif;
    include 'src/includes/c-product.php';
    include 'src/includes/c-partners.php';
    include 'src/includes/footer.php';
    ?>
</div>