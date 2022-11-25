<?php

if (isset($_GET["ev"])) {
    $ev = $_GET["ev"];
} 
else {
    $ev = mysqli_fetch_array(ExecuteQuery("SELECT ev FROM otos ORDER BY ev ASC LIMIT 1;", $connection))[0];
}

$sql = Ev($ev);
$result = ExecuteQuery($sql, $connection);

?>

<div class="container py-3">
        <h1 class="text-center display-5">Húzások - <?php echo $ev; ?></h1>
        <p class="fs-4">
            Válassz hetet, hogy megnézd a húzás adatait:
        </p>
        <div id="gombok">
            <?php while($sor = mysqli_fetch_row($result)) { ?>
                <a href="./?page=adatlap&ev=<?php echo $_GET["ev"]; ?>&het=<?php echo $sor[0]; ?>" class="btn btn-primary m-1"><?php echo $sor[0]; ?>. hét</a>
            <?php } ?>
        </div>
        
    </div>