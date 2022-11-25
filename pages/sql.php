<?php

$connection = Connect();
$sql = "SELECT * FROM otos;";

if ( isset( $_GET["page"] ) ) {

}

function Huzasok() {
    return "SELECT DISTINCT ev FROM otos;";
}

function Ev($ev) {
    return "SELECT DISTINCT het FROM otos WHERE ev = " . $ev . ";";
}

function Adatlap($ev, $het) {
    return "SELECT * FROM otos WHERE ev = " . $ev . " AND het = " . $het . ";";
}

function Mikor() {
    return "SELECT ID, ev, het, talalat5_db, talalat5_huf FROM otos WHERE talalat5_huf <> 0;";
}

function Tippelo() {
    $tomb = [];
    for ($i = 0; $i < 5; $i++) {
        $ertek = rand(1, 90);
        while (Tartalmaz($tomb, $ertek)) {
            $ertek = rand(1, 90);
        }
        array_push($tomb, $ertek);
    }
    return $tomb;
}

function Tartalmaz($tomb, $ertek) {
    $index = 0;
    while ($index < count($tomb) && $tomb[$index] != $ertek) {
        $index = $index + 1;
    }
    return $index < count($tomb);
}

function ExecuteQuery($sql, $connection) {
    return mysqli_query($connection, $sql);
}

?>