@php
 $page_title = 'Shop';   
@endphp
@extends("layouts.app")
@section("page_content")
<h1>barber shop</h1>
<ul>
    @foreach ($barbers as $barber)
        <li class="mb-3">
            <a href="{{ route('barbers.show', $barber->id) }}">
                {{ $barber->name }}
            </a>
            <div class="container d-flex">
            <a href="{{route('barbers.edit',  $barber->id)}}" class="btn btn-primary">modifica</a>
            <form action="{{route('barbers.destroy',  $barber->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
        </li>
    @endforeach
</ul>
<a href="{{route('barbers.create')}}" class="btn btn-primary">crea nuovo</a>
@endsection