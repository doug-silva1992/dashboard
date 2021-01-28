<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?=$root?>bootstrap/dist/css/bootstrap.min.css"  rel="stylesheet">
        <script src="<?=$root?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <title><?= $title; ?></title>
    </head>
    <body>
        <div class="container">
            <header>
                <figure align="center">
                    <img src="<?=$root?>img/crud.png">
                </figure>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?=$root?>index.php">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?=$root?>crud/create.php">Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?=$root?>crud/read.php">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?=$root?>crud/read_update.php">Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?=$root?>crud/delete.php">Delete</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
