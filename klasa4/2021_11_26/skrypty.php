<?php

$GLOBALS['connection'] = new mysqli('localhost', 'root', '', 'pwi_baza');

function skr1()
{
    $sql = "SELECT `zwierzeta`.`gatunek`, `odzywianie`.`rodzaj` 
            FROM `zwierzeta`   
                JOIN `odzywianie` 
                    ON `zwierzeta`.`Odzywianie_id` = `odzywianie`.`id`";
    $result = $GLOBALS['connection']->query($sql);
    $outp = "<ul>";
    foreach ($result as $row)
    {
        $outp .= "<li>$row[gatunek] -> $row[rodzaj]</li>";
    }
    $outp .= "</ul>";

    echo $outp;
}


function skr2($rodzaj)
{
    switch ($rodzaj)
    {
        case 1:
            echo "<h3>Drapieżnik</h3>";
            break;
        case 2:
            echo "<h3>Roślonożerne</h1>";
            break;
        case 3:
            echo "<h3>Padlinożerne</h3>";
            break;
        case 4:
            echo "<h3>Wszystkożerne</h3>";
            break;
        default:
            echo "<h3></h3>";
            break;
    }

    $sql = "SELECT `id`, `gatunek`, `wystepowanie` FROM `zwierzeta` 
    WHERE `odzywianie_id` = $rodzaj";

    $result = $GLOBALS['connection']->query($sql);

    foreach ($result as $row)
    {
        echo "<p>$row[id].$row[gatunek],$row[wystepowanie]</p>";
    }
}
