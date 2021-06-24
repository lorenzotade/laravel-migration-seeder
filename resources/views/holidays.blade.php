@extends('layouts.main')

@section('content')
    
  <section class="container text-center">

    <h1 class="my-4">Best Holidays</h1>

    <table class="table">

      <thead>
        <tr>
          <th scope="col">Ref</th>
          <th scope="col">Name</th>
          <th scope="col">Type</th>
          <th scope="col">Departure</th>
          <th scope="col">Duration</th>
          <th scope="col">Price</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($holidays as $holiday)
        <tr>
          <td>{{ $holiday['reference'] }}</td>
          <td>{{ $holiday['name'] }}</td>
          <td>{{ $holiday['type'] }}</td>
          <td>{{ $holiday['departure'] }}</td>
          <td>{{ $holiday['days'] }} days</td>
          <td>${{ $holiday['price'] }}</td>
        </tr>
        @endforeach
      </tbody>

    </table>

  </section>

@endsection