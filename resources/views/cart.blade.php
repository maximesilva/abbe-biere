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
                            <h5 class="card-title h3">{{ $item[0]->name }}</h5>
                            <p class="card-text">{{ $item[0]->description }}</p>
                            <p class="card-text">{{ $item[0]->volume }} ml | TVA {{ $item[0]->vat }} %</p>
                            <p class="card-text h5">PRIX: {{ $item[0]->price }} € </p>
                            <form method="post">
                                @csrf
                                @if($item[0]->stock > 0)
                                    <label for="quantity"> Quantité </label>
                                    <input type="hidden" name="id" value="{{$item[0]->id}}">
                                    <select type="number" id="quantity" name="quantity">
                                        <option value="{{$item->quantity}}">{{$item->quantity}}</option>
                                        @for($i = 0; $i<$item[0]->stock; $i++)
                                            <option value="{{$quantity=1+$i}}">{{$quantity=1+$i}}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="btn btn-primary">Modifier le panier</button>
                                @else
                                    <p>Ce produit n'est plus disponible</p>
                                @endif
                            </form>
                            <p class="card-text h5">PRIX TOTAL: {{ $item[0]->price * $item->quantity }} € </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div>

    </div>

@endsection



