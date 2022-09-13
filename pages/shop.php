<?php
  require "../Includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">

    <!--<link href="https://fonts.googleapis.com/css2?family=Mingzat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">-->
    
    <title>Sady peremogy</title>
</head>
<body>
    <!--Шапка-->
    <section>
        <div class="wrapper">
            <!--Меню навігації-->
            
            <?php include "../Includes/header.php"; ?>

            <!--Фото-слайди-->

            <?php include "../Includes/slider.php"; ?>

        </div>
    </section>
    <h1>Магазин</h1>
    <!--Підвал-->
    <section>
        <div class="wrapper">

        <?php include "../Includes/footer.php"; ?>

        </div>
    </section>
</body>
</html>