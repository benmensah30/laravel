@extends('layout.base')
@section('content')
    <h1>Liste des produits</h1>
    <a href="{{ route('product.create') }}"class="btn btn-primary">Créer
    un produit</a>
@endsection