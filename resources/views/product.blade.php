@extends('layout')

@section('main')

    <div class="container text-center align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }} </p>
                <p class="card-text">{{ $product->price }} € </p>
                <p class="card-text">{{ $product->volume }} ml </p>
                <p class="card-text">TVA {{ $product->vat }} </p>
                <p class="card-text">Stock restant : {{ $product->stock }} </p>
                <form>
                    @if($product->stock > 0)
                        <label for="quantity"> Quantité </label>
                        <select type="number" id="quantity" name="quantity">
                            @for($i = 0; $i<$product->stock; $i++)
                                <option>{{$quantity=1+$i}}</option>
                            @endfor
                        </select>

                        <a href="#" class="btn btn-primary">ajouter au panier</a>
                    @else
                        <p>Ce produit n'est plus disponible</p>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection
