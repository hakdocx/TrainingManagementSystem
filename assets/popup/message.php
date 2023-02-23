<link href='https://css.gg/check-o.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="col">
            <i class="gg-check-o"> </i> 
        </div>  
        <div class="col">
            <?= $_SESSION['message']; ?>
        </div>  
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>