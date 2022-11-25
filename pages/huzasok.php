<?php

$sql = Huzasok();
$result = ExecuteQuery($sql, $connection);

?>

<div class="container py-3">
        <h1 class="text-center display-5">Húzások</h1>
        <p class="fs-4">
            Válassz egy évet:
        </p>
        <div id="gombok">
            <?php while($sor = mysqli_fetch_row($result)) { ?>
                <a href="./?page=ev&ev=<?php echo $sor[0]; ?>" class="btn btn-primary m-1"><?php echo $sor[0]; ?></a>
            <?php } ?>
        </div>
    </div>