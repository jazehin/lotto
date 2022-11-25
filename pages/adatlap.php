<?php

if (isset($_GET["ev"])) {
    $ev = $_GET["ev"];
}
else {
    $ev = mysqli_fetch_array(ExecuteQuery("SELECT ev FROM otos ORDER BY ev ASC LIMIT 1;", $connection))[0];
}

if (isset($_GET["het"])) {
    $het = $_GET["het"];
}
else {
    $het = mysqli_fetch_array(ExecuteQuery("SELECT het FROM otos WHERE ev = " . $ev . " ORDER BY het ASC LIMIT 1;", $connection))[0];
}

$sql = Adatlap($ev, $het);
$result = mysqli_fetch_array(ExecuteQuery($sql, $connection));



?>


<div class="container py-3">
    <h1 class="text-center display-5">Húzások</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 fs-5">
                <p>Az ötös Lottó nyerőszámai:</p>
                <p>
                    <?php echo $result["szam1"]; ?>,
                    <?php echo $result["szam2"]; ?>,
                    <?php echo $result["szam3"]; ?>,
                    <?php echo $result["szam4"]; ?>,
                    <?php echo $result["szam5"]; ?>
                </p>
            </div>
            
            <div class="col-md-6">
            <?php if ($result["talalat2_huf"] == 0) {
                echo '<p class="fs-5">A nyereményekről nincs adat...<p>';
            } else { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">DARAB</th>
                            <th scope="col">HUF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Öt találatos</td>
                            <td><?php echo $result["talalat5_db"]; ?></td>
                            <td><?php echo number_format($result["talalat5_huf"], 0, "", " "); ?> Ft</td>
                        </tr>
                        <tr>
                            <td>Négy találatos</td>
                            <td><?php echo $result["talalat4_db"]; ?></td>
                            <td><?php echo number_format($result["talalat4_huf"], 0, "", " "); ?> Ft</td>
                        </tr>
                        <tr>
                            <td>Három találatos</td>
                            <td><?php echo $result["talalat3_db"]; ?></td>
                            <td><?php echo number_format($result["talalat3_huf"], 0, "", " "); ?> Ft</td>
                        </tr>
                        <tr>
                            <td>Két találatos</td>
                            <td><?php echo $result["talalat2_db"]; ?></td>
                            <td><?php echo number_format($result["talalat2_huf"], 0, "", " "); ?> Ft</td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>