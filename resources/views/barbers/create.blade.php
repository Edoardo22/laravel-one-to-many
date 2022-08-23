
@php
$page_title = 'Shop';   
@endphp
@extends("layouts.app")
@section("page_content")
<h1>crea prodotto</h1>
<form action="{{route('barbers.store')}}" method="post">
    @csrf
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3">
        <label for="titleComic" class="form-label">Titolo prodotto</label>
        <input type="title" name="name" class="form-control" id="titleComic" placeholder="Titolo Fumetto" value="{{old('title')}}">
    </div>
    <div class="mb-3">
        <label for="descriptionComic" class="form-label">Descrizione prodotto</label>
        <textarea class="form-control" name="description" id="descriptionComic" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="imageSrc" class="form-label">Percorso Immagine</label>
        <input type="title" name="image" class="form-control" id="imageSrc" placeholder="Percorso Immagine">
    </div>
    <div class="mb-3">
        <label for="priceComic" class="form-label">Prezzo prodotto</label>
        <input type="title" name="price" class="form-control" id="priceComic" placeholder="Prezzo Fumetto">
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-success">Aggiungi</button>
        <a href="{{ route("barbers.index")}}" class="btn btn-secondary">Annulla</a>
    </div>

  </form>
@endsection