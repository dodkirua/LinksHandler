<?php

use Dodkirua\LinksHandler\Controller\ErrorController;

include '../View/_partials/header.php';

echo "<h1>LinksHandler</h1>";
include '../View/_partials/menu.php';
?>

<div id="display">
    <?php
    /* @var array $var render parameter  */
    if ($var['error'] !== null){
        echo "
        <div id='error'>
        " . ErrorController::Error($var['error'])['error'] . "
        </div>
        ";
    }
    ?>


    <?php
    /* @var string $html render's parameter */
    echo $html;
    ?>
</div>

<?php

include '../View/_partials/footer.php';
?>
