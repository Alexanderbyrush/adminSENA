@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Areas</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
