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

    <div class="container ">
        <div class="row justify-content-center">
            <img src="/img/logo.png" alt="AbbéBiere" width="60%">
        </div>
    </div>
    <div class="row nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav  ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.show') }}">Accueil<span
                                    class="sr-only ">(current)</span>
                            </a>
                        </li>
                        @php
                            $categories = App\Category::all();
                        @endphp
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{route('categories.show',$category)}}">{{$category->name}}
                                    <span
                                        class="sr-only ">(current)</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class=" navbar-nav  ">
                        @if (Route::has('login'))
                            <li class="nav-item text-center">
                                @auth
                                    <a class="nav-link" href="{{ route('profil.show') }}">Profil</a>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="{{ route('logout') }}"><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                                        <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                                    </svg>Logout</a>
                            </li>
                        @else
                            <li class="nav-item text-center">
                                <a class="nav-link" href="{{ route('login') }}"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    </svg> Login</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="{{ route('register') }}"><svg class="bi bi-person-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm4.5 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                    </svg> Register</a>
                            </li>
                        @endif
                        @endauth
                        <li>
                            <div class="col-2 text-center ">
                                <button type="button" class="btn btn-outline-warning pull-right"><a
                                        href="{{route('cart.show')}}"
                                        style="color: #EAA90B"> <svg class="bi bi-basket" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                                            <path fill-rule="evenodd" d="M1 7v1h14V7H1zM.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5z"/>
                                            <path fill-rule="evenodd" d="M14 9H2v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9zM2 8a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9a1 1 0 0 0-1-1H2z"/>
                                            <path fill-rule="evenodd" d="M4 10a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                                        </svg></a>
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
    <div class="row justify-content-center align-items-center footer">
        <div class="col-12 text-center footer">
            <p>ligne de rassurance</p>
        </div>
        <div class="col-12 reassuranceLine">
            <nav class="navbar navbar-expand-lg text-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.show') }}">Accueil<span
                                    class="sr-only ">(current)</span>
                            </a>
                        </li>
                        @php
                            $categories = App\Category::all();
                        @endphp
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{route('categories.show',$category)}}">{{$category->name}}
                                    <span
                                        class="sr-only ">(current)</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-4 border-right text-center border-dark">
            <p class="h6 mt-4">CONTACT</p>
            <p><a href="mailto:amelie.roy@le-campus-numerique.fr"
                  class="text-dark">amelie.roy@le-campus-numerique.fr</a>
            </p>
            <p><a href="mailto:jonathan.maran@le-campus-numerique.fr" class="text-dark">jonathan.maran@le-campus-numerique.fr</a>
            </p>
            <p><a href="mailto:maxime.silva@le-campus-numerique.fr" class="text-dark">maxime.silva@le-campus-numerique.fr</a>
            </p>
            <p class="text-center">33 Grande Rue,26000 valence</p>
            <p class="text-center">04 75 78 61 33</p>
        </div>
        <div class="col-12 col-md-4 text-center">
            <p class="h6">JOIN US</p>
        </div>
        <div class="col-12 text-center reassuranceLine">
            <p class="h5">Copyright</p>
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

