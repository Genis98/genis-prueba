@extends('home')
@section('content')

<form action="/" class="d-inline-flex p-5">
    <input class="form-control m-2" type="text" name="search" placeholder="Buscar producto..." value="{{ request()->input('search') }}">

    <select class="form-select m-2" name="select">
        <option value="">--Seleccionar marca--</option>
        @unless(count($brands) == 0)
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        @else 
            <option>No hay marcas</option>
        @endunless
    </select>
    
    <input class="btn btn-primary m-2" type="submit" value="Buscar">
</form>
<hr/>

@unless(count($products) == 0)
    <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{$product->name}}</h5>
                    <h5>Precio: {{$product->price}} €</h5>
                    <h5>Marca: {{$product->brandName}}</h5>
                    <p class="card-text">Descripción: {{$product->description}}</p>
                    <a href="{{url('/product/'.$product->id)}}" class="btn btn-primary">Ver producto</a>
                </div>
            </div>
        @endforeach
    </div>
@else 
    <p class="m-4">No hay productos</p>
@endunless

@endsection