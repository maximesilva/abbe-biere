@extends('layout')

@section('main')
    <main>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="card col-sm-6 col-md-4 col-lg-3 category text-center">
                        <img src="/img/produit.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }} </p>
                            <div class="align-bottom">
                                <p class="card-text align-bottom">{{ $product->price }} € </p>
                                <p class="card-text align-bottom">{{ $product->volume }} ml </p>
                                <p class="card-text align-bottom">TVA {{ $product->vat }} </p>
                                <p class="card-text align-bottom">Stock restant : {{ $product->stock }} </p>
                                <form>
                                    @if($product->stock > 0)
                                        <label for="quantity"> Quantité </label>
                                        <select type="number" id="quantity" name="{{$product->id}}">
                                            @for($i = 0; $i<$product->stock; $i++)
                                                <option value="{{$quantity=1+$i}}">{{$quantity=1+$i}}</option>
                                            @endfor
                                        </select>

                                        <a href="#" class="btn align-bottom">ajouter au panier</a>
                                    @else
                                        <p class="outofstock">Ce produit n'est plus disponible</p>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
