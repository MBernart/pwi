<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }

        td {
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <?php
    require_once("polaczenie.php");
    echo mysqli_error($polaczenie);

    $wynik_kwerendy = mysqli_query(
        $polaczenie,
        "SELECT `id_prac`, `nazwisko`, `placa_pod`, `placa_dod`, `zatrudniony`
        FROM 
    `pracownicy`"
    );

    echo mysqli_error($polaczenie);
    echo <<< TABELA
    <table>
    <tr>
    <td>Identyfikator</td>
    <td>nazwisko</td>
    <td>płaca</td>
    <td>zatrudniony</td>
</tr>
TABELA;
    foreach ($wynik_kwerendy as $wiersz)
    {
        $placa = $wiersz['placa_pod'] + $wiersz['placa_dod'];
        echo <<< WIERSZ
<tr>
<td>$wiersz[id_prac]</td>
<td>$wiersz[nazwisko]</td>
<td>$placa</td>
<td>$wiersz[zatrudniony]</td>
</tr>
WIERSZ;
    }
    echo "</table>";
    ?>
</body>

</html>