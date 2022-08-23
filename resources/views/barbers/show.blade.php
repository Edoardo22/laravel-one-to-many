@php
 $page_title = 'Shop';   
@endphp

@extends("layouts.app")
@section("page_content")
<h1>prodotto singolo</h1>
<div class="card" style="width: 25rem;">
    <img src="{{$barber["image"]}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$barber["name"]}}</h3>
      <h4 class="card-title">{{$barber["price"]}}€</h4>
      <h4 class="card-title">{{$barber["description"]}}</h4>
      <div class="container d-flex  flex-column">
        <a href="{{route('barbers.edit', $barber->id)}}" class="btn btn-primary">modifica</a>
        <a href="{{route('barbers.index')}}" class="btn btn-warning">indietro</a>
        <form action="{{route('barbers.destroy',  $barber->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <button class="btn btn-danger w-100">Elimina</button>
    </form>
</div>
    </div>
  </div>
@endsection