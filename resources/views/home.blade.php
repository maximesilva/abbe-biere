@extends('layout')

@section('main')
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner text-center">
                @foreach($products as $slider => $product)
                    <div class="carousel-item {{ $slider == 0 ? 'active' : '' }}">

                            <img src="{{$product->src}}" class="" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->price }} €</p>
                                <a href="#" class="btn btn-primary">ACHETER</a>
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
            LIGNE DE RASSURANCE
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
        <div class="text-center" id="reassuranceLine">
            AVIS CLIENT
        </div>
        <div class="text-center">
            HISTOIRE
        </div>

    </main>
@endsection
