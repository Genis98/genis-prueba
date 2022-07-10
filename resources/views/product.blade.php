@extends('home')
@section('content')
<div class="row justify-content-center">
    @foreach($product as $p)
    <div class="card m-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{$p->name}}</h5>
            <h5>Precio: {{$p->price}} €</h5>
            <p class="card-text">Descripción: {{$p->description}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection