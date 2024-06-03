
@extends('layout.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> liste des catégories</h1>
        </div>
    </div>

    <a href="{{ route("category.create") }}"class="btn btn-primary">créer categorie</a>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut rerum nam architecto tempora quidem quam quos cum beatae a nemo voluptates atque, nesciunt hic excepturi accusantium. Tempore excepturi magnam in!
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut rerum nam architecto tempora quidem quam quos cum beatae a nemo voluptates atque, nesciunt hic excepturi accusantium. Tempore excepturi magnam in!
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut rerum nam architecto tempora quidem quam quos cum beatae a nemo voluptates atque, nesciunt hic excepturi accusantium. Tempore excepturi magnam in!
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut rerum nam architecto tempora quidem quam quos cum beatae a nemo voluptates atque, nesciunt hic excepturi accusantium. Tempore excepturi magnam in!
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>
    </div>
</div>

@endsection