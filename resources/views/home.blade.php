@extends('layout.main')

@section('content')


<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Original Title</th>
            <th scope="col">Nationality</th>
            <th scope="col">Date</th>
            <th scope="col">Vote</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td><a href="{{ route('movies-detail', ['id' => $movie->id]) }}">{{ $movie->title }}</a></td>
                <td>{{ $movie->original_title }}</td>
                <td>{{ $movie->nationality }}</td>
                <td>{{ $movie->date }}</td>
                <td>{{ $movie->vote }}</td>

            </tr>
            @endforeach

        </tbody>
      </table>
</div>


@endsection
