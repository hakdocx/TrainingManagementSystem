<link href='https://css.gg/check-o.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="gg-check-o"> </i> <?= $_SESSION['message']; ?>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>