<?php
echo "<p class='non-visibile'>";
include __DIR__ . "/api.php";
echo "</p>"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <header>
    <div class="header-container">
      <img class="header-img" src="logo.svg" alt="">
  </div>
    </header>

    <main>
        <div class="container-fluid container-colore">
            <div class="container">
                <div class="row row-cols-5 justify-content-evenly">
                    <?php

                    foreach ($database as $disco) {

                        echo '<div class="disco col g-4">';
                        echo '<img src="' . $disco["poster"] . '" alt="' . $disco["title"] . '" />';
                        echo '<h5>' . $disco["title"] . '</h5>';
                        echo '<div class="testo">';
                        echo '<p>' . $disco["author"] . '</p>';
                        echo '<p class="anno">' . $disco["year"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }


                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>