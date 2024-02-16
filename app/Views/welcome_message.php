<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="card-group">
                <?php foreach ($candidates as $value) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $value->picture_url ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value->no_urut ?></h5>
                            <p class="card-text"><?= $value->candidate_name ?></p>
                            <a href="#" class="btn btn-primary">Pilih</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <!-- SCRIPTS -->

    <script>

    </script>

    <!-- -->

</body>

</html>