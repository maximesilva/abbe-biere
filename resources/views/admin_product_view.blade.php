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
                                <form method="post" action="{{route('admin.product.remove')}}">
                                    @csrf
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><svg class="bi bi-exclamation-triangle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                        </svg>ATTENTION<svg class="bi bi-exclamation-triangle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                                        </svg> Suppresion d'un article</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Vous allez supprimer le produit : {{ $product->name }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <button type="submit" class="btn btn-primary">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
