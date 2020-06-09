@extends('layout')

@section('main')

    @foreach($cart as $item)
        <div class="container text-center align-items-center">
            <div class="card mb-3">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4">
                        <img src="/img/produit.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title h3">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text">{{ $item->volume }} ml | TVA {{ $item->vat }} %</p>
                            <p class="card-text h5">PRIX: {{ $item->price }} € </p>
                            <form method="post" action="/cart/update">
                                @csrf
                                @if($item->stock > 0)
                                    <label for="quantity"> Quantité </label>
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <select type="number" id="quantity" name="quantity">
                                        @for($i = 0; $i<$item->stock; $i++)
                                            @if($qantity=1+$i == $item->quantity)
                                                <option value="{{$qantity=1+$i}}" selected>{{$quantity=1+$i}}</option>
                                            @endif
                                            <option value="{{$quantity=1+$i}}">{{$quantity=1+$i}}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="btn btn-primary">Modifier le panier</button>
                                @else
                                    <p>Ce produit n'est plus disponible</p>
                                @endif
                            </form>
                            <p class="card-text h5">PRIX TOTAL: {{ $item->price * $item->quantity }} € </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container text-center align-items-center">
        <form method="post" >
            @csrf
            @if($item->stock > 0)
                <p> TOTAL DE VOTRE COMMANDE : {{$total}} €</p>
                <button type="submit" class="btn btn-primary">COMMANDER</button>
            @else
                <p>Ce produit n'est plus disponible</p>
            @endif
        </form>

    </div>

@endsection



