@extends('layout.base')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <h1>Créer un produits</h1><br/>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @endif
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Nom du produit</label>
                    <input type="text" class="ferm-control" id="name" name="name"
                     placeholder="saisir le nom du produit ici...">
                     <label for="price">Prix du produit</label>
                     <input type="number" name="price" id="price" mine="100"
                     max="1000000" value="100" rows="4" class="form-control" >

                    <label for="description">Description du produit</label>
                    <textarea name="description" id="description" 
                    placeholder="Saisir la description ici..." rows="4" class="form-control">
                    </textarea>
                    
                    <label for="file">Image de couverture</label>
                    <div>
                        <input type="file" name="file" id="file" 
                        placeholder="Inserer un ficher" class="form-control">
                    </div>
                    <br/>
                    
                    <button type="submit" class="btn btn-primary">publier
                    </button>

                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endsection
