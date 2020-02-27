
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/css.css">
    <title>abbe-biere</title>
<meta name="description" content="...">
</head>

<body>
<header>
    <div class="row ">
        <div class="container ">
            <div class="align-items-center ">
                <div class="row ">

                    <div class="col-lg-12 text-center h1 ">
                        <br>
                        L'abbé bière
                    </div>
                    <div class="col-lg-12 text-center">
                        <p>Le culte de la bière<br></p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row nav">
        <div class="container ">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav navbar-left">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=home">Accueil<span
                                    class="sr-only ">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catégorie
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Blondes">Blonde</a>
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Blanches">Blanche</a>
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Brunes">Brune</a>
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Ambrées">Ambrée</a>
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Rosées">Rosée</a>
                                <a class="dropdown-item" href="index.php?page=categorie&cat=Rubis">Rubis</a>
                            </div>
                        </li>
                    </ul>
                    <ul class=" navbar-nav navbar-right">
                        <li class="nav-item text-center">
                            <a class="nav-link" href="index.php?page=login">Connection</a>
                        </li>
                        <li>
                            <div class="col-2 text-center ">
                                <button type="button" class="btn btn-outline-warning pull-right"><a
                                        href="index.php?page=panier"
                                        style="color: #EAA90B"> Panier </a>
                                </button>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>


</header>


@yield('main')

<footer>
    <div class="row bg-warning">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <p class="col-4 text-center"><a href="mailto:contact@le-campus-numerique.fr"
                                                        class="text-dark"><img
                                    src="mail.png" width="30" height="30" title="mail" alt="mail"><br>
                                contact@le-campus-numerique.fr</a>
                        </p>
                        <p class="col-4 text-center"><img src="adresse.png" alt="lieu" width="30" height="30"/><br>
                            33 Grande Rue,26000 valence</p>
                        <p class="col-4 text-center"><img src="tel.png" alt="tel" width="30" height="30"><br>
                            04 75 78 61 33</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>

