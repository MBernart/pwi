<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odżywianie zwierzą</title>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <?php require_once("skrypty.php"); ?>
    <header>
        <h2>DRAPIEŻNIKI I INNE</h2>
    </header>
    <div id="styl-zycia">
        <h2>Wybierz styl życia:</h2>
        <form method="POST" action="">
            <select name="rodzaj" id="">
                <option value="1">Drapieżniki</option>
                <option value="2">Roślinożerne</option>
                <option value="3">Padlinożerne</option>
                <option value="4">Wszystkożerne</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>
    </div>

    <main>
        <section>
            <h3>Lista zwierząt</h3>
            <?php skr1(); ?>
        </section>
        <section>
            <?php if (isset($_POST['rodzaj']))
            {
                skr2($_POST['rodzaj']);
            }
            ?>
        </section>
        <section>
            <img src="drapieznik.jpg" alt="Wilki">
        </section>
    </main>
    <footer>
        <a href="pl.wikipedia.org" target="_blank">Poczytaj o zwierzętach na Wikipedii</a>
        <br> Autor strony: 4
    </footer>
</body>

</html>