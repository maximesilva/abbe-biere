@extends('layout')

@section('main')
    <main>
        @if(!empty($cart))
            @foreach($cart as $item)
                <div class="container text-center align-items-center cart">
                    <div class="card cart">
                        <div class="row  align-items-center">
                            <div class="col-md-4">
                                <img src="/img/produit.png" class="card-img" alt="biere">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title h3">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <p class="card-text">{{ $item->volume }} ml | TVA {{ $item->vat }} %</p>
                                    <p class="card-text h5">PRIX: {{ $item->price }} € </p>
                                    <div class="row justify-content-center">
                                        <form method="post" action="{{route('cart.update')}}" class="mr-2">
                                            @csrf
                                            @if($item->stock > 0)
                                                <label for="quantity"> Quantité </label>
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <select type="number" id="quantity" name="quantity">
                                                    @for($i = 0; $i<$item->stock; $i++)
                                                        @if($qantity=1+$i == $item->quantity)
                                                            <option value="{{$qantity=1+$i}}"
                                                                    selected>{{$quantity=1+$i}}</option>
                                                        @endif
                                                        <option value="{{$quantity=1+$i}}">{{$quantity=1+$i}}</option>
                                                    @endfor
                                                </select>
                                                <button type="submit" class="btn">Modifier le panier</button>
                                            @else
                                                <p>Ce produit n'est plus disponible</p>
                                            @endif
                                        </form>
                                        <form method="post" action="{{route('cart.remove')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <button type="submit" class="btn">X</button>
                                        </form>
                                    </div>
                                    <p class="card-text h5">PRIX TOTAL: {{ $item->price * $item->quantity }} € </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container text-center align-items-center cart p-3 ">
                <form method="post" class="cart" action="{{route('cart.validate')}}">
                    @csrf
                    @if($item->stock > 0)
                        <p class="h5"> TOTAL DE VOTRE COMMANDE : {{$total}} €</p>
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                            COMMANDER
                        </button>
                    @else
                        <p>Ce produit n'est plus disponible</p>
                    @endif
                </form>
            </div>
        @else
            <div class="text-center cart p-3">
                votre panier est vide
            </div>
        @endif
            <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EH NON !!!!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Nous vous remercions de l'intérêt que vous apportez à notre site.
                                Ils vous est impossible de commander cependant, vous pouvez nous joindre pour vos futurs projets web !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection



