<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Grzybobranie</title>
</head>

<body>
    <?php
    $connection = new mysqli('localhost', 'root', '', 'pwi_dane2');
    ?>
    <header>
        <div id="logo">
            <a href="borowik.jpg">
                <img src="borowik-miniatura.jpg" alt="Grzybobranie">
            </a>
        </div>
        <div id="title">
            <h1>Idziemy na grzyby!</h1>
        </div>
    </header>
    <main>
        <section>
            <?php
            // SKRYPT 1
            $sql = "SELECT `potoczna`, `nazwa_pliku` 
                FROM `grzyby`";
            $result = $connection->query($sql);
            foreach ($result as $row)
            {
                echo "<img src='$row[nazwa_pliku]' title='$row[potoczna]'>";
            }
            ?>
        </section>
        <aside>
            <h2>Grzyby jadalne</h2>
            <?php
            // SKRYPT 2
            // $connection->
            $sql = "SELECT `nazwa`, `potoczna`
            FROM `grzyby`
            WHERE `jadalny` = 1";
            $result = $connection->query($sql);
            foreach ($result as $row)
            {
                echo "<p>$row[nazwa] ($row[potoczna])</p>";
            }
            ?>
            <h2>Polecamy do sosów</h2>
            <?php
            // SKRYPT 3
            $sql = "SELECT `grzyby`.`nazwa`, `potoczna`, `rodzina`.`nazwa` as `nazwa_rodziny`
            FROM `grzyby`
            JOIN `potrawy`
            ON `grzyby`.`potrawy_id` = `potrawy`.`id`
            JOIN `rodzina` 
            ON  `grzyby`.`rodzina_id` = `rodzina`.`id`
            WHERE `potrawy`.`nazwa` = 'sos'";
            $result = $connection->query($sql);
            echo "<ol>";
            foreach ($result as $row)
            {
                echo "<li>$row[nazwa] ($row[potoczna]), rodzina: $row[nazwa_rodziny] </li>";
            }
            ?>
            </ol>
        </aside>
    </main>
    <footer>
        Autor 00000000000 (Mateusz)
    </footer>
    <?php
    $connection->close();
    ?>
</body>

</html>