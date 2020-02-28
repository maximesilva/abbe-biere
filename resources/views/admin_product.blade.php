@extends('layout')

@section('main')


    <form>
        <div class="form-group">
            <label for="category">Categorie</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Blonde</option>
                <option>Brune</option>
                <option>Ambrée</option>
                <option>Fruitée</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description">
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="volume">Volume</label>
            <input type="number" class="form-control" id="volume">
        </div>
        <div class="form-group">
            <label for="vat">TVA</label>
            <input type="number" class="form-control" id="vat">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" id="weight">
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>




@endsection
