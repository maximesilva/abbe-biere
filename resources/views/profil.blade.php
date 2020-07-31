@extends('layout')

@section('main')
    <main>
        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-6 profil">
                    <div class="col-12 text-center">
                        <p> Mes informations personnelles</p>
                    </div>
                    <ul>
                        <li>Nom : {{ $user->name }}</li>
                        <li>Prénom : {{ $user->lastname }}</li>
                        <li>E-mail : {{ $user->email }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
