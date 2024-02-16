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
            <div class="col-6">
                <form action="/admin/insert_candidate" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Urut</label>
                        <input type="text" name="nourut" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Calon</label>
                        <input type="text" name="candidate_name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Photo Profil</label>
                        <input type="file" name="profile_pict" class="form-control" id="inputGroupFile02">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success"></input>
                    </div>
                </form>
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