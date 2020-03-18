@extends('layout')

@section('main')
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @for ($product = 0; $product < 6; $product++)
                <div class="carousel-item active">
                    <img class="d-block" src="img/fond_jpg.jpg" alt="First slide">
                </div>
                @endfor
                {{--<div class="carousel-item">
                    <img class="d-block" src="img/brune.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block align-middle" src="img/ambree.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block align-middle" src="img/fruitee.jpg" alt="Third slide">
                </div>--}}
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
    </main>
@endsection
