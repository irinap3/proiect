<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prezentare de imagini</title>
    <style>
            .margini{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px; /* Face ca întreaga înălțime a paginii să fie centrată pe ecran */
            margin: 0; /* Elimină marginile implicite ale paginii */
        }

        .image-container img {
            max-width: 40%;
            height: 40%;
            text-align:center; /* Spațiu între imagini */
        }
    </style>
</head>
<body>

    <div class="image-container">
        <?php
            $images = array('/images/baie1.jpeg', '/images/baie2.jpeg', '/images/baie3.jpeg'); // Înlocuiți aceste nume de fișiere cu imaginile dvs.
            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Imagine">';
            }
        ?>
    </div>

</body>
</html>
