@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Computers</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Brand</th>
        </tr>
        </thead>
        <tbody>
        @foreach($computers as $computer)
            <tr>
                <td>{{ $computer['id'] }}</td>
                <td>{{ $computer['number'] }}</td>
                <td>{{ $computer['brand'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
