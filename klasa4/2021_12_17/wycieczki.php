<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <?php
    $connection = new mysqli('localhost', 'root', '', 'egzamin3');
    ?>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section>
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">Napisz do nas</a>
            <p>telefon: 555666777</p>
            <!-- <form action="#" style="margin-left: 10px;"> -->
            imię: <br>
            <input type="text" name="imie" id="imie"> <br><br>
            nazwisko: <br>
            <input type="text" name="nazwisko" id="nazwisko"> <br><br>
            email: <br>
            <input type="email" name="email" id="email">
            <p id='typo'></p>
            <button id='sprawdz'>SPRAWDŹ DANE</button>
            <script>
                let typo = document.getElementById('typo');
                document.getElementById('sprawdz').addEventListener('click', () => {
                    typo.innerHTML = "";
                    let imie_v = document.getElementById('imie').value;
                    let nazwisko_v = document.getElementById('nazwisko').value;
                    let email_v = document.getElementById('email').value;
                    if (imie_v.length < 3) {
                        typo.innerHTML += "Imię jest za krótkie!!! <br>";
                    }
                    if (nazwisko_v < 5) {
                        typo.innerHTML += "Nazwisko jest za krótkie!!! <br>";
                    }
                    if (!email_v.includes('@')) {
                        typo.innerHTML += "Email jest nieprawidłowy!!!"
                    }
                })
            </script>
            <!-- </form> -->
        </section>
        <section>
            <h2>GALERIA</h2>
            <?php
            $sql = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `zdjecia`.`podpis` ASC";
            $result = $connection->query($sql);
            foreach ($result as $row)
            {
                echo "<img src='egzamin3/$row[nazwaPliku]' alt='$row[podpis]'>";
            }
            ?>

        </section>
        <section>
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </section>
    </main>
    <div id="dane">
        <h2 style="margin-top: 0;">LISTA WYCIECZEK</h2>
        <?php
        $sql = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna`;";
        $result = $connection->query($sql);
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>data wyjazdu</th>
                <th>cel</th>
                <th>cena</th>
            </tr>
            <?php
            foreach ($result as $row)
            {
                // echo "$row[id]. $row[dataWyjazdu], $row[cel], cena: $row[cena] <br>";
            ?>
                <tr>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['dataWyjazdu'] ?></th>
                    <th><?php echo $row['cel'] ?></th>
                    <th><?php echo $row['cena'] . " zł" ?></th>
                </tr>
            <?php
            }
            $connection->close();
            ?>
        </table>
    </div>
    <footer>
        <p>Stronę wykonał: 4</p>
    </footer>
</body>

</html>