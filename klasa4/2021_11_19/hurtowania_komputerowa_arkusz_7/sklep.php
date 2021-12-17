<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl1.css">
    <title>Hurtownia</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="komputer.png" alt="hurtowania komputerowa">
        </div>
        <div id="lista">
            <ul>
                <li>Sprzęt</li>
                <ol>
                    <li>Procesory</li>
                    <li>Pamięć RAM</li>
                    <li>Monitory</li>
                    <li>Obudowy</li>
                    <li>Karty graficzne</li>
                    <li>Dyski twarde</li>
                </ol>
                <li>Oprogramowanie</li>
            </ul>
        </div>
        <div id="kategoria-form">
            <h2>Hurtownia komputerowa</h2>
            <form action="" method="post">
                Wybierz kategorię sprzętu
                <input type="number" name="kategoria" id="">
                <input type="submit" value="SPRAWDŹ">
            </form>
        </div>
    </header>
    <main>
        <h1>Podzespoły we wskazanej kategorii </h1>
        <?php
        $connection = new mysqli('localhost', 'root', '', 'pwi_sklep');
        if (isset($_POST['kategoria']))
        {
            $sql = "SELECT `nazwa`, `opis`, `cena` FROM `podzespoly` WHERE `typy_id` = $_POST[kategoria]";
            $result = $connection->query($sql);
            foreach ($result as $row)
            {
                echo "<p>$row[nazwa] $row[opis], CENA: $row[cena]</p>";
            }
        }
        ?>
    </main>
    <footer>
        <h3>Hurtownia działa od poniedziałku do soboty w godzinach 700-1600, oznaczenie minut z zastosowaniem indeksu górnego</h3>
        <a href="mailto: bok@hurtowania.pl">Napisz do nas</a>
        Partnerzy <a href="http://intel.pl/" target="_blank">Intel</a>
        <a href="http://amd.pl/" target="_blank">AMD</a> <br>
        <p>Stronę wykonał Mateusz</p>
    </footer>
</body>
