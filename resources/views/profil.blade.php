@extends('layout')

@section('main')
    <main>
        <div class="container">
            <ul>
                <li>Nom : {{ $user->name }}</li>
                <li>Prénom : {{ $user->lastname }}</li>
                <li>E-mail :  {{ $user->email }}</li>
            </ul>
        </div>
    </main>
@endsection
