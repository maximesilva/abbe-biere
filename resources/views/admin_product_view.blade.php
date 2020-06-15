@extends('layout')
@section('main')
    <main>
        <div class="row">
            <div class="container text-center align-items-center ">
                <div class="card product">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="/img/produit.png" class="card-img" alt="biere">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form method="post" action="{{route('admin.product.update')}}">
                                    @csrf
                                    <div>
                                        <label for="name">name</label>
                                        <input type="text" value="{{$product->name}}" name="name">
                                    </div>
                                    <div>
                                        <label for="category">category</label>
                                        <input type="number" name="category" value="{{$product->category_id}}">
                                    </div>
                                    <div>
                                        <label for="description">description</label>
                                        <textarea name="description">{{$product->description}}</textarea>
                                    </div>
                                    <div>
                                        <label for="volume">volume</label>
                                        <input type="number" name="volume" value="{{$product->volume}}">
                                    </div>
                                    <div>
                                        <label for="vat">vat</label>
                                        <input type="number" name="vat" value="{{$product->vat}}">
                                    </div>
                                    <div>
                                        <label for="price">price</label>
                                        <input type="number" name="price" value="{{$product->price}}">
                                    </div>
                                    <div>
                                        <label for="weight">weight</label>
                                        <input type="number" name="weight" value="{{$product->weight}}">
                                    </div>
                                    <div>
                                        <label for="stock">stock</label>
                                        <input type="number" name="stock" value="{{$product->stock}}">
                                    </div>
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <button type="submit" class="btn">modifier le produit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
