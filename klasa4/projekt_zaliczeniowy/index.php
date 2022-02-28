<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Loka Coffee</title>
</head>

<body>
    <?php
    require_once("scripts/connection.php")
    ?>
    <div class="container">
        <!-- <header class="d-flex mb-3 container fixed-top translate-middle bg-white"> -->
        <header class="d-flex mb-3 container fixed-top bg-white">
            <div class="logo w-25 justify-content-center d-flex align-items-center">
                <img id="logo-img" src="assets/logo.svg" class="img-fluid" style="max-height: 80%;" alt="logo">
            </div>
            <div class="container-fluid w-75">
                <nav class="row navbar justify-content-around d-flex align-items-center h-100 w-100">
                    <div class="col text-center h5"><a class="main-nav" href="#o-nas">O nas</a></div>
                    <div class="col text-center h5"><a class="main-nav" href="#oferta">Oferta</a></div>
                    <div class="col text-center h5"><a class="main-nav" href="#galeria">Galeria</a></div>
                    <div class="col text-center h5"><a class="main-nav" href="#kontakt">Kontakt</a></div>
                </nav>
            </div>
        </header>
        <div id="header-holder"></div>
        <main class="container-fluid">

            <section id="o-nas" class="mb-3 mt-2">
                <h3>O nas</h3>
                <div class="row ms-1 align-items-center">
                    <span class="col align-text-center">
                        <!-- soruce: http://la-cafe.pl/onas/ -->
                        <?php
                        $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'o-nas' ORDER BY `text_fields`.`paragraphs_order` ASC";
                        $result = $connection->query($sql);
                        foreach ($result as $row)
                        {
                            echo "<p>";
                            echo $row['content'];
                            echo "</p>";
                        }
                        ?>
                    </span>
                    <div class="col d-flex align-items-center justify-content-center">
                        <?php
                        $sql = "SELECT * FROM `images` WHERE `section_name` = 'o-nas'";
                        $result = $connection->query($sql);
                        $row = $result->fetch_assoc();
                        echo <<< LABEL
                        <img id="img-o-nas" class="img-fluid rounded increaseOnHover" src="assets/kawa-i-ciasta.jpg" alt="$row[alt]">
LABEL;
                        ?>
                    </div>
                </div>
            </section>
            <section id="oferta" class="mb-3">
                <h3>Oferta</h3>
                <span>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <button class="nav-link active drinks">Kawy</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link cakes">Ciasta</button>
                        </li>
                    </ul>
                    <table id='drinks' class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Mała (100ml) </th>
                                <th scope="col">Duża (200ml) </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM `coffee`";
                            $result = $connection->query($sql);
                            foreach ($result as $row)
                            {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['small_price'] ?></td>
                                    <td><?php if ($row['large_price'] == 0) echo "-";
                                        else echo $row['large_price'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <table id='cakes' class="table table-hover hide">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Opis</th>
                                <th scope="col">Cena (kostka) </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM `cakes`";
                            $result = $connection->query($sql);
                            foreach ($result as $row)
                            {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <p class="text-center">
                        <em>
                            <?php
                            $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'pod-menu' ORDER BY `text_fields`.`paragraphs_order` ASC";
                            $result = $connection->query($sql);
                            echo $result->fetch_assoc()['content'];
                            ?>
                        </em>
                    </p>
                </span>
            </section>
            <section id="galeria" class="mb-3">
                <h3>Galeria</h3>
                <div id="myPhotoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover">
                    <div class="carousel-inner mh-100">
                        <!-- images from: https://pixabay.com/ -->
                        <?php
                        $sql = "SELECT * FROM `images` WHERE `section_name` = 'slider' ORDER BY 1";
                        $result = $connection->query($sql);
                        $first = true;
                        foreach ($result as $row)
                        {
                        ?>
                            <div class="carousel-item <?php if ($first) echo "active" ?>">
                                <img class="d-block h-100 rounded img-fluid gallery-item" src="<?php echo $row['path'] ?>" alt="<?php echo $row['alt'] ?>">
                            </div>
                        <?php
                            $first = false;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myPhotoCarousel" data-bs-slide="prev">
                        <i class="carousel-control-prev-icon brown-icon"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myPhotoCarousel" data-bs-slide="next">
                        <i class="carousel-control-next-icon"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <section id="kontakt" class>
                <h3>Kontakt</h3>
                <div class="row container">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <div class="row">
                            <span>
                                <h6> <b> Numer telefonu: </b></h6>
                                <p>
                                    <?php
                                    $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'numer-telefonu' ORDER BY `text_fields`.`paragraphs_order` ASC";
                                    $result = $connection->query($sql);
                                    echo $result->fetch_assoc()['content'];
                                    ?>
                                </p>
                            </span>
                        </div>
                        <div class="row">
                            <span>
                                <h6> <b> Adres mailowy: </b> </h6>
                                <p>
                                    <?php
                                    $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'mail' ORDER BY `text_fields`.`paragraphs_order` ASC";
                                    $result = $connection->query($sql);
                                    $mail = $result->fetch_assoc()['content'];
                                    echo "<a href='mailto:$mail'>$mail</a>";
                                    ?>

                                </p>
                            </span>
                        </div>
                        <div class="row">
                            <span>
                                <h6> <b> Adres: </b></h6>
                                <p>
                                    <?php
                                    $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'adres' ORDER BY `text_fields`.`paragraphs_order` ASC";
                                    $result = $connection->query($sql);
                                    echo $result->fetch_assoc()['content'];
                                    ?>
                                    <span id="show-map">Pokaż mapę</span>
                                </p>
                            </span>
                        </div>

                        <div class="row">
                            <span>
                                <table>
                                    <th colspan="2">Godziny otwarcia:</th>
                                    <?php
                                    $sql = "SELECT * FROM `text_fields` WHERE `text_fields`.`section` = 'godziny-otwarcia' ORDER BY `text_fields`.`paragraphs_order` ASC";
                                    $result = $connection->query($sql);
                                    foreach ($result as $row)
                                    {
                                        $hours_data = explode(";", $row['content']);
                                        echo <<< LABEL
                                   <tr>
                                        <td>$hours_data[0]</td>
                                        <td>$hours_data[1]</td>
                                    </tr>
LABEL;
                                    }
                                    ?>
                                </table>
                                <p></p>
                            </span>
                        </div>
                        <div class="row">
                            <h6><b>Zaobserwuj nas:</b></h6>
                            <div class="row">
                                <div class="col-1">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="bi bi-facebook social-media"></i>
                                    </a>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1">
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="bi bi-instagram social-media"></i>
                                    </a>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1">
                                    <a href="https://tiktok.com" target="_blank">
                                        <i class="bi bi-tiktok social-media"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="my-map" class="col-8 d-flex justify-content-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1537.6748764632018!2d16.705516514810537!3d52.28139579449399!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47044d66fb47c127%3A0x2dc075318616ec64!2sLoka%20Coffee!5e0!3m2!1sen!2spl!4v1645960151901!5m2!1sen!2spl" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>
        </main>
        <footer class="pt-5">
            <p class="text-center">&copy; 2022 Mateusz Bernart</p>
        </footer>
    </div>
    <script src="js\script.js"></script>
</body>

</html>