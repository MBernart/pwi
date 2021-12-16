<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>

<body>
    <header>
        <menu>
            <a href="index.html">
                Główna
            </a>
            <a href="procesory.html">
                Procesory
            </a>
            <a href="ram.html">
                RAM
            </a>
            <a href="grafika.html">
                Grafika
            </a>
        </menu>
        <div id="logo">
            <h2>Podzespoły komputerowe</h2>
        </div>
    </header>
    <main>
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
            <?php
            $connection = new mysqli('localhost', 'root', '', 'sklep');
            $sql = "SELECT `id`, `nazwa`, `opis`, `cena` FROM `podzespoly` WHERE `podzespoly`.`cena` < 1000";
            $result = $connection->query($sql);
            foreach ($result as $row)
            {
                echo <<< ROW
            <tr>
                <td>$row[id]</td>
                <td>$row[nazwa]</td>
                <td>$row[opis]</td>
                <td>$row[cena]</td>
            </tr>
ROW;
            }
            $connection->close();
            ?>
        </table>
    </main>
    <div id="dol">
        <footer>
            <img src="scalak.jpg" alt="promocje na procesory">
        </footer>
        <footer>
            <h4>Nasz Sklep komputerowy</h4>
            Współpracujemy z hurtownią <a href="http://edata.pl/" target="_blank">edata</a>
        </footer>
        <footer>
            <p>zadzwoń: 601 602 603</p>
        </footer>
        <footer>
            <p>Stronę wykonał: numer 4</p>
        </footer>
    </div>
</body>

</html>