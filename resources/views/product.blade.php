@extends('layout')

@section('main')
    <main>
        <div class="container text-center align-items-center ">
            <div class="card mb-3 product">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4">
                        <img src="/img/produit.png" class="card-img" alt="biere" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title h3">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ $product->volume }} ml | TVA {{ $product->vat }} %</p>
                            <p class="card-text h5">PRIX: {{ $product->price }} € </p>
                            <form method="post" action="">
                                @csrf
                                @if($product->stock > 0)
                                    <label for="quantity"> Quantité </label>
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <select type="number" id="quantity" name="quantity">
                                        @for($i = 0; $i<$product->stock; $i++)
                                            <option value="{{$quantity=1+$i}}">{{$quantity=1+$i}}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="btn">Ajouter un panier</button>
                                @else
                                    <p>Ce produit n'est plus disponible</p>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
