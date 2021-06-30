<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- FONTS GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Listening is Everything - Spotify</title>
    </head>

    <body>
        <!-- HEADER -->
        <?php include_once __DIR__ . '/partials/template/header.php'; ?>
        <!-- /HEADER -->

        <!-- MAIN -->
        <main>
            <section id="discs" class="container">
                <?php include_once __DIR__ . '/partials/template/discs.php'; ?>
            </section>
        </main>
        <!-- /MAIN -->
    </body>
</html>