<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Filmoteka</title>
</head>

<body>
    <?php
        $connection = new mysqli('localhost', 'root', '', 'dane');
    ?>
    <header>
        <div class="header-element">
            <img src="klaps.png" alt="Nasze filmy">
        </div>
        <div class="header-element">
            <h1>BAZA FILMÓW</h1>
        </div>
        <div class="header-element">
            <form action="." method="post">
                <select name="gatunek">
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="animacja">animacja</option>
                    <option value="dramat">dramat</option>
                    <option value="horror">horror</option>
                    <option value="komedia">komedia</option>
                </select>
                <input type="submit" value="Filmy">
            </form>
        </div>
        <div class="header-element"><img src="gwiezdneWojny.jpg" alt="szturmowcy"></div>
    </header>
    <main>
        <div class="main-element">
            <h2>Wybrano filmy:</h2>
            <?php
                $sql = "SELECT `tytul`, `rok`, `ocena` 
                        FROM 
                            `filmy` 
                        JOIN `gatunki` 
                            ON `filmy`.`gatunki_id` = `gatunki`.`id` 
                        WHERE `gatunki`.`nazwa` = '$_POST[gatunek]'";
                $result = $connection->query($sql);
                foreach ($result as $row) {
                    echo "<p>Tytuł: $row[tytul], Rok produkcji: $row[rok], Ocena: $row[ocena]</p>";
                }
            ?>
        </div>
        <div class="main-element">
            <h2>Wszystkie filmy</h2>
            
            <?php
                $sql = "SELECT `filmy`.`id`, `tytul`, `rezyserzy`.`imie`, `rezyserzy`.`nazwisko` FROM `filmy` JOIN `rezyserzy` ON `filmy`.`rezyserzy_id` = `rezyserzy`.`id`";
                $result = $connection->query($sql);
                foreach ($result as $row) {
                    echo "<p>$row[id]. $row[tytul], reżyseria: $row[imie] $row[nazwisko]</p>";
                }
            ?>

        </div>
    </main>
    <footer>
        <p> Autor: Mateo </p>
        <a href="kwerendy.txt">Zapytania do bazy</a>
        <a href="filmy.pl" target="_blank">Przejdź do filmy.pl</a>
    </footer>
</body>

</html>