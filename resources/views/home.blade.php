@extends('layout')

@section('main')
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center home">
                @foreach($products as $slider => $product)
                    <div class="carousel-item {{ $slider == 0 ? 'active' : '' }}">

                        <img src="/img/produit.png" class="" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} €</p>
                            <form method="get" action="/product/{{$product->id}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button type="submit" class="btn">Acheter</button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="text-center" id="reassuranceLine">
            <div class="row">
            <img src="/img/livraison.png" alt="livraison rapide">
            <img src="/img/SAV.png" alt="SAV">
            <img src="/img/communaute.png" alt="grande communaute">
            <img src="/img/paiement.png" alt="paiement securise">
        </div>
        <div class="container">
            <div class="row m-0 justify-content-center">
                @php
                    $categories = App\Category::all();
                @endphp
                @foreach($categories as $category)
                    <a class="col-md-6 text-center" href="{{route('categories.show',$category)}}">
                        <img src="/img/{{$category->name}}.jpg" width="100%" alt="{{$category->name}}">
                    </a>
                @endforeach
            </div>
        </div>
        <div class="text-center p-3" id="reassuranceLine">
            <p class="container paragraph-color mx-auto">
                Bienvenu chez l’Abbé Bière, 3 jeunes développeurs, Amélie Roy, Maxime Silva et Jonathan Maran vous ont concocté cette boutique pour exercer leurs nouvelles compétences en PHP/Laravel. C’est dans l’univers de la bière que nous avons décidés d’exprimer notre imagination.
                De la configuration serveur, l’achat du nom de domaine jusqu’à l’HTML en passant par le PHP, tout a été fait dans une collaboration minutieuse et fusionnele de l’équipe.<br>
                C’est avec fierté, aujourd’hui, qu’on vous présente ce projet, qui est « NOTRE PROJET !!!! ».
            </p>
        </div>
    </main>
@endsection
