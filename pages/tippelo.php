<?php

$tomb = Tippelo();

?>

<div class="container py-3">
    <h1 class="text-center display-5">Számtippelő</h1>
    <p class="fs-5">Nyerőszám tippek: 
        <?php for ($i = 0; $i < count($tomb); $i++) { 
            echo $tomb[$i];
            if ($i < count($tomb) - 1) {
                echo ", ";
            }
        } ?>
    </p>
    
</div>