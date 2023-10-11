@extends('layouts.main')

@section('content')
    <h1 class="text-center m-5">Detalle del producto</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <img src="img/producto1.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-4">
                <h1>Nombre del producto</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur eos eveniet nisi laboriosam expedita laborum ipsam ex a excepturi enim, illo accusamus deserunt adipisci possimus, repudiandae corrupti ipsa perspiciatis consequuntur.</p>
                <h3>10000$</h3>
                <button type="button" class="btn my-background">Añadir al carrito</button>
            </div>
        </div>
    </div>
@endsection
      