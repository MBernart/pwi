<?php
require_once("polaczenie.php");
echo mysqli_error($polaczenie);

$wynik_kwerendy = mysqli_query(
    $polaczenie,
    "SELECT `p1`.`id_prac`, `p1`.`nazwisko`, 
        `p2`.`id_prac` as `id_szefa` , `p2`.`nazwisko` as `nazwisko_szefa`
    FROM 
    `pracownicy` p1
    JOIN
    `pracownicy` p2 ON `p1`.`id_szefa` = `p2`.`id_prac`"
);

echo mysqli_error($polaczenie);
$i = 1;
foreach ($wynik_kwerendy as $wiersz)
{
    echo $i . ". id_prac: " . $wiersz['id_prac'] . ", nazwisko: " . $wiersz['nazwisko'] .
        ", id_szefa: " . $wiersz['id_szefa'] . ", nazwisko: " . $wiersz['nazwisko_szefa'] . "<br><br>";
    $i++;
}
