<?php

$sql = Mikor();
$result = ExecuteQuery($sql, $connection);

$index = 1;

?>

<div class="container py-3">
    <h1 class="text-center display-5">Mikor volt 5-ös?</h1>
    <p class="fs-5">Az adatok csak 1998-tól ismertek!</p>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Év</th>
                <th scope="col">Hét</th>
                <th scope="col">Darab</th>
                <th scope="col">HUF</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($sor = mysqli_fetch_row($result)) { ?>
                <tr>
                <td><?php echo $index ?></td>
                <td><?php echo $sor[1]; ?></td>
                <td><?php echo $sor[2]; ?>. hét</td>
                <td><?php echo $sor[3]; ?> darab</td>
                <td><?php echo number_format($sor[4], 0, "", " "); ?> Ft</td>
            </tr>
            <?php $index = $index + 1; ?>
            <?php } ?>
        </tbody>
    </table>
</div>