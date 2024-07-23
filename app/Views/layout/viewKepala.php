<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $untukViewTitle; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTDI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/controllerWebsaya/methodBeranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/controllerWebsaya/methodProfil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/controllerWebsaya/methodKontakkami">Kontak Kami</a>
                    </li>
                        <a class="nav-link" href="/controllerWebsaya/methodKatalogDatabase">Katalog_Database</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <hr>
