@extends('layout.layout')

@section('content')
  <div class="content">
    <div class="film_box show">
      <div class="box_head">
        <h3>{{ucfirst($film -> title)}}</h3>
        <div class="actions">
          <a href="{{ route('film.edit', $film -> id) }}"><i class="fas fa-edit"></i></a>
          <a href="{{ route('film.destroy', $film -> id) }}"><i class="fas fa-trash-alt"></i></a>
        </div>
      </div>
      <p>{{$film -> film_director}}</p>
      <p>{{$film -> genre}}</p>
      <p>{{$film -> description}}</p>
      <div class="rating">
        @for ($i=0; $i < $film -> rating; $i++)
          <i class="far fa-star yellow"></i>
        @endfor
        @for ($i=0; $i < (5 - $film -> rating); $i++)
          <i class="far fa-star"></i>
        @endfor
      </div>

    </div>
    <a href="{{ route('film.index') }}"><i class="fas fa-long-arrow-alt-left"></i></a>
  </div>
@endsection
