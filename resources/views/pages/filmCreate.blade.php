@extends('layout.layout')

@section('content')
  <div class="content">
    <h2> Aggiungi un nuovo contenuto </h2>
    <div class="form">
      <form  action="{{ route('film.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" value="">

        <label for="film_director">Film Director</label>
        <input type="text" name="film_director" value="">

        <label for="description">Description</label>
        <input type="text" name="description" value="">

        <p>Genre</p>
        <select name="genre">
          <option value=""></option>
          @foreach ($genres as $genre)
            <option value="{{$genre}}">{{$genre}}</option>
          @endforeach
        </select>

        <label for="rating">Rating</label>
        <input type="number" name="rating" value="">

        <button type="submit" name="button">Create</button>
      </form>
      <a href="{{ route('film.index') }}"><i class="fas fa-long-arrow-alt-left"></i></a>
    </div>
  </div>
@endsection
