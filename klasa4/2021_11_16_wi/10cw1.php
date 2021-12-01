<?php
require_once("polaczenie.php");
echo mysqli_error($polaczenie);

$wynik_kwerendy = mysqli_query(
    $polaczenie,
    "SELECT `nazwisko`, `nazwa`
    FROM 
    `pracownicy` 
    JOIN
    `zespoly` ON `pracownicy`.`id_zesp` = `zespoly`.`id_zesp`"
);

foreach ($wynik_kwerendy as $wiersz)
{
    echo $wiersz['nazwisko'] . " pracuje w zespole " . $wiersz['nazwa'] . "<br><br>";
}
