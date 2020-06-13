@extends('layout')

@section('main')
    <main>
        <div class="container">
            <form method="post" class="product">
                @csrf
                <div class="form-group">
                    <label for="category">Categorie</label>
                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                        <option value="1">Blondes</option>
                        <option value="2">Brunes</option>
                        <option value="3">Ambrées</option>
                        <option value="4">Fruitées</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" name="price" id="price">
                </div>
                <div class="form-group">
                    <label for="volume">Volume</label>
                    <input type="number" class="form-control" name="volume" id="volume">
                </div>
                <div class="form-group">
                    <label for="vat">TVA</label>
                    <input type="number" class="form-control" name="vat" id="vat">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock">
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" name="weight" id="weight">
                </div>

                <button type="submit" class="btn">Créer</button>
            </form>
        </div>
    </main>
@endsection
